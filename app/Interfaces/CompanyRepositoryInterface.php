<?php

namespace App\Interfaces;

use App\Models\Company;

interface CompanyRepositoryInterface
{
    public function getAllCompanies();
    public function getCompany(Company $company);
    public function deleteCompany($companyId);
    public function createCompany(array $companyDetails);
    public function updateCompany(Company $company, array $newDetails);
    public function createUserForCompany(Company $company);
    public function createPackage(array $data);
}
