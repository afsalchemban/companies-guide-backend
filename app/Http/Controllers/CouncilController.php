<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeCouncilsImageFileRequest;
use App\Http\Requests\StoreCouncilCompanyRequest;
use App\Http\Requests\StoreCouncilEventsRequest;
use App\Http\Requests\StoreCouncilGalleryRequest;
use App\Http\Requests\StoreCouncilMemberRequest;
use App\Http\Requests\StoreCouncilRequest;
use App\Http\Requests\UpdateCouncilCompanyRequest;
use App\Http\Requests\UpdateCouncilEventsRequest;
use App\Http\Requests\UpdateCouncilGalleryRequest;
use App\Http\Requests\UpdateCouncilMemberRequest;
use App\Http\Requests\UpdateCouncilRequest;
use App\Interfaces\CouncilRepositoryInterface;
use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilGallery;
use App\Models\CouncilMember;

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
        return $this->councilRepository->updateCouncil($council,$request->validated());
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

    public function addMediaImage(StoreCouncilGalleryRequest $request, Council $council)
    {
        return $this->councilRepository->addGalleryImage($request->validated(), $council);
    }

    public function addEvent(StoreCouncilEventsRequest $request, Council $council)
    {
        return $this->councilRepository->addEvent($request->validated(), $council);
    }

    public function addMember(StoreCouncilMemberRequest $request, Council $council)
    {
        return $this->councilRepository->createCouncilMember($request->validated());
    }
    public function addCompany(StoreCouncilCompanyRequest $request, Council $council)
    {
        return $this->councilRepository->createCouncilCompany($request->validated());
    }
    public function updateMember(UpdateCouncilMemberRequest $request, Council $council, CouncilMember $councilMember)
    {
        return $this->councilRepository->updateCouncilMember($request->validated(), $councilMember);
    }
    public function updateCompany(UpdateCouncilCompanyRequest $request, Council $council, CouncilCompany $councilCompany)
    {
        return $this->councilRepository->updateCouncilCompany($request->validated(),$councilCompany);
    }
    public function changeMemberImage(ChangeCouncilsImageFileRequest $request, Council $council, CouncilMember $councilMember)
    {
        return $this->councilRepository->changeMemberImage($request->validated()['file'], $councilMember);
    }
    public function changeCompanyLogo(ChangeCouncilsImageFileRequest $request, Council $council, CouncilCompany $councilCompany)
    {
        return $this->councilRepository->changeCompanyLogo($request->validated()['file'], $councilCompany);
    }
    public function updateEvent(UpdateCouncilEventsRequest $request, Council $council, CouncilEvent $councilEvent)
    {
        return $this->councilRepository->updateEvent($request->validated(), $councilEvent);
    }
    public function updateMedia(UpdateCouncilGalleryRequest $request, Council $council, CouncilGallery $councilGallery)
    {
        return $this->councilRepository->updateMedia($request->validated(), $councilGallery);
    }
}
