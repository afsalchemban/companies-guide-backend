<?php

namespace App\Services;

use App\Constants\ActivitiesCompanyConstants;
use App\Models\Company;

class ActivityService
{
    public function checkState(Company $company)
    {
        $activePackage = $company->activePackage->first();

        $state = $this->_processActivity($company->activityLog,$this->_getValidActivities($activePackage->name));
        
        return $state;
    }
    private function _processActivity($activityLog,$neededActivities){
        
        $state= array();
        foreach($neededActivities as $activity)
        {
            array_push($state,$this->_processSingleActivity($activityLog,$activity));
        }
        return $state;
    }
    private function _processSingleActivity($activityLog,$activity)
    {
        return [$activity=>true];
    }
    private function _getValidActivities($packageName)
    {
        switch($packageName){
            case 'Full' : $validActivities = [
                ActivitiesCompanyConstants::BANNER,
                ActivitiesCompanyConstants::COMPANY_INFROMATION,
                ActivitiesCompanyConstants::FOLLOW_US,
                ActivitiesCompanyConstants::CATEGORIES,
                ActivitiesCompanyConstants::ABOUT_COMPANY,
                ActivitiesCompanyConstants::PROFILE_IMAGES,
                ActivitiesCompanyConstants::LOGO
            ];
                break;
            case 'Profile' : $validActivities = [
                ActivitiesCompanyConstants::COMPANY_INFROMATION,
                ActivitiesCompanyConstants::FOLLOW_US,
                ActivitiesCompanyConstants::CATEGORIES,
                ActivitiesCompanyConstants::ABOUT_COMPANY,
                ActivitiesCompanyConstants::PROFILE_IMAGES,
                ActivitiesCompanyConstants::LOGO
            ];
                break;
            default : $validActivities = [
                ActivitiesCompanyConstants::LOGO
            ];
                break;

        }
        return $validActivities;
    }
}
