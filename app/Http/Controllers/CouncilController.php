<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeCouncilsImageFileRequest;
use App\Http\Requests\StoreCouncilRequest;
use App\Http\Requests\UpdateCouncilRequest;
use App\Interfaces\CouncilRepositoryInterface;
use App\Models\Council;

class CouncilController extends Controller
{
    public function __construct(CouncilRepositoryInterface $councilRepository) 
    {
        $this->councilRepository = $councilRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->councilRepository->getAllCouncils();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCouncilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCouncilRequest $request)
    {
        return $this->councilRepository->createUserForCouncil($this->councilRepository->createCouncil($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Http\Response
     */
    public function show(Council $council)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCouncilRequest  $request
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCouncilRequest $request, Council $council)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Council  $council
     * @return \Illuminate\Http\Response
     */
    public function destroy(Council $council)
    {
        //
    }

    public function changeCouncilLogo(ChangeCouncilsImageFileRequest $request, Council $council){
        return $this->councilRepository->changeLogo($request->validated()['file'], $council);
    }

    public function changeCoverImage(ChangeCouncilsImageFileRequest $request, Council $council){
        return $this->councilRepository->changeCover($request->validated()['file'], $council);
    }
}
