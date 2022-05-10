<?php

namespace App\Http\Controllers;

use App\Http\Resources\Frontend\FrontendActiveCompanyResource;
use App\Http\Resources\Frontend\FrontendCompanyResource;
use App\Models\Company;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\Package;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function companiesByPackage(Package $package)
    {
        return FrontendCompanyResource::collection($package->activeCompanies()->with(['sale','companyActivity'])->get());
    }
    public function allActiveCompanies()
    {
        return FrontendActiveCompanyResource::collection(Company::whereHas('activePackage')->with(['sale','companyActivity','activePackage'])->get());
    }
    public function allCouncils(){
        return Council::all();
    }
    public function councilById(Council $council)
    {
        return $council;
    }
}