<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\ImageResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    //
    public function login(LoginRequest $request)
    {

        $validated = $request->safe();
        $email = $validated['email'];
        $password = $validated['password'];
        
        if(Auth::attempt(['email' => $email, 'password' => $password])){ 
            $auth = Auth::user(); 
            $success['token'] =  $auth->createToken('LaravelSanctumAuth')->plainTextToken; 
            $success['name'] =  $auth->name;
            if($auth->userable_type=='council')
            {
                $success['council_id'] =  $auth->userable->id;
                $success['profile'] = new ImageResource($auth->userable->images()->where('type','logo')->first());
            }
            elseif($auth->userable_type=='sale')
            {
                $success['sale_id'] =  $auth->userable->id;
                $success['profile'] = new ImageResource($auth->userable->images()->where('type','profile')->first());
            }
            elseif($auth->userable_type=='company')
            {
                $success['company_id'] =  $auth->userable->id;
                $success['profile'] = new ImageResource($auth->userable->images()->where('type','logo')->first());
            }
            elseif($auth->userable_type=='admin')
            {
                $success['profile'] = new ImageResource($auth->images()->where('type','profile')->first());
            }
            $success['user_type'] =  $auth->userable_type;
            $success['status'] =  'Success';
   
            return response()->json($success, Response::HTTP_OK);
        } 
        else{ 
            return response()->json(['status'=>'failed','message'=>'Username/Password is incorrect. Please enter correct details.'], Response::HTTP_UNAUTHORIZED);
        } 
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged out'
        ], Response::HTTP_OK);
    }
}
