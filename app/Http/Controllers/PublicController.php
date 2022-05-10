<?php

namespace App\Http\Controllers;

use App\Http\Resources\Public\PublicActiveCompanyResource;
use App\Http\Resources\Public\PublicCompanyResource;
use App\Models\Company;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\Package;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function companiesByPackage(Package $package)
    {
        return PublicCompanyResource::collection($package->activeCompanies()->with(['sale','companyActivity'])->get());
    }
    public function allActiveCompanies()
    {
        return PublicActiveCompanyResource::collection(Company::whereHas('activePackage')->with(['sale','companyActivity','activePackage'])->get());
    }
    public function allCouncils(){
        return Council::all();
    }
    public function councilById(Council $council)
    {
        return $council;
    }
    public function councilCompanyById(Council $council)
    {
        return $council->companies;
    }
    public function councilMemberById(Council $council)
    {
        return $council->members;
    }
}