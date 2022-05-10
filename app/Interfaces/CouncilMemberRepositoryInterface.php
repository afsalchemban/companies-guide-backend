<?php

namespace App\Interfaces;

use App\Models\Council;
use App\Models\CouncilMember;

interface CouncilMemberRepositoryInterface
{
    public function getAllCouncilMembers();
    public function getCouncilMemberById($councilMemberId);
    public function deleteCouncilMember(CouncilMember $councilMember);
    public function createCouncilMember(array $councilMemberDetails);
    public function updateCouncilMember(CouncilMember $councilMember, array $newDetails);
}
