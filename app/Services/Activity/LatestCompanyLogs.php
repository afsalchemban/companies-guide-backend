<?php

namespace App\Services\Activity;

use App\Models\Company;

class LatestCompanyLogs
{
    public function getLatestCompanyLogs(Company $company,array $actions){
        foreach($actions as $action)
        {
            $log = $company->activityLog()->select('status')->where('name',$action->name)->latest()->first();
            if($log!=null)
            {
                $logs[] = new LatestActivity($action->name,$log->status);
            }
            else
            {
                $logs[] = new LatestActivity($action->name,0);
            }
        }
        return $logs;
    }
}
