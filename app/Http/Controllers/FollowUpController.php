<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyFollowUpRequest;
use App\Services\FollowUp\FollowUpService;
use Illuminate\Http\Request;

class FollowUpController extends Controller
{
    public function __construct(FollowUpService $followUpService)
    {
        $this->followUpService = $followUpService;
    }
    public function followUpCompany(CompanyFollowUpRequest $request){

        return $this->followUpService->followUp();
    }
}
