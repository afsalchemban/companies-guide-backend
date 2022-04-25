<?php

namespace App\Services\Reports\Company;

use App\Constants\ActivitiesCompanyConstants;
use App\Http\Resources\CompanyReportResource;
use App\Interfaces\ReportInterface;
use App\Interfaces\SummaryReportInterface;
use App\Services\Activity\ActivityService;

class CompanySummaryReport implements SummaryReportInterface
{
    
    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }
    public function init(array $filters,$company)
    {
        $this->company = $company;
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('duration', $filters))
        {
            $this->duration = $filters['duration'];
        }
    }
    private function _execute()
    { 
        return response()->json([
            'status' => $this->activityService->summary($this->company),
            'info' => new CompanyReportResource($this->company->load('companyActivity','sale')),
        ]);
    }
    public function generate()
    {
        return $this->_execute();
    }
}
