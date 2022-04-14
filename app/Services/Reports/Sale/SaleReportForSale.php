<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\SaleReportInterface;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SaleReportForSale extends SaleReport implements SaleReportInterface 
{

    private function _extract()
    {
        $sale = Auth::user()->userable;
        return SaleReportResource::collection(Sale::withCount(['companies' => function (Builder $query) {

            if($this->package!=null)
            { $query->where('package_id',$this->package); }

        }])->where('id',$sale->id)->get()); 
    }

    public function generate()
    {
        return $this->_extract();
    }
}
