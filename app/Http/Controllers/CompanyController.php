<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCompanyProductRequest;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\PayByBankRequest;
use App\Http\Requests\PayByCashRequest;
use App\Http\Requests\PayByChequeRequest;
use App\Http\Requests\SelectPackageRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Requests\UploadCompanyImageRequest;
use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Models\Package;
use App\Services\Payments\BankPayment;
use App\Services\Payments\CashPayment;
use App\Services\Payments\ChequePayment;
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
    public function index(Request $request)
    {
        return $request->input('page');
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
        return $this->companyRepository->storeCompanyInCache($request->validated());
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

        return $this->companyRepository->storePackageInCache($request->validated());

    }

    public function getOrderDetailsFromCache()
    {
        return $this->companyRepository->getOrderDetailsFromCache();
    }

    public function payByCash(PayByCashRequest $request)
    {
        return $this->companyRepository->orderPay(new CashPayment($request->validated()));
    }

    public function payByCheque(PayByChequeRequest $request)
    {
        return $this->companyRepository->orderPay(new ChequePayment($request->validated()));
    }

    public function payByBank(PayByBankRequest $request)
    {
        return $this->companyRepository->orderPay(new BankPayment($request->validated()));
    }

    public function uploadLogo(UploadCompanyImageRequest $request, Company $company)
    {
        $this->companyRepository->uploadLogo($company, $request->validated()['file']);
    }

    public function uploadBanner(UploadCompanyImageRequest $request, Company $company)
    {
        $this->companyRepository->uploadBanner($request->validated()['file']);
    }
    public function getExpiredBanners()
    {
        return $this->companyRepository->getExpiredBanners();
    }
    public function editProfile(EditProfileRequest $request)
    {
        $this->companyRepository->editCompanyProfile($request->validated());
    }
    public function addProduct(AddCompanyProductRequest $request)
    {
        return $this->companyRepository->addProduct($request->validated(),$request->user()->userable);
    }
}
