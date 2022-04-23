<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SaleReportForSale extends SaleReport implements ReportInterface 
{

    private function _execute()
    {
        
        $sale = Auth::user()->userable;
        return SaleReportResource::collection(Sale::withCount(['subscriptions' => function (Builder $query) {

            if($this->package!=null)
            { $query->where('package_id',$this->package); }

        }])->where('id',$sale->id)->get()); 
    }

    public function generate()
    {
        return $this->_execute();
    }
}
