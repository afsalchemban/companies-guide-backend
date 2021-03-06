<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Sale;
use App\Traits\ReportTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SaleReportForSale implements ReportInterface 
{
    use ReportTrait;

    public $sale;
    public $package;
    public $duration;

    public function __construct()
    {
        $this->sale = Auth::user()->userable;
        $this->package = null;
        $this->duration = null;
    }
    public function init(array $filters)
    {
        if(!empty($filters['package_id']))
        {
            $this->package = $filters['package_id'];
        }
        if(!empty($filters['duration']))
        {
            $this->duration = $this->convertDurationToDate(json_decode($filters['duration']));
        }
    }

    private function _execute(){
        
        $sales =  Sale::withSum(['orders'=>function (Builder $query) {

            if($this->package!=null){
                $query->where('package_id',$this->package);
            }
            if($this->duration!=null&&is_string($this->duration)) { $query->where('orders.created_at', '>=',$this->duration); }
            if($this->duration!=null&&!is_string($this->duration)) { $query->whereBetween('orders.created_at', [$this->duration->from,$this->duration->to]); }

        }],'net_total')->withCount(['companies' => function (Builder $query) {

            if($this->package!=null){
                $query->whereHas('packages', function (Builder $qry) {
                    $qry->where('package_id',$this->package);
                });
            }

            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&!is_string($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }

        }])->with('images')
        ->where(function (Builder $query) {
                $query->where('id',$this->sale->id);   
        })->get();
        return SaleReportResource::collection($sales);
    }
    public function generate()
    {
        return $this->_execute();
    }
}
