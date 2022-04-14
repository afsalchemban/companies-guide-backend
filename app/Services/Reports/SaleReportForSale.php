<?php

namespace App\Services\Reports;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\SaleReportInterface;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class SaleReportForSale extends SaleReport implements SaleReportInterface 
{

    private function _extract()
    {
        $sale = Auth::user()->userable;
        return SaleReportResource::collection(Sale::withCount('companies')->where('id',$sale->id)->get());
    }

    private function _filterBySale(){
        $sale = Sale::find($this->sale);
        return new SaleReportResource($sale);
    }

    public function generate()
    {
        return $this->_extract();
    }
}
