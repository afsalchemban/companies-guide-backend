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
        if(array_key_exists('sale_id', $filters))
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

    public function start(Sale $sale = null)
    {
        if(Auth::user()->isAdmin())
        {
            if($sale != null) {
                return App::make(SingleSaleReportForAdmin::class);
            }
            return App::make(SaleReportForAdmin::class);
        }
        elseif(Auth::user()->isSale())
        {
            return App::make(SaleReportForSale::class);
        }
    }
}
