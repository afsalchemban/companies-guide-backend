<?php

namespace App\Repositories;

use App\Interfaces\DataRepositoryInterface;
use App\Models\CompanyActivity;

class DataRepository implements DataRepositoryInterface
{
    public function getCompanyActivities()
    {
        return CompanyActivity::all();
    }
}
