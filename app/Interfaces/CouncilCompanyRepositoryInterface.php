<?php

namespace App\Interfaces;

use App\Models\Council;
use App\Models\CouncilCompany;

interface CouncilCompanyRepositoryInterface
{
    public function getAllCouncilCompanies(Council $council);
    public function getCouncilCompanyById($councilCompanyId);
    public function deleteCouncilCompany(CouncilCompany $councilCompany);
    public function createCouncilCompany(array $councilCompanyDetails);
    public function updateCouncilCompany(CouncilCompany $councilCompany, array $newDetails);
}
