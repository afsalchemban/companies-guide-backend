<?php

namespace App\Services\Reports\Company;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CompanyReport
{
    protected $sale;
    protected $package;
    protected $activity;

    public function __construct()
    {
        $this->sale = null;
        $this->package = null;
        $this->activity = null;
    }

    public function init(array $filters)
    {
        if(array_key_exists('sale_id', $filters))
        {
            $this->sale = $filters['sale_id'];
        }
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('company_activity_id', $filters))
        {
            $this->activity = $filters['company_activity_id'];
        }
    }

    public function start()
    {
        if(Auth::user()->isAdmin())
        {
            return App::make(CompanyReportForAdmin::class);
        }
        elseif(Auth::user()->isSale())
        {
            return App::make(CompanyReportForSale::class);
        }
    }
}
