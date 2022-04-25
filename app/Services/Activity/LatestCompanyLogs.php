<?php

namespace App\Services\Activity;

use App\Models\Company;

class LatestCompanyLogs
{
    public function getLatestCompanyLogs(Company $company,array $actions){
        foreach($actions as $action)
        {
            $log = $company->activityLog()->select('status')->where('name',$action->name)->latest()->first();
            $logs[] = new LatestActivity($action->title,is_null($log)?0:$log->status);
        }
        return $logs;
    }
}
