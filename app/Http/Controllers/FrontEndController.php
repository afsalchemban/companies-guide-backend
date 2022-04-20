<?php

namespace App\Http\Controllers;

use App\Http\Resources\Frontend\FrontendCompanyResource;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function companiesByPackage(Package $package)
    {
        
        return FrontendCompanyResource::collection($package->activeCompanies()->with(['sale','companyActivity'])->get());
    }
}
