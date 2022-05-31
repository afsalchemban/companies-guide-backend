<?php

namespace App\Services\Company;

use App\Events\UserCreated;
use App\Models\User;
use App\Services\Mail\MailService;
use Illuminate\Support\Str;

class CreateUserForCompany
{
    protected $subscription;
    public function __construct($subscription)
    {
        $this->subscription = $subscription;
    }
    public function createUserForFullPackage(){
        if($this->subscription->package_id!=3)
        {
            $company = $this->subscription->company;
            $user = new User();
            $user->name = $company->business_name;
            $user->email = $company->email;
            $user->password = bcrypt('dummypassword');
            $user->remember_token = Str::random(10);
            $user->userable()->associate($company);
            $user->save();
            UserCreated::dispatch($user,'dummypassword',$company);
            return $user;
        }
        return false;
    }
}
