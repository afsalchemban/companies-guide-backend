<?php

namespace App\Http\Controllers;

use App\Http\Resources\Council\Public\CouncilCompanyPublicResource;
use App\Http\Resources\Council\Public\CouncilEventPublicResource;
use App\Http\Resources\Council\Public\CouncilMediaPublicResource;
use App\Http\Resources\Council\Public\CouncilMemberPublicResource;
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
        return PublicCompanyResource::collection($package->activeCompanies()->with(['sale','companyActivity','images'])->get());
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
        return new CouncilPublicResource($council->load('country','city','area','images'));
    }
    public function councilCompanyById(Council $council)
    {
        return CouncilCompanyPublicResource::collection($council->companies->load('images'));
    }
    public function councilMemberById(Council $council)
    {
        return CouncilMemberPublicResource::collection($council->members->load('images'));
    }
    public function councilMediaById(Council $council)
    {
        return CouncilMediaPublicResource::collection($council->medias->load('images'));
    }
    public function councilEventById(Council $council)
    {
        return CouncilEventPublicResource::collection($council->events->load('images'));
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
    public function companiesForDirectoryPage()
    {
        return PublicCompanyResource::collection(Company::whereHas('activePackage')->with(['companyActivity','activePackage','city','area'])->get());
    }
}