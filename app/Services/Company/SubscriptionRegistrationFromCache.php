<?php

namespace App\Services\Company;

use App\Models\Company;
use App\Models\Subscription;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class SubscriptionRegistrationFromCache
{

    protected $package_id;
    protected $company;

    public function __construct(Company $company)
    {
        if (!Cache::has('registered-company-package-id-'.Auth::user()->id)) {
            throw new Exception("No Package information");
        }
        $this->package_id = Cache::get('registered-company-package-id-'.Auth::user()->id);
        $this->company = $company;
    }
    public function addPackageFromCache(){

        $this->subscription = new Subscription();
        $this->subscription->company_id = $this->company->id;
        $this->subscription->package_id = $this->package_id;
        $this->subscription->start_date = '2022-01-01';
        $this->subscription->end_date = '2022-02-01';
        $this->subscription->status = 'active';
        $this->subscription->save();
        return $this->subscription;
    }
}
