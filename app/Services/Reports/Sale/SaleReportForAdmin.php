<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SaleReportForAdmin extends SaleReport implements ReportInterface 
{

    private function _execute()
    {   
        
        if($this->sale==null)
        {
            return SaleReportResource::collection(Sale::withCount(['subscriptions' => function (Builder $query) {
                
                if($this->package!=null)
                { $query->where('package_id',$this->package); }

            }])->get());
        }
        else
        {
            return SaleReportResource::collection(Sale::withCount(['subscriptions' => function (Builder $query) {

                if($this->package!=null)
                { $query->where('package_id',$this->package); }

            }])->where('id',$this->sale)->get()); 
        }
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
