<?php

namespace App\Services\Reports\Company;

use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use App\Traits\ReportTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CompanyReportForSale implements  ReportInterface 
{
    use ReportTrait;
    protected $company;
    protected $package;
    protected $activity;
    protected $duration;

    public function __construct()
    {
        $this->company = null;
        $this->package = null;
        $this->activity = null;
        $this->duration = null;
        $this->sale = Auth::user()->userable;
    }

    public function init(array $filters)
    {
        if(!empty($filters['company_id'])){
            $this->company = $filters['company_id'];
        }
        if(!empty($filters['package_id'])){
            $this->package = $filters['package_id'];
        }
        if(!empty($filters['company_activity_id'])){
            $this->activity = $filters['company_activity_id'];
        }
        if(!empty($filters['duration'])){
            $this->duration = $this->convertDurationToDate(json_decode($filters['duration']));
        }
        
    }
    private function _loadWithPackage()
    {
        return Company::whereHas('packages', function (Builder $query) {

            $query->where('package_id',$this->package);

        })->whereHas('companyActivity', function (Builder $query) {

            if($this->activity!=null) { $query->where('company_activity_id',$this->activity);}

        })->with(['activePackage','expiredPackages','companyActivity','sale','images'])->where(function (Builder $query) {
            
            $query->where('sale_id',$this->sale->id);  
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&!is_string($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }
            if($this->company!=null) { $query->where('id',$this->company); }

        })->get();
    }
    private function _loadWithoutPackage()
    {
        return Company::whereHas('companyActivity', function (Builder $query) {

            if($this->activity!=null) { $query->where('company_activity_id',$this->activity);}

        })->with(['activePackage','expiredPackages','companyActivity','sale','images'])->where(function (Builder $query) {

            $query->where('sale_id',$this->sale->id);    
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&!is_string($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }
            if($this->company!=null) { $query->where('id',$this->company); }

        })->get();
    }

    private function _execute()
    {   
        
            if($this->package!=null) { 
                $companies = $this->_loadWithPackage();
            }
            else
            {
                $companies = $this->_loadWithoutPackage();
            }

            return CompanyReportResource::collection($companies);
        
    }
    
    public function generate()
    {
        return $this->_execute();
    }
}
