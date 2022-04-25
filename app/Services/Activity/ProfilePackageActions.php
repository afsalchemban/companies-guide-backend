<?php

namespace App\Services\Activity;

use App\Interfaces\ActionInterface;
use App\Constants\ActivitiesCompanyConstants;

class ProfilePackageActions implements ActionInterface
{
    public $actions;
    public function __construct()
    {
        $this->actions = [
            new Action(ActivitiesCompanyConstants::COMPANY_INFROMATION),
            new Action(ActivitiesCompanyConstants::FOLLOW_US),
            new Action(ActivitiesCompanyConstants::CATEGORIES),
            new Action(ActivitiesCompanyConstants::ABOUT_COMPANY),
            new Action(ActivitiesCompanyConstants::PROFILE_IMAGES),
            new Action(ActivitiesCompanyConstants::LOGO)
        ];
    }
    public function getActions()
    {
        return $this->actions;
    }
}
