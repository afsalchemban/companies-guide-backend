<?php

namespace App\Repositories;

use App\Http\Resources\CompanyReportResource;
use App\Http\Resources\CompanyResource;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\PaymentInterface;
use App\Models\Company;
use App\Models\Package;
use App\Services\Company\CompanyRegistrationFromCache;
use App\Services\Company\SubscriptionRegistrationFromCache;
use App\Services\Payments\BankPayment;
use App\Services\Payments\CashPayment;
use App\Services\Payments\ChequePayment;
use App\Services\Payments\OrderPaymentService;
use App\Services\UserSwitchingService;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\throwException;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function __construct(UserSwitchingService $userSwitch) 
    {
        $this->userSwitch = $userSwitch;
    }

    public function getAllCompanies()
    {
        return CompanyReportResource::collection(Company::with('activePackage','expiredPackages','companyActivity','sale')->get());
    }
    public function getCompany($company){
        return new CompanyResource($company);
    }
    public function deleteCompany(Company $company)
    {
        return $company->delete();
    }
    public function storeCompanyInCache(array $companyDetails){

        Cache::put('registered-company-'.Auth::user()->id, $companyDetails);

        return response()->json([
            'company_added' => true
        ],Response::HTTP_OK);
        
    }
    public function updateCompany(Company $company, array $newDetails)
    {
        return $company->update($newDetails);
    }
    public function createUserForCompany(Company $company)
    {
        
    }
    public function storePackageInCache($data)
    {
        Cache::put('registered-company-package-id-'.Auth::user()->id, $data['package_id']);

        return response()->json([
            'package_added' => true
        ],Response::HTTP_OK);
    }
    public function getOrderDetailsFromCache()
    {
        return response()->json([
            'company_info' => Cache::get('registered-company-'.Auth::user()->id),
            'package_info' => Package::find(Cache::get('registered-company-package-id-'.Auth::user()->id),['id', 'name']),
        ],Response::HTTP_OK);
    }
    private function _clearRegistrationCache(){
        Cache::forget('registered-company-'.Auth::user()->id);
        Cache::forget('registered-company-package-id-'.Auth::user()->id);
    }
    public function orderPay(PaymentInterface $payment)
    {
        DB::transaction(function () use ($payment) {
            $company_registered = (new CompanyRegistrationFromCache())->registerFromCache();
            $subscription_registered = (new SubscriptionRegistrationFromCache($company_registered))->addPackageFromCache();
            $payment = (new OrderPaymentService($company_registered,$payment,$subscription_registered))->pay();
        });
        $this->_clearRegistrationCache();
        return response()->json([
            'status' => 'success',
            'message' => 'Company Added Successfully',
        ],Response::HTTP_OK);
    
    }
}
