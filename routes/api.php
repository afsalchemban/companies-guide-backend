<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaleController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('sale/create_sale_user/{sale}', [SaleController::class, 'createUser']);
    Route::get('sale/dashboard', [SaleController::class, 'dashboard']);
    Route::apiResources([
        'company'=>CompanyController::class,
        'sale'=>SaleController::class,
    ]);

    Route::get('logout', [AuthController::class, 'logout']);
});



Route::put('company_select_package', [CompanyController::class, 'selectPackage']);
/* 
| Data controller apis
*/
Route::get('payment_methods', [DataController::class, 'paymentMethods']);

Route::get('company_activities', [DataController::class, 'companyActivities']);

Route::post('login', [AuthController::class, 'login']);

/* 
api for migrate from server when developing . in future will remove it
*/
Route::get('migrate', function (Request $request) {
    Artisan::call('migrate:refresh --force --seed');
    return 'Database Migrated';
});