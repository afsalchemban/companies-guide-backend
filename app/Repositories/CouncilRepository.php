<?php

namespace App\Repositories;

use App\Events\UserCreated;
use App\Http\Resources\Council\Dashboard\CouncilDashboardResource;
use App\Http\Resources\Council\Public\CouncilPublicResource;
use App\Interfaces\CouncilRepositoryInterface;
use App\Services\CloudStorageService;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;
use App\Models\Image;
use App\Models\User;
use App\Services\Image\ImageService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CouncilRepository implements CouncilRepositoryInterface
{
    public function __construct(CloudStorageService $cloudStorage,ImageService $imageService)
    {
        $this->cloudStorage = $cloudStorage;
        $this->imageService = $imageService;
    }
    public function getAllCouncils()
    {
        return CouncilDashboardResource::collection(Council::withCount(['companies','members'])->with('images')->get());
    }
    public function getCouncilById($councilId)
    {
        
    }
    public function deleteCouncil(Council $council)
    {
        return $council->delete();
    }
    public function createCouncil(array $councilDetails)
    {
        $council = Council::create($councilDetails);
        //adding cover image
        if(isset($councilDetails['cover_image_file']))
        {
            $this->imageService->updateCouncilCoverImage($council,$councilDetails['cover_image_file']);
            unset($councilDetails['cover_image_file']);
        }
        else
        {
            $this->imageService->addDefaultCouncilCoverImage($council);
        }
        //adding logo image
        if(isset($councilDetails['logo_file']))
        {
            $this->imageService->updateCouncilLogoImage($council,$councilDetails['logo_file']);
            unset($councilDetails['logo_file']);
        }
        else
        {
            $this->imageService->addDefaultCouncilLogoImage($council);
        }
        
        return $council;
    }
    public function updateCouncil(Council $council, array $newDetails)
    {
        $council->update($newDetails);
        return new CouncilPublicResource($council->load('images'));
    }
    public function createUserForCouncil(Council $council)
    {
        $user = new User();
        $user->name = $council->council_name;
        $user->email = $council->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->userable()->associate($council);
        $user->save();
        UserCreated::dispatch($user,'dummypassword',$council);
        return $user;
    }
    public function changeLogo(UploadedFile $file, Council $council)
    {
        $this->imageService->updateCouncilLogoImage($council,$file);
        return new CouncilPublicResource($council->load('images'));
    }
    public function changeCover(UploadedFile $file, Council $council)
    {
        $this->imageService->updateCouncilCoverImage($council,$file);
        return new CouncilPublicResource($council->load('images'));
    }
    public function addMedia(array $mediaDetails, Council $council)
    {
        $media = $council->medias()->create(array_filter($mediaDetails,function($k){
                return $k != 'file';
            }, ARRAY_FILTER_USE_KEY));
        $this->imageService->updateCouncilMediaImage($council,$media,$mediaDetails['file']);
        return $media;
        
    }
    public function addEvent(array $eventDetails, Council $council)
    {
        $event = $council->events()->create(array_filter($eventDetails,function($k){
            return $k != 'image';
        }, ARRAY_FILTER_USE_KEY));
        
        if(isset($eventDetails['image']))
        {
            $this->imageService->updateCouncilEventImage($council,$event,$eventDetails['image']);
        }
        else
        {
            $this->imageService->addDefaultCouncilEventImage($event);
        }
        return $event;
    }
    private function _uploadProfileImage($file)
    {
        return $file->store('councils/members/profile-images');
    }
    public function createCouncilMember(array $councilMemberDetails)
    {
        $council = Auth::user()->userable;
        $member = $council->members()->create(array_filter($councilMemberDetails,function($k){
            return $k != 'profile_image_file';
        }, ARRAY_FILTER_USE_KEY));

        if(isset($councilMemberDetails['profile_image_file']))
        {
            $this->imageService->updateCouncilMemberProfileImage($council,$member,$councilMemberDetails['profile_image_file']);
        }
        else
        {
            $this->imageService->addDefaultCouncilMemmberProfileImage($member);
        }
        return $member;
    }
    private function _uploadLogoImage($file)
    {
        return $file->store('councils/companies/logos');
    }
    private function _updateCompanyActivity($activities,$councilCompany){
        $activities = json_decode($activities);
        $councilCompany->companyActivity()->sync($activities);
    }
    public function createCouncilCompany(array $councilCompanyDetails)
    {
        $council = Auth::user()->userable;
        $company = $council->companies()->create(array_filter($councilCompanyDetails,function($k){
            return $k != 'logo_file' && $k != 'company_activity_id';
        }, ARRAY_FILTER_USE_KEY));
        $this->_updateCompanyActivity($councilCompanyDetails['company_activity_id'],$company);
        if(isset($councilCompanyDetails['logo_file']))
        {
            $this->imageService->updateCouncilCompanyLogo($council,$company,$councilCompanyDetails['logo_file']);
        }
        else
        {
            $this->imageService->addDefaultCouncilCompanyLogo($company);
        }
        return $company;
    }
    public function updateCouncilCompany(array $newDetails, CouncilCompany $councilCompany)
    {
        $this->_updateCompanyActivity($newDetails['company_activity_id'],$councilCompany);
        return $councilCompany->update(array_filter($newDetails,function($k){
            return $k != 'company_activity_id';
        }, ARRAY_FILTER_USE_KEY));
    }
    public function updateCouncilMember(array $newDetails, CouncilMember $councilMember)
    {
        return $councilMember->update($newDetails);
    }
    public function changeCompanyLogo(UploadedFile $file,Council $council, CouncilCompany $councilCompany)
    {
        $this->imageService->updateCouncilCompanyLogo($council,$councilCompany,$file);
    }
    public function changeMemberImage(UploadedFile $file,Council $council, CouncilMember $councilMember)
    {
        $this->imageService->updateCouncilMemberProfileImage($council,$councilMember,$file);
    }
    public function updateEvent(array $newDetails, CouncilEvent $councilEvent)
    {
        return $councilEvent->update($newDetails);
    }
    public function updateMedia(array $newDetails, CouncilMedia $councilMedia)
    {
        return $councilMedia->update($newDetails);
    }
    public function deleteMedia(CouncilMedia $councilMedia)
    {
        return $councilMedia->delete();
    }
    public function deleteEvent(CouncilEvent $councilEvent)
    {
        return $councilEvent->delete(); 
    }
}
