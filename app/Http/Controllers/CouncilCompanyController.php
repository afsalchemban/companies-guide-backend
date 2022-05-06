<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouncilCompanyRequest;
use App\Http\Requests\UpdateCouncilCompanyRequest;
use App\Interfaces\CouncilCompanyRepositoryInterface;
use App\Models\CouncilCompany;

class CouncilCompanyController extends Controller
{
    public function __construct(CouncilCompanyRepositoryInterface $companyRepository) 
    {
        $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCouncilCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilCompanyRequest $request)
    {
        return $this->companyRepository->createCouncilCompany($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouncilCompany  $councilCompany
     * @return \Illuminate\Http\Response
     */
    public function show(CouncilCompany $councilCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilCompanyRequest  $request
     * @param  \App\Models\CouncilCompany  $councilCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilCompanyRequest $request, CouncilCompany $councilCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouncilCompany  $councilCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouncilCompany $councilCompany)
    {
        //
    }
}
