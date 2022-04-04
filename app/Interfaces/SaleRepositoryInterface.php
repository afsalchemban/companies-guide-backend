<?php

namespace App\Interfaces;

use App\Models\Sale;

interface SaleRepositoryInterface
{
    public function getAllSales();
    public function getSaleById($saleId);
    public function deleteSale($saleId);
    public function createSale(array $saleDetails);
    public function updateSale($saleId, array $newDetails);
    public function createUserForSale(Sale $sale);
}
