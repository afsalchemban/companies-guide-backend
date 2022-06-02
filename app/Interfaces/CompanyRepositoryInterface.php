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
    public function uploadLogo(Company $company, UploadedFile $file);
    public function uploadBanner(UploadedFile $file);
    public function editCompanyProfile(array $companyProfileDetails);
    public function addProduct(array $productDetails,Company $company);
    public function getExpiredBanners();
}
