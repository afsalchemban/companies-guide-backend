<?php

namespace App\Services\Reports\Company;

use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class CompanyReportForSale extends CompanyReport implements ReportInterface 
{
    public function __construct()
    {
        $this->sale = Auth::user()->userable;
    }
    private function _loadWithPackage()
    {
        return Company::whereHas('packages', function (Builder $query) {

            $query->where('package_id',$this->package);

        })->with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {
            
            $query->where('sale_id',$this->sale->id);  
            if($this->duration!=null) { $query->where('created_at', '>=',$this->duration->date); }
            if($this->company!=null) { $query->where('id',$this->company); }
            if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }

        })->get();
    }
    private function _loadWithoutPackage()
    {
        return Company::with(['activePackage','expiredPackages','companyActivity','sale'])->where(function (Builder $query) {

            $query->where('sale_id',$this->sale->id);    
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
