<?php

namespace App\Services\Reports\Sale;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SaleReport
{
    protected $sale;
    protected $package;

    public function __construct()
    {
        $this->sale = null;
        $this->package = null;
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
    }

    public function start()
    {
        if(Auth::user()->isAdmin())
        {
            return App::make(SaleReportForAdmin::class);
        }
        elseif(Auth::user()->isSale())
        {
            return App::make(SaleReportForSale::class);
        }
    }
}
