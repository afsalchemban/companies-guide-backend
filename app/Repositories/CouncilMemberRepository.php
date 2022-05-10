<?php

namespace App\Repositories;

use App\Interfaces\CouncilMemberRepositoryInterface;
use App\Models\Council;
use App\Models\CouncilMember;
use Illuminate\Support\Facades\Auth;

class CouncilMemberRepository implements CouncilMemberRepositoryInterface
{
    public function getAllCouncilMembers(Council $council)
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
    public function createCouncilMember(array $councilMemberDetails)
    {
        $council = Auth::user()->userable;
        $member = $council->members()->create($councilMemberDetails);
        return $member;
    }
    public function updateCouncilMember(CouncilMember $councilMember, array $newDetails)
    {
        
    }
}
