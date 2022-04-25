<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Sale;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SaleReportForSale implements ReportInterface 
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
