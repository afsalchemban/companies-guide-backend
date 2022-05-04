<?php

namespace App\Services\Company;

use App\Models\Company;
use App\Models\Subscription;
use Carbon\Carbon;
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
        $this->subscription->start_date = Carbon::now();
        $this->subscription->end_date = Carbon::now()->addYear();
        $this->subscription->status = 'active';
        $this->subscription->save();
        return $this->subscription;
    }
}
