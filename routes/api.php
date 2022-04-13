<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
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

    Route::prefix('report')->group(function () {

        Route::get('/sale', [ReportController::class, 'sale']);
        Route::get('/company', [ReportController::class, 'company']);

    });

    Route::prefix('sale')->group(function () {

        Route::get('/dashboard', [SaleController::class, 'dashboard']);
        Route::post('/upload_image', [SaleController::class, 'uploadImage']);

    });

    Route::prefix('company')->group(function () {

        Route::put('/company_select_package', [CompanyController::class, 'selectPackage']);

    });

    Route::apiResources([
        'company'=>CompanyController::class,
        'sale'=>SaleController::class,
    ]);

    Route::get('logout', [AuthController::class, 'logout']);
});

/* 
| Data controller apis
*/

Route::prefix('data')->group(function () {

    Route::get('/payment_methods', [DataController::class, 'paymentMethods']);
    Route::get('/company_activities/{param}', [DataController::class, 'companyActivities']);
    Route::get('/countries', [DataController::class, 'countries']);
    Route::get('/cities/{country}', [DataController::class, 'cities']);
    Route::get('/areas/{city}', [DataController::class, 'areas']);
    Route::get('/legal_statuses', [DataController::class, 'legalStatuses']);
    Route::get('/issued_by', [DataController::class, 'issuedBy']);
    Route::get('/reports', [DataController::class, 'reports']);
    Route::get('/packages', [DataController::class, 'packages']);

});


Route::post('login', [AuthController::class, 'login']);

/* 
api for migrate from server when developing . in future will remove it
*/
Route::get('migrate', function (Request $request) {
    Artisan::call('migrate --force');
    return 'Database Migrated';
});

/* 
api for migrate from server when developing . in future will remove it
*/
Route::get('migrate/refresh', function (Request $request) {
    Artisan::call('migrate:refresh --force --seed');
    return 'Database Migrated';
});


Route::get('test', [DataController::class, 'test2']);