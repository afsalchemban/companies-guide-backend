<?php

namespace App\Services\FollowUp;

use App\Models\Company;
use App\Models\Package;
use App\Services\Activity\ActivityService;
use Illuminate\Contracts\Database\Eloquent\Builder;

class FollowUpService
{
    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }
    public function followUp(Package $package){
        $companies = Company::whereHas('packages', function (Builder $query) use($package) {

            $query->where('package_id',$package->id);

        })->with(['activePackage','expiredPackages'])->get();
        return $this->activityService->followUp($companies);
    }
}
