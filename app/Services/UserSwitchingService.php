<?php

namespace App\Services;
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
        return Auth::user()->saleUser[0];
    }
}
