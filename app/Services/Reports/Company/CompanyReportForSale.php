<?php

namespace App\Services\Reports\Company;

use App\Interfaces\ReportInterface;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CompanyReportForSale extends CompanyReport implements ReportInterface 
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
