<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectPackageRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Gate;

class CompanyController extends Controller
{
    public function __construct(CompanyRepositoryInterface $companyRepository) 
    {
        $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->companyRepository->getAllCompanies();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {        
        return $this->companyRepository->createCompanyInCache($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return $this->companyRepository->getCompany($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        return $this->companyRepository->updateCompany($company, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        return $this->companyRepository->deleteCompany($company);
    }

    /* 
    Select the package when company registration
    */

    public function selectPackage(SelectPackageRequest $request){

        return $this->companyRepository->createPackageInCache($request->validated());

    }

    public function getOrderDetailsFromCache()
    {
        return $this->companyRepository->getOrderDetailsFromCache();
    }

    public function orderPay()
    {
        return $this->companyRepository->orderPay();
    }
}
