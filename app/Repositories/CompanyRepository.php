<?php

namespace App\Repositories;

use App\Constants\DefaultImageConstants;
use App\Events\OrderCreated;
use App\Events\UserCreated;
use App\Http\Resources\CompanyReportResource;
use App\Http\Resources\CompanyResource;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\PaymentInterface;
use App\Models\Company;
use App\Models\Package;
use App\Services\Company\CompanyRegistrationFromCache;
use App\Services\Company\CreateUserForCompany;
use App\Services\Company\SubscriptionRegistrationFromCache;
use App\Services\Invoice\InvoiceService;
use App\Services\Mail\MailService;
use App\Services\Payments\BankPayment;
use App\Services\Payments\CashPayment;
use App\Services\Payments\ChequePayment;
use App\Services\Payments\OrderPaymentService;
use App\Services\UserSwitchingService;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\throwException;

class CompanyRepository implements CompanyRepositoryInterface
{
    private $orderPaymentService;

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

        $companyDetails['logo_image_path'] = Storage::url(DefaultImageConstants::COMPANY_LOGO);

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
        DB::beginTransaction();

        try {
            $company_registered = (new CompanyRegistrationFromCache())->registerFromCache();
            $subscription_registered = (new SubscriptionRegistrationFromCache($company_registered))->addPackageFromCache();
            $user = (new CreateUserForCompany($subscription_registered))->createUserForFullPackage();
            $order = (new OrderPaymentService($company_registered,$payment,$subscription_registered))->pay();
            (new InvoiceService($order))->generate()->attachInvoiceToOrder();
            $this->_clearRegistrationCache();
            DB::commit();

            //sending all necessary emails
            OrderCreated::dispatch($order);

            return response()->json([
                'status' => 'success',
                'message' => 'Company Added Successfully',
            ],Response::HTTP_OK);
        } catch (\Exception $e) {
            DB::rollback();
            throw new Exception($e);
        }
    
    }
    public function uploadLogo(UploadedFile $file){
        if($path = Storage::putFile('companies/logo', $file))
        {
            return $path;
        }
        return false;
    }
    public function uploadBanner(UploadedFile $file){
        if($path = Storage::putFile('companies/banner', $file))
        {
            return $path;
        }
        return false;
    }
}
