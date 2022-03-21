<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('company', CompanyController::class);
Route::put('company_select_package', [CompanyController::class, 'selectPackage']);
/* 
| Data controller apis
*/
Route::get('payment_methods', [DataController::class, 'paymentMethods']);
Route::get('company_activities', [DataController::class, 'companyActivities']);

Route::post('login', [AuthController::class, 'login']);