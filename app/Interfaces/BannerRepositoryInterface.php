<?php

namespace App\Interfaces;

use App\Models\Banner;

interface BannerRepositoryInterface
{
    public function getAllActiveBanners();
    public function getBanner(Banner $banner);
    public function deleteBanner(Banner $banner);
    public function addBanner(array $bannerDetails);
    public function updateBanner(Banner $banner, array $newDetails);
}
