<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouncilGalleryRequest;
use App\Http\Requests\UpdateCouncilGalleryRequest;
use App\Models\CouncilGallery;

class CouncilGalleryController extends Controller
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
     * @param  \App\Http\Requests\StoreCouncilGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouncilGallery  $councilGallery
     * @return \Illuminate\Http\Response
     */
    public function show(CouncilGallery $councilGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilGalleryRequest  $request
     * @param  \App\Models\CouncilGallery  $councilGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilGalleryRequest $request, CouncilGallery $councilGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouncilGallery  $councilGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouncilGallery $councilGallery)
    {
        //
    }
}
