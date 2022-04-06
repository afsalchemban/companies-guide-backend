<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UploadProfileImageSaleRequest;
use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SaleController extends Controller
{


    public function __construct(SaleRepositoryInterface $saleRepository) 
    {
        $this->saleRepository = $saleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->saleRepository->getAllSales();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRequest $request)
    {
        // create sale model and user for the sale with validation and authorization
        
        return $this->saleRepository->createUserForSale($this->saleRepository->createSale($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }

    public function dashboard(Request $request)
    {
        //convert user to sale user
        $sale = $request->user()->convertToSale();
        return $sale;
    }
    public function uploadImage(UploadProfileImageSaleRequest $request)
    {
        return $this->saleRepository->uploadImage($request->validated()['profile-image']);
    }
}
