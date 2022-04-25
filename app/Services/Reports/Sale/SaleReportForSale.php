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
        if(!empty($filters['package_id'])){
        {
            $this->package = $filters['package_id'];
        }
        if(!empty($filters['duration'])){
        {
            $this->duration = $this->convertDurationToDate(json_decode($filters['duration']));
        }
    }

    private function _execute()
    {   

        if($this->package!=null) { 
            $sales = $this->_loadWithPackage();
        }
        else
        {
            $sales = $this->_loadWithoutPackage();
        }

        return new SaleReportResource($sales);
        
    }
    private function _loadWithPackage(){
        return [];
    }

    private function _loadWithoutPackage(){
        return $this->sale->loadCount(['Companies'=>function (Builder $query) {
                
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&is_array($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }

        }]);
    }
    public function generate()
    {
        return $this->_execute();
    }
}
