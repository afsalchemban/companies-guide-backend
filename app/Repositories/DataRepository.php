<?php

namespace App\Repositories;

use App\Http\Resources\Category\CategoryResource;
use App\Interfaces\DataRepositoryInterface;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyActivity;
use App\Models\Country;
use App\Models\Sale;
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
            'legal_statuses' => DB::select('select id ,name from legal_statuses')
        ]);
    }
    public function issuedBy()
    {
        return response()->json([
            'issued_by' => DB::select('select id ,name from issued_by')
        ]);
    }
    public function getReports()
    {
        return response()->json([
            'reports' => DB::select('select id ,name from reports')
        ]);
    }
    public function getPackages()
    {
        return response()->json([
            'packages' => DB::select('select id ,name, price, description from packages')
        ]);
    }
    public function getActiveActivities($param)
    {
        return response()->json([
            'activities' => CompanyActivity::whereHas('companies')->where('title', 'like', $param.'%')->orderBy('title')
            ->take(10)->get()
        ]);
    }
    public function searchSales($param)
    {
        return response()->json([
            'sales' => Sale::where('name', 'like', $param.'%')->orderBy('name')
            ->take(10)->get(['id','name'])
        ]);
    }
    public function searchCompanies($param)
    {
        return response()->json([
            'companies' => Company::where('business_name', 'like', $param.'%')->orderBy('business_name')
            ->take(10)->get(['id','business_name'])
        ]);
    }

    public function searchCategories($param)
    {
        return response()->json([
            'companies' => Category::where('name', 'like', $param.'%')->orderBy('name')
            ->take(10)->get(['id','name'])
        ]);
    }
    public function parentCategories(Category $category)
    {
        return new CategoryResource($category->parent);
    }
}
