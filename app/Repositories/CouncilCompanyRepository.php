<?php

namespace App\Repositories;

use App\Interfaces\CouncilCompanyRepositoryInterface;
use App\Models\Council;
use App\Models\CouncilCompany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CouncilCompanyRepository implements CouncilCompanyRepositoryInterface
{
    public function getAllCouncilCompanies()
    {
        $council = Auth::user()->userable;
        return $council->companies;
    }
    public function getCouncilCompanyById($councilCompanyId)
    {
        
    }
    public function deleteCouncilCompany(CouncilCompany $councilCompany)
    {
        
    }
    private function _uploadLogoImage($file)
    {
        return $file->store('councils/companies/logos');
    }
    public function createCouncilCompany(array $councilCompanyDetails)
    {
        $councilCompanyDetails['logo_image_path'] = isset($councilCompanyDetails['logo_file'])?
            Storage::url($this->_uploadLogoImage($councilCompanyDetails['logo_file'])):
            Storage::url('councils/companies/logos/no-image.png');
        unset($councilCompanyDetails['logo_file']);
        $council = Auth::user()->userable;
        $company = $council->companies()->create($councilCompanyDetails);
        return $company;
    }
    public function updateCouncilCompany(CouncilCompany $councilCompany, array $newDetails)
    {
        
    }
}
