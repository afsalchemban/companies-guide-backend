<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /* 
    Select the package when company registration
    */

    public function paymentMethods(){
        $methods = DB::select('select * from users');
        return response()->json([
            'payment_methods' => $methods
        ],Response::HTTP_OK);
    }

    public function companyActivities(){
        $activities = DB::select('select * from company_activities');
        return response()->json([
            'company_activities' => $activities
        ],Response::HTTP_OK);
    }
}
