<?php

namespace App\Http\Controllers;

use App\Http\Resources\Council\Public\CouncilPublicResource;
use App\Http\Resources\Public\PublicActiveCompanyResource;
use App\Http\Resources\Public\PublicCompanyResource;
use App\Models\Company;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;
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
        return CouncilPublicResource::collection(Council::with('images')->get());
    }
    public function councilById(Council $council)
    {
        return $council->load('country','city','area');
    }
    public function councilCompanyById(Council $council)
    {
        return $council->companies;
    }
    public function councilMemberById(Council $council)
    {
        return $council->members;
    }
    public function councilMediaById(Council $council)
    {
        return $council->medias;
    }
    public function councilEventById(Council $council)
    {
        return $council->events;
    }
    public function councilCompanyDetailsById(CouncilCompany $councilCompany)
    {
        return $councilCompany->load('country','area','city','companyActivity');
    }
    public function councilMemberDetailsById(CouncilMember $councilMember)
    {
        return $councilMember->load('country','area','city','nationality');
    }
    public function councilMediaDetailsById(CouncilMedia $councilMedia)
    {
        return $councilMedia;
    }
    public function councilEventDetailsById(CouncilEvent $councilEvent){
        return $councilEvent;
    }
}