<?php

namespace App\Interfaces;

use App\Models\Category;
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
    public function getReports();
    public function getPackages();
    public function searchSales($param);
    public function searchCompanies($param);
    public function searchCategories($param);
    public function parentCategories(Category $category);
}
