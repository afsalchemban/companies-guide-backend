<?php

namespace App\Repositories;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Services\UserSwitchingService;
use Illuminate\Support\Str;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function __construct(UserSwitchingService $userSwitch) 
    {
        $this->userSwitch = $userSwitch;
    }

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

        $company = new Company($companyDetails);

        $sale = $this->userSwitch->sale();

        $sale->companies()->save($company);

        return $company;
    }
    public function updateCompany($companyId, array $newDetails){
        return Company::whereId($companyId)->update($newDetails);
    }
    public function createUserForCompany(Company $company)
    {
        
    }
}
