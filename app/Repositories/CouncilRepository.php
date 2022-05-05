<?php

namespace App\Repositories;

use App\Interfaces\CouncilRepositoryInterface;
use App\Models\Council;
use App\Models\User;
use Illuminate\Support\Str;

class CouncilRepository implements CouncilRepositoryInterface
{
    public function getAllCouncils()
    {
        
    }
    public function getCouncilById($councilId)
    {
        
    }
    public function deleteCouncil(Council $council)
    {
        
    }
    public function createCouncil(array $councilDetails)
    {
        return Council::create($councilDetails);
    }
    public function updateCouncil(Council $council, array $newDetails)
    {
        
    }
    public function createUserForCouncil(Council $council)
    {
        $user = new User();
        $user->name = $council->council_name;
        $user->email = $council->email;
        $user->password = bcrypt('dummypassword');
        $user->remember_token = Str::random(10);
        $user->user_type = 'council';
        $user->userable()->associate($council);
        $user->save();
        //MailService::sendSaleCredentialMail($sale,'dummypassword');
        return $user;
    }
}
