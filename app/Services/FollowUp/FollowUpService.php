<?php

namespace App\Services\FollowUp;

use App\Services\Activity\ActivityService;

class FollowUpService
{
    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }
    public function followUp(){
        return $this->activityService->followUp();
    }
}
