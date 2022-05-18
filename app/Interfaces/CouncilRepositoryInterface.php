<?php

namespace App\Interfaces;
use Illuminate\Http\UploadedFile;

use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;

interface CouncilRepositoryInterface
{
    public function getAllCouncils();
    public function getCouncilById($councilId);
    public function deleteCouncil(Council $council);
    public function createCouncil(array $councilDetails);
    public function updateCouncil(Council $council, array $newDetails);
    public function createUserForCouncil(Council $council);
    public function changeLogo(UploadedFile $file, Council $council);
    public function changeCover(UploadedFile $file, Council $council);
    public function addMedia(array $mediaDetails, Council $council);
    public function addEvent(array $eventDetails, Council $council);
    public function createCouncilMember(array $councilMemberDetails);
    public function createCouncilCompany(array $councilCompanyDetails);
    public function updateCouncilCompany(array $newDetails,CouncilCompany $councilCompany);
    public function updateCouncilMember(array $newDetails,CouncilMember $councilMember);
    public function changeMemberImage(UploadedFile $file,Council $council, CouncilMember $councilMember);
    public function changeCompanyLogo(UploadedFile $file,Council $council, CouncilCompany $councilCompany);
    public function updateEvent(array $newDetails, CouncilEvent $councilEvent);
    public function updateMedia(array $newDetails, CouncilMedia $councilMedia);
    public function deleteEvent(CouncilEvent $councilEvent);
    public function deleteMedia(CouncilMedia $councilMedia);
}
