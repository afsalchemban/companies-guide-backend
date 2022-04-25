<?php

namespace App\Services\Reports\Company;

use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Carbon\Carbon;


class CompanyReportForAdmin implements ReportInterface 
{

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
        if(array_key_exists('company_id', $filters))
        {
            $this->company = $filters['company_id'];
        }
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('company_activity_id', $filters))
        {
            $this->activity = $filters['company_activity_id'];
        }
        if(!empty($filters['duration']))
        {
            $this->_processDate($this->duration = json_decode($filters['duration']));
        }
        
    }

    private function _processDate($duration){
        if($this->duration!=null)
        {
            switch($duration->type)
            {
                case 'last-30' : $this->duration->date = Carbon::now()->subDays(30)->toDateTimeString(); break;
                case 'current-month' : $this->duration->date = Carbon::now()->firstOfMonth()->toDateTimeString(); break;
                case 'last-6-month' : $this->duration->date = Carbon::now()->subMonths(6)->toDateTimeString(); break;
                default : $this->duration->date=null;
            }
        }
    }
    private function _loadWithPackage()
    {
        return Company::whereHas('packages', function (Builder $query) {

            $query->where('package_id',$this->package);

        })->with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {
            
            if($this->duration!=null) { $query->where('created_at', '>=',$this->duration->date); }
            if($this->company!=null) { $query->where('id',$this->company); }
            if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }

        })->get();
    }
    private function _loadWithoutPackage()
    {
        return Company::with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {
             
            if($this->duration!=null) { $query->where('created_at', '>=',$this->duration->date); }
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
