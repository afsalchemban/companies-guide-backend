<?php

namespace App\Repositories;

use App\Http\Resources\CompanyResource;
use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Models\Package;
use App\Services\UserSwitchingService;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function __construct(UserSwitchingService $userSwitch) 
    {
        $this->userSwitch = $userSwitch;
    }

    public function getAllCompanies()
    {
        return CompanyResource::collection(Company::all());
    }
    public function getCompany($company){
        return new CompanyResource($company);
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
    public function updateCompany(Company $company, array $newDetails)
    {
        return $company->update($newDetails);
    }
    public function createUserForCompany(Company $company)
    {
        
    }
    public function createPackage($data)
    {
        $company = Company::find($data['company_id']);

        $company->packages()->attach($data['package_id'], ['start_date' => '2022-01-01','end_date' => '2022-11-11','status' => 'new']);

        return response()->json([
            'package_added' => true
        ],Response::HTTP_OK);
    }
}
