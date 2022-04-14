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
        $results = Company::with(['package:id,name','companyActivity:id,title'])->where(function (Builder $query) {

            if($this->package!=null)
            { $query->where('package_id',$this->package); }

            if($this->sale!=null)
            { $query->where('sale_id',$this->sale); }

            if($this->activity!=null)
            { $query->where('company_activity_id',$this->activity); }

        })->get();
        return CompanyReportResource::collection($results);
        
        
    }
    public function generate()
    {
        return $this->_execute();
    }
}
