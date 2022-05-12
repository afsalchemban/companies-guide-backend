<?php

namespace App\Interfaces;
use Illuminate\Http\UploadedFile;

use App\Models\Council;

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
    public function addGalleryImage(array $galleryDetails, Council $council);
}
