<?php

namespace App\Http\Controllers;

use App\Http\Requests\DirectoryPageRequest;
use App\Http\Resources\Banner\Public\BannerPublicResource;
use App\Http\Resources\Company\Public\CompanyProfileResource;
use App\Http\Resources\Council\Public\CouncilCompanyPublicResource;
use App\Http\Resources\Council\Public\CouncilEventPublicResource;
use App\Http\Resources\Council\Public\CouncilMediaPublicResource;
use App\Http\Resources\Council\Public\CouncilMemberPublicResource;
use App\Http\Resources\Council\Public\CouncilPublicResource;
use App\Http\Resources\Public\PublicActiveCompanyResource;
use App\Http\Resources\Public\PublicCompanyResource;
use App\Models\Banner;
use App\Models\Company;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;
use App\Models\Package;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Exception;

class PublicController extends Controller
{
    public function companiesByPackage(Package $package)
    {
        return PublicCompanyResource::collection($package->activeCompanies()->with(['companiable','companyActivity','images'])->get());
    }
    public function allActiveCompanies()
    {
        return PublicActiveCompanyResource::collection(Company::whereHas('activePackage')->with(['companiable','companyActivity','activePackage'])->get());
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
    public function companiesForDirectoryPage(DirectoryPageRequest $request)
    {
        $validated = $request->validated();
        $companies = Company::where(function (Builder $query) use ($validated) {
            if(!empty($validated['company_id'])) { $query->where('id',$validated['company_id']); }
            if(!empty($validated['city_id'])) { $query->where('city_id',$validated['city_id']); }
        })->whereHas('activePackage')->whereHas('companyActivity',function (Builder $query) use ($validated) {
            if(!empty($validated['company_activity_id'])) { $query->where('company_activity_id',$validated['company_activity_id']); }
        })->with(['companyActivity','activePackage','city','area','images'])->get();
        $companies = $companies->sortBy(function ($item) {
            return $item->activePackage[0]->id;
        })->values();
        return PublicCompanyResource::collection($companies);
    }
    public function activeBanners(){
        return BannerPublicResource::collection(Banner::where('status','active')->with('images')->get());
    }
    public function companyProfile(Company $company){
        if(!$company->activePackage()->whereIn('package_id',[1,2])->exists())
        {
            throw new Exception("No profile for this company");
        }
        return new CompanyProfileResource($company->load('images','products','products.categories'));
    }
}