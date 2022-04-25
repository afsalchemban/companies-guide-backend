<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Area;
use App\Models\Company;
use App\Models\Package;
use App\Models\Sale;
use App\Traits\ReportTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SaleReportForAdmin implements ReportInterface 
{
    use ReportTrait;

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
        if(!empty($filters['sale_id'])){
        {
            $this->sale = $filters['sale_id'];
        }
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

        return SaleReportResource::collection($sales);
        
    }
    private function _loadWithPackage(){
        return [];
    }

    private function _loadWithoutPackage(){
        return Sale::withCount(['companies' => function (Builder $query) {
                
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&is_array($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }

        }])->where(function (Builder $query) {

            if($this->sale!=null){
                $query->where('id',$this->sale);   
            }

        })->get();
    }
    public function generate()
    {
        return $this->_execute();
    }
}
