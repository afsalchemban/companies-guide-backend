<?php

namespace App\Repositories;

use App\Http\Resources\Banner\BannerResource;
use App\Interfaces\BannerRepositoryInterface;
use App\Models\Banner;
use App\Services\Image\ImageService;
use Carbon\Carbon;

class BannerRepository implements BannerRepositoryInterface
{
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }
    public function getAllBanners()
    {
        return BannerResource::collection(Banner::with(['images','company.images'])->get());
    }
    public function getBanner(Banner $banner)
    {
        return new BannerResource($banner);
    }
    public function deleteBanner(Banner $banner)
    {
        return $banner->delete();
    }
    public function addBanner(array $bannerDetails)
    {
        $banner = new Banner();
        $banner->start_date = Carbon::now();
        $banner->end_date = Carbon::now()->addMonth();
        $banner->status = 'active';
        $banner->company_id = $bannerDetails['company_id'];
        $banner->save();
        $this->imageService->addBanner($banner,$bannerDetails['banner']);
        return $banner;
    }
    public function updateBanner(Banner $banner, array $newDetails)
    {
        return $banner->update($newDetails);
    }
}
