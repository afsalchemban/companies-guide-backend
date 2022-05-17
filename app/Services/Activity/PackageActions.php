<?php

namespace App\Services\Activity;

use App\Models\Company;
use App\Constants\ActivitiesCompanyConstants;
use Throwable;

class PackageActions
{
    public function getPackageActions(Company $company){
        return $this->_getPackages($company)->getActions();
    }
    private function _getPackages($company)
    {
        try
        {
            $package = $company->activePackage->first()->name;
        }
        catch(Throwable $e){
            $package = $company->expiredPackages->sortByDesc('subscriptions.end_date')->first()->name;
        }

        switch($package){
            case 'Full' : return new FullPackageActions();
                break;
            case 'Profile' : return new ProfilePackageActions();
                break;
            default : return new DirectoryPackageActions();
                break;
        }
    }
}
