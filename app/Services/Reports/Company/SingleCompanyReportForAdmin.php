<?php

namespace App\Services\Reports\Company;

use App\Constants\ActivitiesCompanyConstants;
use App\Interfaces\ReportInterface;
use App\Services\ActivityService;

class SingleCompanyReportForAdmin extends CompanyReport implements ReportInterface 
{
    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }
    private function _execute()
    { 
        dd($this->activityService->checkState($this->company));
    }
    public function generate()
    {
        return $this->_execute();
    }
}
