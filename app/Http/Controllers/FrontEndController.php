<?php

namespace App\Http\Controllers;

use App\Http\Resources\Frontend\CompanyResource;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function companiesByPackage(Package $package)
    {
        
        return CompanyResource::collection(Company::whereHas('activePackage', function (Builder $query) use ($package) {

            $query->where('package_id',$package->id);

        })->with(['companyActivity','sale'])->get());
    }
}
