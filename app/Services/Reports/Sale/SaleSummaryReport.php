<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\Reports\SingleSale\SingleSaleReportResource;
use App\Interfaces\ReportInterface;
use App\Interfaces\SummaryReportInterface;
use App\Models\Company;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SaleSummaryReport implements SummaryReportInterface
{
    public function init(array $filters, $sale){
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
    private function _execute()
    {           
        return new SingleSaleReportResource($this->sale->loadSum('orders','net_total')->load('companies.activePackage','companies.expiredPackages','images'));      
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
