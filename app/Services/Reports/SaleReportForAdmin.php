<?php

namespace App\Services\Reports;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;

class SaleReportForAdmin extends SaleReport implements SaleReportInterface 
{

    private function _extract()
    {
        if($this->sale!=null)
        {
            return $this->_extractBySale();
        }
        return SaleReportResource::collection(Sale::all());
    }

    private function _extractBySale(){
        $sale = Sale::find($this->sale);
        return new SaleReportResource($sale);
    }

    public function generate()
    {
        return $this->_extract();
    }
}
