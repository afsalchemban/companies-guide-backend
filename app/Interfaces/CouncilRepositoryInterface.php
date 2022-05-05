<?php

namespace App\Interfaces;

use App\Models\Council;

interface CouncilRepositoryInterface
{
    public function getAllCouncils();
    public function getCouncilById($councilId);
    public function deleteCouncil(Council $council);
    public function createCouncil(array $councilDetails);
    public function updateCouncil(Council $council, array $newDetails);
    public function createUserForCouncil(Council $council);
}
