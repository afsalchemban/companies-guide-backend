<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\Reports\SingleSale\SingleSaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SingleSaleReportForAdmin extends SaleReport implements ReportInterface 
{
    private function _execute()
    {           
        return new SingleSaleReportResource($this->sale->loadSum('orders','net_total')->load('companies.activePackage','companies.expiredPackages'));      
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
