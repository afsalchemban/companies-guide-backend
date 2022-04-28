<?php

namespace App\Services\Company;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class CompanyRegistrationFromCache
{
    protected $companyData;
    protected $package_id;
    protected $company;

    public function __construct()
    {
        $this->companyData = Cache::get('registered-company-'.Auth::user()->id);
        $this->package_id = Cache::get('registered-company-package-id-'.Auth::user()->id);
    }

    public function register()
    {
        $sale = $this->userSwitch->sale();

        $this->company = $sale->companies()->create($this->companyData);

        return $this;
    }
    public function attachPackage(){

        $this->company->packages()->attach($this->packageCacheData, ['start_date' => '2022-01-01','end_date' => '2022-11-11','status' => 'new']);

        return $this;
    }
    public function createOrder(){
        
        return $this;
    }
}
