<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCouncilMemberRequest;
use App\Http\Requests\UpdateCouncilMemberRequest;
use App\Models\CouncilMember;

class CouncilMemberController extends Controller
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
     * @param  \App\Http\Requests\StoreCouncilMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilMemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CouncilMember  $councilMember
     * @return \Illuminate\Http\Response
     */
    public function show(CouncilMember $councilMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilMemberRequest  $request
     * @param  \App\Models\CouncilMember  $councilMember
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilMemberRequest $request, CouncilMember $councilMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CouncilMember  $councilMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(CouncilMember $councilMember)
    {
        //
    }
}
