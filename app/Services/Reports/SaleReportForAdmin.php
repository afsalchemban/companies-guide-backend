<?php

namespace App\Services\Reports;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SaleReportForAdmin extends SaleReport implements SaleReportInterface 
{

    private function _execute()
    {   
        
        if($this->sale==null)
        {
            return SaleReportResource::collection(Sale::withCount(['companies' => function (Builder $query) {

                if($this->package!=null)
                { $query->where('package_id',$this->package); }
                if($this->area!=null)
                { $query->where('area_id',$this->area); }

            }])->get());
        }
        else
        {
            return SaleReportResource::collection(Sale::withCount(['companies' => function (Builder $query) {

                if($this->package!=null)
                { $query->where('package_id',$this->package); }
                if($this->area!=null)
                { $query->where('area_id',$this->area); }

            }])->where('id',$this->sale)->get()); 
        }
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
