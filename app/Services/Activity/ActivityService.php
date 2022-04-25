<?php

namespace App\Services\Activity;

use App\Constants\ActivitiesCompanyConstants;
use App\Models\Company;

class ActivityService
{
    public function __construct(PackageActions $actions, LatestCompanyLogs $logs)
    {
        $this->actions = $actions;
        $this->logs = $logs;
    }
    public function summary(Company $company)
    {
        return $this->logs->getLatestCompanyLogs($company,$this->actions->getPackageActions($company));
    }
    
}
