<?php

namespace App\Repositories;

use App\Interfaces\DataRepositoryInterface;
use App\Models\City;
use App\Models\CompanyActivity;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class DataRepository implements DataRepositoryInterface
{
    public function getCompanyActivities()
    {
        return CompanyActivity::all();
    }
    public function getCountries()
    {
        return Country::all();
    }
    public function getCities(Country $country)
    {
        return $country->cities;
    }
    public function getAreas(City $city)
    {
        return $city->areas;
    }
    public function getLegalStatuses()
    {
        return DB::select('select name from legal_statuses');
    }
    public function issuedBy()
    {
        return DB::select('select name from issued_by');
    }
}
