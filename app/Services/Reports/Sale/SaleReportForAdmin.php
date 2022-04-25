<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SaleReportForAdmin implements ReportInterface 
{

    public $sale;
    public $package;
    public $duration;

    public function __construct()
    {
        $this->sale = null;
        $this->package = null;
        $this->duration = null;
    }
    public function init(array $filters)
    {
        if(array_key_exists('sale_id', $filters))
        {
            $this->sale = $filters['sale_id'];
        }
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
