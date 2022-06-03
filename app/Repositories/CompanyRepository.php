<?php

namespace App\Repositories;

use App\Events\OrderCreated;
use App\Http\Resources\Company\Dashboard\CompanyBannerResource;
use App\Http\Resources\CompanyReportResource;
use App\Http\Resources\CompanyResource;
use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\PaymentInterface;
use App\Models\Category;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\CompanyProduct;
use App\Models\Package;
use App\Services\Company\CompanyRegistrationFromCache;
use App\Services\Company\CreateUserForCompany;
use App\Services\Company\SubscriptionRegistrationFromCache;
use App\Services\Image\ImageService;
use App\Services\Invoice\InvoiceService;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Payments\OrderPaymentService;
use App\Services\UserSwitchingService;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\throwException;

class CompanyRepository implements CompanyRepositoryInterface
{
    private $orderPaymentService;
    private $categories=array();

    public function __construct(UserSwitchingService $userSwitch, ImageService $imageService) 
    {
        $this->userSwitch = $userSwitch;
        $this->imageService = $imageService;
    }

    public function getAllCompanies()
    {
        return CompanyReportResource::collection(Company::with('activePackage','expiredPackages','companyActivity','companiable','images')->paginate());
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
    private function _updateCompanyActivity($activities,$company){
        $activities = json_decode($activities);
        $company->companyActivity()->sync($activities);
    }
    public function updateCompany(Company $company, array $newDetails)
    {
        if(isset($newDetails['logo_image'])){
            $this->imageService->updateCompanyLogoImage($company,$newDetails['logo_image']);
        }

        $this->_updateCompanyActivity($newDetails['company_activity_id'],$company);
        
        return $company->update(array_filter($newDetails,function($k){
            return $k != 'company_activity_id' && $k != 'logo_image';
        }, ARRAY_FILTER_USE_KEY));
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
            'package_info' => Package::find(Cache::get('registered-company-package-id-'.Auth::user()->id),['id', 'name','price']),
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

            $this->imageService->addDefaultCompanyLogoImage($company_registered);
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
    public function uploadLogo(Company $company, UploadedFile $file){
        $this->imageService->updateCompanyLogoImage($company,$file);
        return $company;
    }
    public function uploadBanner(UploadedFile $file){
        if($path = Storage::putFile('companies/banner', $file))
        {
            return $path;
        }
        return false;
    }
    public function getExpiredBanners(){
        return CompanyBannerResource::collection(Company::whereHas('banners', function (Builder $query) {
            $query->where('status', 'expired');
        })->with(['banners' => function ($query) {
            $query->where('status', 'expired');
        },'banners.images','images'])->get());
    }
    public function editCompanyProfile(array $companyProfileDetails)
    {
        $company = Auth::user()->userable;
        $company->business_name = $companyProfileDetails['name'];
        $company->services = $companyProfileDetails['services'];
        $company->website = $companyProfileDetails['website'];
        $company->phone_number = $companyProfileDetails['phone'];
        $company->email = $companyProfileDetails['email'];
        $company->facebook_url = $companyProfileDetails['facebook'];
        $company->twitter_url = $companyProfileDetails['twitter'];
        $company->youtube_url = $companyProfileDetails['youtube'];
        $company->aboutus = $companyProfileDetails['aboutus'];
        $company->save();

        $this->imageService->updateCompanyProfilPageImages($company,$companyProfileDetails['profile_page_images']);
        return $company;
        //$this->_updateCategories($company,$companyProfileDetails['categories']);
    }
    public function addProduct(array $productDetails,Company $company)
    {
        $product = $company->products()->create([
            'name' => $productDetails['name'],
            'description' => $productDetails['description']
        ]);
        $categories = $this->_convertParentCategoriesToArray($productDetails['category_id']);
        $product->categories()->sync($categories);
        $this->imageService->addCompanyProductImage($product,$productDetails['image'],$company);
        return $product;
         
    }
    private function _convertParentCategoriesToArray($category_id)
    {
        $category = Category::find($category_id);
        $parents = $category->parent;
        $this->categories[]=$category_id;
        $this->_extractParent($parents);
        return $this->categories;
    }
    private function _extractParent($parents){
        $this->categories[]=$parents->id;
        if($parents->parent!=null)
        {
            $this->_extractParent($parents->parent);
        }
    }
    private function _updateCategories(Company $company,$companyCategories)
    {
        $products = array();
        foreach ($companyCategories as $category) {
            $cat = $company->categories()->save(new CompanyCategory(['name' => $category['name']]));
            dd($cat->id);
            if(isset($category['products'])){
                foreach ($category['products'] as $product) {
                    $products[] = new CompanyProduct(['name' => $product['name'],'description' => $product['desc']]);
                }
            }
        }
    }
    private function _updateProducts()
    {
        
    }
}
