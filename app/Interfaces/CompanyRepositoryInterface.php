<?php

namespace App\Interfaces;

use App\Models\Company;
use App\Models\Package;

interface CompanyRepositoryInterface
{
    public function getAllCompanies();
    public function getCompanyById($companyId);
    public function deleteCompany($companyId);
    public function createCompany(array $companyDetails);
    public function updateCompany($companyId, array $newDetails);
    public function createUserForCompany(Company $company);
    public function selectPackage(array $data);
}
