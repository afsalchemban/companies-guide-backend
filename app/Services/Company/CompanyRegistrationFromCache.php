<?php

namespace App\Services\Company;

use App\Interfaces\PaymentInterface;
use App\Models\Subscription;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class CompanyRegistrationFromCache
{
    protected $companyData;
    protected $company;

    public function __construct()
    {
        if (!Cache::has('registered-company-'.Auth::user()->id)) {
            throw new Exception("No company information");
        }
        $this->companyData = Cache::get('registered-company-'.Auth::user()->id);
    }

    public function registerFromCache()
    {
        $sale = Auth::user()->userable;

        $this->company = $sale->companies()->create($this->companyData);

        return $this->company;
    }
}
