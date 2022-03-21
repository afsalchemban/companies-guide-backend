<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $auth = Auth::user(); 
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken; 
            $success['name'] =  $auth->name;
   
            return response()->json(['status'=>'success'], Response::HTTP_OK);
        } 
        else{ 
            return response()->json(['status'=>'Unauthorised'], Response::HTTP_UNAUTHORIZED);
        } 
    }
}
