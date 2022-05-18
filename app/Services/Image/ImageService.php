<?php

namespace App\Services\Image;

use App\Constants\DefaultImageConstants;
use App\Models\Company;
use App\Models\Council;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\Image;
use App\Models\Sale;
use App\Services\CloudStorageService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function __construct(CloudStorageService $cloudStorage)
    {
        $this->cloudStorage = $cloudStorage;
    }
    public function addDefaultSaleProfileImage(Sale $sale){
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::SALE_PROFILE_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::SALE_PROFILE_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::SALE_PROFILE_THUMBNAIL);
        $image->type = 'profile';
        $image->imageble()->associate($sale);
        $image->save();
    }
    public function addDefaultCompanyLogoImage(Company $company){
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL);
        $image->type = 'logo';
        $image->imageble()->associate($company);
        $image->save();
    }
    public function updateSaleProfileImage(Sale $sale , UploadedFile $file)
    {
        $sale->images()->where('type','profile')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("sales/sale_$sale->id/profile/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("sales/sale_$sale->id/profile/mobile", $file));
        $image->thumbnail_path = Storage::url($this->cloudStorage->storeFile("sales/sale_$sale->id/profile/thumbnail", $file));
        $image->type = 'profile';
        $image->imageble()->associate($sale);
        $image->save();
    }
    public function updateCompanyLogoImage(Company $company, UploadedFile $file)
    {
        $company->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("companies/company_$company->id/logo/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("companies/company_$company->id/logo/mobile", $file));
        $image->thumbnail_path = Storage::url($this->cloudStorage->storeFile("companies/company_$company->id/logo/thumbnail", $file));
        $image->type = 'logo';
        $image->imageble()->associate($company);
        $image->save();
    }

    public function addDefaultCouncilLogoImage(Council $council)
    {
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COUNCIL_LOGO_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COUNCIL_LOGO_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::COUNCIL_LOGO_THUMBNAIL);
        $image->type = 'logo';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function addDefaultCouncilCoverImage(Council $council)
    {
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COUNCIL_COVER_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COUNCIL_COVER_MOBILE);
        $image->type = 'cover';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function updateCouncilCoverImage(Council $council, UploadedFile $file)
    {
        $council->images()->where('type','cover')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/cover/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/cover/mobile", $file));
        $image->type = 'cover';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function updateCouncilLogoImage(Council $council, UploadedFile $file)
    {
        $council->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/logo/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/logo/mobile", $file));
        $image->thumbnail_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/logo/thumbnail", $file));
        $image->type = 'logo';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function updateCouncilEventImage(Council $council, CouncilEvent $councilEvent, UploadedFile $file)
    {
        $councilEvent->images()->where('type','event')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/events/event_$councilEvent->id/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/events/event_$councilEvent->id/mobile", $file));
        $image->thumbnail_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/events/event_$councilEvent->id/thumbnail", $file));
        $image->type = 'event';
        $image->imageble()->associate($councilEvent);
        $image->save();
    }
    public function addDefaultCouncilEventImage(CouncilEvent $councilEvent)
    {
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COUNCIL_EVENT_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COUNCIL_EVENT_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::COUNCIL_EVENT_MOBILE);
        $image->type = 'event';
        $image->imageble()->associate($councilEvent);
        $image->save();
    }

    public function updateCouncilMediaImage(Council $council, CouncilMedia $councilMedia, UploadedFile $file)
    {
        $councilMedia->images()->where('type','media')->delete();
        $image = new Image;
        $image->desktop_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/media/media_$councilMedia->id/desktop", $file));
        $image->mobile_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/media/media_$councilMedia->id/mobile", $file));
        $image->thumbnail_path = Storage::url($this->cloudStorage->storeFile("councils/council_$council->id/media/media_$councilMedia->id/thumbnail", $file));
        $image->type = 'media';
        $image->imageble()->associate($councilMedia);
        $image->save();
    }
}
