<?php

namespace App\Repositories;

use App\Interfaces\CouncilCompanyRepositoryInterface;
use App\Models\Council;
use App\Models\CouncilCompany;
use Illuminate\Support\Facades\Auth;

class CouncilCompanyRepository implements CouncilCompanyRepositoryInterface
{
    public function getAllCouncilCompanies(Council $council)
    {
        
    }
    public function getCouncilCompanyById($councilCompanyId)
    {
        
    }
    public function deleteCouncilCompany(CouncilCompany $councilCompany)
    {
        
    }
    public function createCouncilCompany(array $councilCompanyDetails)
    {
        $council = Auth::user()->userable;
        $company = $council->companies()->create($councilCompanyDetails);
        return $company;
    }
    public function updateCouncilCompany(CouncilCompany $councilCompany, array $newDetails)
    {
        
    }
}
