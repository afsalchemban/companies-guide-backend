<?php

namespace App\Repositories;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SaleRepository implements SaleRepositoryInterface
{
    public function getAllSales(){
        return Sale::all();
    }
    public function getSaleById($saleId){
        return Sale::findOrFail($saleId);
    }
    public function deleteSale(Sale $sale){
        return $sale->delete();
    }
    public function createSale(array $saleDetails){
        return Sale::create($saleDetails);
    }
    public function updateSale($sale, array $newDetails){
        return $sale->update($newDetails);
    }
    public function createUserForSale(Sale $sale){
        $user = new User();
        $user->name = $sale->name;
        $user->email = $sale->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->user_type = 'sale';
        $user->userable()->associate($sale);
        $user->save();
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
