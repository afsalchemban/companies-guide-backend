<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class SaleController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->authorize('create',Sale::class);
        $sale = Sale::create($request->all());
        return $sale;
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

    /**
     * Create user credntials for sale 
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function createUser(Sale $sale)
    {
        $this->authorize('createSaleUser',Sale::class);
        $user = new User();
        $user->name = $sale->name;
        $user->email = $sale->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->user_type = 'sale';
        $user->save();
        $user->saleUser()->attach($sale->id);
        return $user;
    }

    public function dashboard(Request $request)
    {
        //convert user to sale user
        $sale = $request->user()->convertToSale();
        return $sale;
    }
}
