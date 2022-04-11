<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Company;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function sale(){
        return Sale::all();
    }

    public function company(){
        return Company::all();
    }
}
