<?php

namespace App\Services\Image;

use App\Constants\DefaultImageConstants;
use App\Models\Banner;
use App\Models\Company;
use App\Models\CompanyProduct;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;
use App\Models\Image;
use App\Models\Sale;
use App\Services\CloudStorageService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIntervention;

class ImageService
{
    public function __construct(CloudStorageService $cloudStorage)
    {
        $this->cloudStorage = $cloudStorage;
    }
    private function _resizeImageWithStretching($dimension,UploadedFile $file,$path)
    {
        $img = ImageIntervention::make($file->path());
        $resized = $img->resize($dimension['width'], $dimension['height'])->stream($file->extension());
        $fileName = $path.'/'.time().'.'.$file->extension();
        Storage::put($fileName, $resized);
        return Storage::url($fileName);
    }
    private function _resizeImage($dimension,UploadedFile $file,$path)
    {
        $img = ImageIntervention::make($file->path());
        // we need to resize image, otherwise it will be cropped 
        if ($img->width() > $dimension['width']) { 
            $img->resize($dimension['width'], null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        if ($img->height() > $dimension['height']) {
            $img->resize(null, $dimension['height'], function ($constraint) {
                $constraint->aspectRatio();
            }); 
        }
        $resized = $img->resizeCanvas($dimension['width'], $dimension['height'], 'center', false, '#ffffff')->stream($file->extension());
        $fileName = $path.'/'.time().'.'.$file->extension();
        Storage::put($fileName, $resized);
        return Storage::url($fileName);
    }
    private function _resizeImageJob($dimension,$file,$path)
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        $img = ImageIntervention::make($file);
        // we need to resize image, otherwise it will be cropped 
        if ($img->width() > $dimension['width']) { 
            $img->resize($dimension['width'], null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        if ($img->height() > $dimension['height']) {
            $img->resize(null, $dimension['height'], function ($constraint) {
                $constraint->aspectRatio();
            }); 
        }
        $resized = $img->resizeCanvas($dimension['width'], $dimension['height'], 'center', false, '#ffffff')->stream($extension);
        $fileName = $path.'/'.time().'.'.$extension;
        Storage::put($fileName, $resized);
        return Storage::url($fileName);
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
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::SALE_PROFILE_DESKTOP_SIZE,$file,"sales/sale_$sale->id/profile/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::SALE_PROFILE_MOBILE_SIZE,$file,"sales/sale_$sale->id/profile/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::SALE_PROFILE_THUMBNAIL_SIZE,$file,"sales/sale_$sale->id/profile/thumbnail");
        $image->type = 'profile';
        $image->imageble()->associate($sale);
        $image->save();
    }
    public function updateCompanyLogoImage(Company $company, UploadedFile $file)
    {
        $company->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_DESKTOP_SIZE,$file,"companies/company_$company->id/logo/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_MOBILE_SIZE,$file,"companies/company_$company->id/logo/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL_SIZE,$file,"companies/company_$company->id/logo/thumbnail");
        $image->type = 'logo';
        $image->imageble()->associate($company);
        $image->save();
    }

    public function updateCompanyLogoImageForJob($company, $file)
    {
        $company = Company::find($company);
        $company->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_LOGO_DESKTOP_SIZE,$file,"companies/company_$company->id/logo/desktop");
        $image->mobile_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_LOGO_MOBILE_SIZE,$file,"companies/company_$company->id/logo/mobile");
        $image->thumbnail_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL_SIZE,$file,"companies/company_$company->id/logo/thumbnail");
        $image->type = 'logo';
        $image->imageble()->associate($company);
        $image->save();
    }

    public function updateCompanyProfilPageImages($company, $files)
    {
        $company->images()->where('type','profile-page-image')->delete();
        foreach ($files as $file) {
            $image = new Image;
            $image->desktop_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PROFILE_PAGE_IMAGE_DESKTOP_SIZE,$file,"companies/company_$company->id/profile-page-images/desktop");
            $image->mobile_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PROFILE_PAGE_IMAGE_MOBILE_SIZE,$file,"companies/company_$company->id/profile-page-images/mobile");
            $image->thumbnail_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PROFILE_PAGE_IMAGE_THUMBNAIL_SIZE,$file,"companies/company_$company->id/profile-page-images/thumbnail");
            $image->type = 'profile-page-image';
            $image->imageble()->associate($company);
            $image->save();
        }
    }

    public function addCompanyProductImage(CompanyProduct $product, $file, Company $company)
    {
        $image = new Image;
        $image->desktop_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PRODUCT_DESKTOP_SIZE,$file,"companies/company_$company->id/products/product_$product->id/desktop");
        $image->mobile_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PRODUCT_MOBILE_SIZE,$file,"companies/company_$company->id/products/product_$product->id/mobile");
        $image->thumbnail_path = $this->_resizeImageJob(DefaultImageConstants::COMPANY_PRODUCT_THUMBNAIL_SIZE,$file,"companies/company_$company->id/products/product_$product->id/thumbnail");
        $image->type = 'product';
        $image->imageble()->associate($product);
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
        $image->desktop_path = $this->_resizeImageWithStretching(DefaultImageConstants::COUNCIL_COVER_DESKTOP_SIZE,$file,"councils/council_$council->id/cover/desktop");
        $image->mobile_path = $this->_resizeImageWithStretching(DefaultImageConstants::COUNCIL_COVER_MOBILE_SIZE,$file,"councils/council_$council->id/cover/mobile");
        $image->type = 'cover';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function updateCouncilLogoImage(Council $council, UploadedFile $file)
    {
        $council->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_LOGO_DESKTOP_SIZE,$file,"councils/council_$council->id/logo/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_LOGO_MOBILE_SIZE,$file,"councils/council_$council->id/logo/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_LOGO_THUMBNAIL_SIZE,$file,"councils/council_$council->id/logo/thumbnail");
        $image->type = 'logo';
        $image->imageble()->associate($council);
        $image->save();
    }
    public function updateCouncilEventImage(Council $council, CouncilEvent $councilEvent, UploadedFile $file)
    {
        $councilEvent->images()->where('type','event')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_EVENT_DESKTOP_SIZE,$file,"councils/council_$council->id/events/event_$councilEvent->id/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_EVENT_MOBILE_SIZE,$file,"councils/council_$council->id/events/event_$councilEvent->id/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_EVENT_THUMBNAIL_SIZE,$file,"councils/council_$council->id/events/event_$councilEvent->id/thumbnail");
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
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEDIA_DESKTOP_SIZE,$file,"councils/council_$council->id/media/media_$councilMedia->id/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEDIA_MOBILE_SIZE,$file,"councils/council_$council->id/media/media_$councilMedia->id/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEDIA_THUMBNAIL_SIZE,$file,"councils/council_$council->id/media/media_$councilMedia->id/thumbnail");
        $image->type = 'media';
        $image->imageble()->associate($councilMedia);
        $image->save();
    }
    public function updateCouncilMemberProfileImage(Council $council, CouncilMember $councilMember, UploadedFile $file)
    {
        $councilMember->images()->where('type','profile')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_DESKTOP_SIZE,$file,"councils/council_$council->id/members/member_$councilMember->id/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_MOBILE_SIZE,$file,"councils/council_$council->id/members/member_$councilMember->id/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_THUMBNAIL_SIZE,$file,"councils/council_$council->id/members/member_$councilMember->id/thumbnail");
        $image->type = 'profile';
        $image->imageble()->associate($councilMember);
        $image->save();
    }
    public function addDefaultCouncilMemmberProfileImage(CouncilMember $councilMember)
    {
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_THUMBNAIL);
        $image->type = 'profile';
        $image->imageble()->associate($councilMember);
        $image->save();
    }
    public function addDefaultCouncilCompanyLogo(CouncilCompany $councilCompany)
    {
        $image = new Image;
        $image->desktop_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP);
        $image->mobile_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE);
        $image->thumbnail_path = Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL);
        $image->type = 'logo';
        $image->imageble()->associate($councilCompany);
        $image->save();
    }
    public function updateCouncilCompanyLogo(Council $council, CouncilCompany $councilCompany, UploadedFile $file)
    {
        $councilCompany->images()->where('type','logo')->delete();
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_DESKTOP_SIZE,$file,"councils/council_$council->id/companies/company_$councilCompany->id/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_MOBILE_SIZE,$file,"councils/council_$council->id/companies/company_$councilCompany->id/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL_SIZE,$file,"councils/council_$council->id/companies/company_$councilCompany->id/thumbnail");
        $image->type = 'logo';
        $image->imageble()->associate($councilCompany);
        $image->save();
    }
    public function addBanner(Banner $banner,UploadedFile $file)
    {
        $image = new Image;
        $image->desktop_path = $this->_resizeImage(DefaultImageConstants::BANNER_DESKTOP_SIZE,$file,"banners/banner_$banner->id/desktop");
        $image->mobile_path = $this->_resizeImage(DefaultImageConstants::BANNER_MOBILE_SIZE,$file,"banners/banner_$banner->id/mobile");
        $image->thumbnail_path = $this->_resizeImage(DefaultImageConstants::BANNER_MOBILE_SIZE,$file,"banners/banner_$banner->id/thumbnail");
        $image->type = 'banner';
        $image->imageble()->associate($banner);
        $image->save();
    }
}
