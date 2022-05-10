<?php

namespace App\Repositories;

use App\Interfaces\CouncilMemberRepositoryInterface;
use App\Models\Council;
use App\Models\CouncilMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CouncilMemberRepository implements CouncilMemberRepositoryInterface
{
    public function getAllCouncilMembers()
    {
        $council = Auth::user()->userable;
        return $council->members;
    }
    public function getCouncilMemberById($councilMemberId)
    {
        
    }
    public function deleteCouncilMember(CouncilMember $councilMember)
    {
        
    }
    private function _uploadProfileImage($file)
    {
        return $file->store('councils/members/profile-images');
    }
    public function createCouncilMember(array $councilMemberDetails)
    {
        $council = Auth::user()->userable;
        $councilMemberDetails['profile_image'] = isset($councilMemberDetails['profile_image_file'])?
            Storage::url($this->_uploadProfileImage($councilMemberDetails['profile_image_file'])):
            Storage::url('councils/members/profile-images/no-image.png');
        unset($councilMemberDetails['logo_file']);
        $member = $council->members()->create($councilMemberDetails);
        return $member;
    }
    public function updateCouncilMember(CouncilMember $councilMember, array $newDetails)
    {
        
    }
}
