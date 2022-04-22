<?php

namespace App\Services\Reports\Sale;

use App\Models\Sale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SaleReport
{
    public $sale;
    public $package;
    public $duration;

    public function __construct()
    {
        $this->sale = null;
        $this->package = null;
        $this->duration = null;
    }

    public function init(array $filters)
    {
        if(array_key_exists('sale_id', $filters) && $this->sale==null)
        {
            $this->sale = $filters['sale_id'];
        }
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('duration', $filters))
        {
            $this->duration = $filters['duration'];
        }
    }
    public function initSale(array $filters,Sale $sale)
    {
        $this->sale = $sale;
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('duration', $filters))
        {
            $this->duration = $filters['duration'];
        }
    }
    public function startSale()
    {
        if(Auth::user()->isAdmin())
        {
            return App::make(SingleSaleReportForAdmin::class);
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
