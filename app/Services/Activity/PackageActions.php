<?php

namespace App\Services\Activity;

use App\Models\Company;
use App\Constants\ActivitiesCompanyConstants;

class PackageActions
{
    public function getPackageActions(Company $company){
        return $this->getPackages($company)->getActions();
    }
    public function getPackages($company)
    {
        $activePackage = $company->activePackage->first();
        switch($activePackage->name){
            case 'Full' : return new FullPackageActions();
                break;
            case 'Profile' : return new ProfilePackageActions();
                break;
            default : return new DirectoryPackageActions();
                break;
        }
    }
}
