<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyFollowUpRequest;
use App\Http\Resources\FollowUpResource;
use App\Models\Package;
use App\Services\FollowUp\FollowUpService;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{
    public function __construct(FollowUpService $followUpService)
    {
        $this->followUpService = $followUpService;
    }
    public function followUpCompanyByPackage(CompanyFollowUpRequest $request, Package $package){

        return FollowUpResource::collection($this->followUpService->followUp($package));
    }
}
