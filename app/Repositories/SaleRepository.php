<?php

namespace App\Repositories;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;
use App\Models\User;

use Illuminate\Support\Str;

class SaleRepository implements SaleRepositoryInterface
{
    public function getAllSales(){
        return Sale::all();
    }
    public function getSaleById($saleId){
        return Sale::findOrFail($saleId);
    }
    public function deleteSale($saleId){
        Sale::destroy($saleId);
    }
    public function createSale(array $saleDetails){
        return Sale::create($saleDetails);
    }
    public function updateSale($saleId, array $newDetails){
        return Sale::whereId($saleId)->update($newDetails);
    }
    public function createUserForSale(Sale $sale){
        $user = new User();
        $user->name = $sale->name;
        $user->email = $sale->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->user_type = 'sale';
        $user->save();
        $user->saleUser()->attach($sale->id);
        return $user;
    }
}
