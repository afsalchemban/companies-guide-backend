<?php

namespace App\Repositories;

use App\Constants\DefaultImageConstants;
use App\Events\UserCreated;
use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;
use App\Models\User;
use App\Services\CloudStorageService;
use App\Services\Image\ImageService;
use App\Services\Mail\MailService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SaleRepository implements SaleRepositoryInterface
{
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }
    public function getAllSales(){
        return Sale::with(['images'=>function($query){
            $query->where('type','profile');
        }])->get();
    }
    public function getSaleById($saleId){
        return Sale::findOrFail($saleId);
    }
    public function deleteSale(Sale $sale){
        return $sale->delete();
    }
    public function createSale(array $saleDetails){
        
        $sale = Sale::create($saleDetails);
        $this->imageService->addDefaultSaleProfileImage($sale);
        return $sale;
    }
    public function updateSale($sale, array $newDetails){
        if(isset($newDetails['profile_image']))
        {
            $this->imageService->updateSaleProfileImage($sale,$newDetails['profile_image']);
            unset($newDetails['profile_image']);
        }
        return $sale->update($newDetails);
    }
    public function createUserForSale(Sale $sale){
        $user = new User();
        $user->name = $sale->name;
        $user->email = $sale->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->userable()->associate($sale);
        $user->save();
        UserCreated::dispatch($user,'dummypassword');
        return $user;
    }
    public function uploadImage(UploadedFile $file){
        if($path = Storage::putFile('sales/profile-images', $file))
        {
            return $path;
        }
        return false;
    }
    public function updateImagePath($path)
    {
        return $path;
    }
    public function getCompaniesWithPackage($package_id)
    {
        return $package_id;
    }
}
