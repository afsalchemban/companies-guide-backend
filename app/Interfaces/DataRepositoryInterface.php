<?php

namespace App\Interfaces;

use App\Models\City;
use App\Models\Country;

interface DataRepositoryInterface
{
    public function getCompanyActivities($param);
    public function getCountries();
    public function getCities(Country $country);
    public function getAreas(City $city);
    public function getLegalStatuses();
    public function issuedBy();
}
