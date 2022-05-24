<?php

namespace App\Repositories;

use App\Http\Resources\Banner\BannerResource;
use App\Interfaces\BannerRepositoryInterface;
use App\Models\Banner;

class BannerRepository implements BannerRepositoryInterface
{
    public function getAllBanners()
    {
        return BannerResource::collection(Banner::with('images')->get());
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
        return Banner::create($bannerDetails);
    }
    public function updateBanner(Banner $banner, array $newDetails)
    {
        return $banner->update($newDetails);
    }
}
