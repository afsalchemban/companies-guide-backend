<?php

namespace App\Http\Controllers;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Gate;

class CompanyController extends Controller
{
    public function __construct(CompanyRepositoryInterface $companyRepository) 
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
        return $this->companyRepository->getAllCompanies();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Company::class);
        
        $company = new Company($request->all());

        $sale = $request->user()->convertToSale();

        $sale->companies()->save($company);

        return $company;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        if (! Gate::allows('update-post', $company)) {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    /* 
    Select the package when company registration
    */

    public function selectPackage(Request $request){

        $company = Company::find($request->input('id'));
 
        $company->package_id = $request->input('package_id');
        
        $company->save();

        return response()->json([
            'package_selected' => true
        ],Response::HTTP_OK);
    }
}
