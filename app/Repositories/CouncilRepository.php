<?php

namespace App\Repositories;

use App\Events\UserCreated;
use App\Interfaces\CouncilRepositoryInterface;
use App\Services\CloudStorageService;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilGallery;
use App\Models\CouncilMember;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CouncilRepository implements CouncilRepositoryInterface
{
    public function __construct(CloudStorageService $cloudStorage)
    {
        $this->cloudStorage = $cloudStorage;
    }
    public function getAllCouncils()
    {
        return Council::withCount(['companies','members'])->get();
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
        $councilDetails['cover_image_path'] = isset($councilDetails['cover_image_file'])?
            Storage::url($this->cloudStorage->storeFile('councils/cover-images', $councilDetails['cover_image_file'])):
            Storage::url('councils/cover-images/no-image.png');
        unset($councilDetails['cover_image_file']);   

        $councilDetails['logo_image_path'] = isset($councilDetails['logo_file'])?
            Storage::url($this->cloudStorage->storeFile('councils/logos', $councilDetails['logo_file'])):
            Storage::url('councils/logos/no-image.png');
        unset($councilDetails['logo_file']);
        

        return Council::create($councilDetails);
    }
    public function updateCouncil(Council $council, array $newDetails)
    {
        return $council->update($newDetails);
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
        UserCreated::dispatch($user,'dummypassword');
        //MailService::sendSaleCredentialMail($sale,'dummypassword');
        return $user;
    }
    public function changeLogo(UploadedFile $file, Council $council)
    {
        if($path = $this->cloudStorage->storeFile('councils/logos', $file))
        {
            $council->logo_image_path = Storage::url($path);
            $council->save();
            return $council;
        }
    }
    public function changeCover(UploadedFile $file, Council $council)
    {
        if($path = $this->cloudStorage->storeFile('councils/cover-images', $file))
        {
            $council->cover_image_path = Storage::url($path);
            $council->save();
            return $council;
        }
    }
    public function addGalleryImage(array $galleryDetails, Council $council)
    {
        if($path = $this->cloudStorage->storeFile('councils/gallery', $galleryDetails['file']))
        {   
            $galleryDetails['file_path']= Storage::url($path);
            unset($galleryDetails['file']);
            $gallery = $council->medias()->create($galleryDetails);
            return $gallery;
        }
    }
    public function addEvent(array $eventDetails, Council $council)
    {
        if($path = $this->cloudStorage->storeFile('councils/events', $eventDetails['image']))   
        {
            $eventDetails['image_path']= Storage::url($path);
            unset($eventDetails['image']);
            $event = $council->events()->create($eventDetails);
            return $event;
        }
    }
    private function _uploadProfileImage($file)
    {
        return $file->store('councils/members/profile-images');
    }
    public function createCouncilMember(array $councilMemberDetails)
    {
        $council = Auth::user()->userable;
        $councilMemberDetails['profile_image'] = isset($councilMemberDetails['profile_image_file'])?
            Storage::url($this->_uploadProfileImage($councilMemberDetails['profile_image_file'])):
            Storage::url('councils/members/profile-images/no-image.png');
        unset($councilMemberDetails['logo_file']);
        $member = $council->members()->create($councilMemberDetails);
        return $member;
    }
    private function _uploadLogoImage($file)
    {
        return $file->store('councils/companies/logos');
    }
    public function createCouncilCompany(array $councilCompanyDetails)
    {
        $councilCompanyDetails['logo_image_path'] = isset($councilCompanyDetails['logo_file'])?
            Storage::url($this->_uploadLogoImage($councilCompanyDetails['logo_file'])):
            Storage::url('councils/companies/logos/no-image.png');
        unset($councilCompanyDetails['logo_file']);
        $council = Auth::user()->userable;
        $company = $council->companies()->create($councilCompanyDetails);
        return $company;
    }
    public function updateCouncilCompany(array $newDetails, CouncilCompany $councilCompany)
    {
        return $councilCompany->update($newDetails);
    }
    public function updateCouncilMember(array $newDetails, CouncilMember $councilMember)
    {
        return $councilMember->update($newDetails);
    }
    public function changeCompanyLogo(UploadedFile $file, CouncilCompany $councilCompany)
    {
        if($path = $this->cloudStorage->storeFile('councils/companies/logos', $file))
        {
            $councilCompany->logo_image_path = Storage::url($path);
            $councilCompany->save();
            return $councilCompany;
        }
    }
    public function changeMemberImage(UploadedFile $file, CouncilMember $councilMember)
    {
        if($path = $this->cloudStorage->storeFile('councils/members/profile-images', $file))
        {
            $councilMember->profile_image = Storage::url($path);
            $councilMember->save();
            return $councilMember;
        }
    }
    public function updateEvent(array $newDetails, CouncilEvent $councilEvent)
    {
        return $councilEvent->update($newDetails);
    }
    public function updateMedia(array $newDetails, CouncilGallery $councilMedia)
    {
        return $councilMedia->update($newDetails);
    }
    public function deleteMedia(CouncilGallery $councilGallery)
    {
        return $councilGallery->delete();
    }
    public function deleteEvent(CouncilEvent $councilEvent)
    {
        return $councilEvent->delete(); 
    }
}
