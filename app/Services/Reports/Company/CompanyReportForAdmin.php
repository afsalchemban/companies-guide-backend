<?php

namespace App\Services\Reports\Company;

use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use App\Traits\ReportTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Carbon\Carbon;


class CompanyReportForAdmin implements ReportInterface 
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

        })->with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {
            
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&is_array($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }
            if($this->company!=null) { $query->where('id',$this->company); }
            if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }

        })->get();
    }
    private function _loadWithoutPackage()
    {
        return Company::with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {
             
            if($this->duration!=null&&is_string($this->duration)) { $query->where('created_at', '>=',$this->duration); }
            if($this->duration!=null&&is_array($this->duration)) { $query->whereBetween('created_at', [$this->duration->from,$this->duration->to]); }
            if($this->company!=null) { $query->where('id',$this->company); }
            if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }

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
