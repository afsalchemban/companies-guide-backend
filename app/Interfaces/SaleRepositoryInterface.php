<?php

namespace App\Interfaces;

use App\Models\Sale;
use Illuminate\Http\UploadedFile;

interface SaleRepositoryInterface
{
    public function getAllSales();
    public function getSaleById($saleId);
    public function deleteSale(Sale $sale);
    public function createSale(array $saleDetails);
    public function updateSale(Sale $sale, array $newDetails);
    public function createUserForSale(Sale $sale);
    public function uploadImage(UploadedFile $file);
    public function updateImagePath($path);
    public function getCompaniesWithPackage($package_id);
}
