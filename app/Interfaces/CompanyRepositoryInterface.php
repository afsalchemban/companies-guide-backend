<?php

namespace App\Interfaces;

use App\Models\Company;

interface CompanyRepositoryInterface
{
    public function getAllCompanies();
    public function getCompany(Company $company);
    public function deleteCompany(Company $company);
    public function createCompanyInCache(array $companyDetails);
    public function updateCompany(Company $company, array $newDetails);
    public function createUserForCompany(Company $company);
    public function createPackageInCache(array $data);
    public function getOrderDetailsFromCache();
    public function orderPay();
}
