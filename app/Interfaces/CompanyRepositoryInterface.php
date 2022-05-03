<?php

namespace App\Interfaces;

use App\Models\Company;
use Illuminate\Http\UploadedFile;

interface CompanyRepositoryInterface
{
    public function getAllCompanies();
    public function getCompany(Company $company);
    public function deleteCompany(Company $company);
    public function storeCompanyInCache(array $companyDetails);
    public function updateCompany(Company $company, array $newDetails);
    public function createUserForCompany(Company $company);
    public function storePackageInCache(array $data);
    public function getOrderDetailsFromCache();
    public function orderPay(PaymentInterface $payment);
    public function uploadLogo(UploadedFile $file);
    public function uploadBanner(UploadedFile $file);
}
