<?php

namespace App\Services\Reports\Sale;

use App\Http\Resources\SaleReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Area;
use App\Models\Company;
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
