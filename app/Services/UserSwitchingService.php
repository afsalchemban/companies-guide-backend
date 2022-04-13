<?php

namespace App\Services;

use App\Models\Company;
use App\Models\Sale;
use Exception;
use Illuminate\Support\Facades\Auth;

class UserSwitchingService
{
    /**
     * relationship from user table to sale/company
     *
     * @var array<string, string>
     */
    public function sale()
    {
        $user = Auth::user()->userable;
        if($user instanceof Sale) {
            return $user;
        }
        else
        {
            throw new Exception("This user is not sale");
        }
    }
    public function company()
    {
        $user = Auth::user()->userable;
        if($user instanceof Company) {
            return $user;
        }
        else
        {
            throw new Exception("This user is not company");
        }
    }
}
