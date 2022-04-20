<?php

namespace App\Services\Reports\Company;

use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Models\Company;
use Illuminate\Contracts\Database\Eloquent\Builder;

class CompanyReportForAdmin extends CompanyReport implements ReportInterface 
{
    private function _execute()
    {   
        


        if($this->company == null)
        {

            if($this->package!=null) { 
                $companies = Company::whereHas('packages', function (Builder $query) {

                    $query->where('package_id',$this->package);

                })->with(['activePackage','expiredPackages'])->where(function (Builder $query) {

                    if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }
    
                })->get();
            }
            else
            {
                $companies = Company::with(['activePackage','expiredPackages'])->where(function (Builder $query) {

                    if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }
    
                })->get();
            }

            return CompanyReportResource::collection($companies);
        }
        else{

            if($this->package!=null) { 
                $companies = Company::whereHas('packages', function (Builder $query) {

                    $query->where('package_id',$this->package);

                })->with(['activePackage','expiredPackages'])->where(function (Builder $query) {

                    $query->where('id',$this->company);
                    if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }
    
                })->get();
            }
            else
            {
                $companies = Company::with(['activePackage','expiredPackages'])->where(function (Builder $query) {

                    $query->where('id',$this->company);
                    if($this->activity!=null) { $query->where('company_activity_id',$this->activity); }
    
                })->get();
            }
            return CompanyReportResource::collection($companies);
        }        
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
