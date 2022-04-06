<?php

namespace App\Repositories;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;

use Illuminate\Support\Str;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getAllCompanies()
    {
        return Company::all();
    }
    public function getCompanyById($companyId){
        return Company::findOrFail($companyId);
    }
    public function deleteCompany($companyId)
    {
        Company::destroy($companyId);
    }
    public function createCompany(array $companyDetails){
        return Company::create($companyDetails);
    }
    public function updateCompany($companyId, array $newDetails){
        return Company::whereId($companyId)->update($newDetails);
    }
    public function createUserForCompany(Company $company)
    {
        
    }
}
