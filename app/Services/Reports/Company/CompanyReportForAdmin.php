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
            $results = Company::with(['package:id,name','companyActivity:id,title','sale:id,name'])->where(function (Builder $query) {

                if($this->package!=null)
                { $query->where('package_id',$this->package); }
    
                if($this->activity!=null)
                { $query->where('company_activity_id',$this->activity); }
    
            })->get();
        }
        else
        {
            $results = Company::with(['package:id,name','companyActivity:id,title','sale:id,name'])->where(function (Builder $query) {

                if($this->package!=null)
                { $query->where('package_id',$this->package); }
    
                if($this->activity!=null)
                { $query->where('company_activity_id',$this->activity); }
    
            })->where('id',$this->company)->get();
        }

        return CompanyReportResource::collection($results);
        
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
