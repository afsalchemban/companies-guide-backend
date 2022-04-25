<?php

namespace App\Services\Activity;

use App\Interfaces\ActionInterface;
use App\Constants\ActivitiesCompanyConstants;

class DirectoryPackageActions implements ActionInterface
{
    public $actions;
    public function __construct()
    {
        $this->actions = [
            new Action(ActivitiesCompanyConstants::LOGO)
        ];
    }
    public function getActions()
    {
        return $this->actions;
    }
}
