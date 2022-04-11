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
    public function getCompanyActivities($param)
    {
        return response()->json([
            'activities' => CompanyActivity::where('title', 'like', $param.'%')->orderBy('title')
            ->take(10)->get()
        ]);
    }
    public function getCountries()
    {
        return response()->json([
            'countries' => Country::all()
        ]);
    }
    public function getCities(Country $country)
    {
        return response()->json([
            'cities' => $country->cities
        ]);
    }
    public function getAreas(City $city)
    {
        return response()->json([
            'areas' => $city->areas
        ]);
    }
    public function getLegalStatuses()
    {
        return response()->json([
            'legal_statuses' => DB::select('select * from legal_statuses')
        ]);
    }
    public function issuedBy()
    {
        return response()->json([
            'issued_by' => DB::select('select * from issued_by')
        ]);
    }
    public function getReports()
    {
        return response()->json([
            'reports' => DB::select('select * from reports')
        ]);
    }
    public function getPackages()
    {
        return response()->json([
            'packages' => DB::select('select * from packages')
        ]);
    }
}
