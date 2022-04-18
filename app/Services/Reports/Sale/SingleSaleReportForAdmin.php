<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SingleSaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SingleSaleReportForAdmin extends SaleReport implements ReportInterface 
{

    public function init(array $filters,Sale $sale=null)
    {
        $this->sale = $sale;
    }
    private function _execute()
    {           
        return new SingleSaleReportResource($this->sale);        
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
