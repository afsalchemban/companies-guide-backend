<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouncilEventsRequest;
use App\Http\Requests\UpdateCouncilEventsRequest;
use App\Models\CouncilEvents;

class CouncilEventsController extends Controller
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
     * @param  \App\Http\Requests\StoreCouncilEventsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilEventsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouncilEvents  $councilEvents
     * @return \Illuminate\Http\Response
     */
    public function show(CouncilEvents $councilEvents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilEventsRequest  $request
     * @param  \App\Models\CouncilEvents  $councilEvents
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilEventsRequest $request, CouncilEvents $councilEvents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouncilEvents  $councilEvents
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouncilEvents $councilEvents)
    {
        //
    }
}
