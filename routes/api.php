<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CouncilController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Models\CouncilMember;
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

        Route::post('/sale', [ReportController::class, 'sale']);
        Route::post('/sale/{sale}', [ReportController::class, 'summarySale']);
        Route::post('/company', [ReportController::class, 'company']);
        Route::post('/company/{company}', [ReportController::class, 'summaryCompany']);

    });

    Route::prefix('sale')->group(function () {

        Route::get('/dashboard', [SaleController::class, 'dashboard']);
        Route::post('/upload_profile_image', [SaleController::class, 'uploadProfileImage']);

    });

    Route::prefix('company')->group(function () {

        Route::put('/company_select_package', [CompanyController::class, 'selectPackage']);
        Route::get('/order_info', [CompanyController::class, 'getOrderDetailsFromCache']);
        Route::post('/pay/cash', [CompanyController::class, 'payByCash']);
        Route::post('/pay/bank', [CompanyController::class, 'payByBank']);
        Route::post('/pay/cheque', [CompanyController::class, 'payByCheque']);
        Route::post('/upload_logo/{company}', [CompanyController::class, 'uploadLogo']);
        Route::post('/upload_banner/{company}', [CompanyController::class, 'uploadBanner']);

    });

    Route::prefix('council')->group(function(){
        Route::post('/change_council_logo/{council}', [CouncilController::class, 'changeCouncilLogo']);
        Route::post('/change_cover_image/{council}', [CouncilController::class, 'changeCoverImage']);
        Route::post('/add_media_image/{council}', [CouncilController::class, 'addMediaImage']);
        Route::post('/add_event/{council}', [CouncilController::class, 'addEvent']);
        Route::post('/council_member/{council}', [CouncilController::class, 'addMember']);
        Route::post('/council_company/{council}', [CouncilController::class, 'addCompany']);
        Route::put('/council_member/{council}/{councilMember}', [CouncilController::class, 'updateMember']);
        Route::put('/council_company/{council}/{councilCompany}', [CouncilController::class, 'updateCompany']);
    });

    Route::apiResources([
        'company'=>CompanyController::class,
        'sale'=>SaleController::class,
        'council'=>CouncilController::class,
    ]);

    Route::get('logout', [AuthController::class, 'logout']);
});

/* 
| Data controller apis
*/

Route::prefix('data')->group(function () {

    Route::get('/payment_methods', [DataController::class, 'paymentMethods']);
    Route::get('/company_activities/{param}', [DataController::class, 'companyActivities']);
    Route::get('/search_sales/{param}', [DataController::class, 'searchSales']);
    Route::get('/search_companies/{param}', [DataController::class, 'searchCompanies']);
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


Route::get('test', [DataController::class, 'test_get']);
Route::post('test', [DataController::class, 'test_post']);
Route::get('mail', [DataController::class, 'test_mail']);
Route::get('invoice', [DataController::class, 'test_invoice']);
Route::post('image', [DataController::class, 'image']);




/* 
| Front End apis
*/

Route::prefix('public')->group(function () {

    Route::get('/companies/active', [PublicController::class, 'allActiveCompanies']);
    Route::get('/companies/{package}', [PublicController::class, 'companiesByPackage']);
    Route::get('/councils', [PublicController::class, 'allCouncils']);
    Route::get('/council/{council}', [PublicController::class, 'councilById']);
    Route::get('/council_company/{council}', [PublicController::class, 'councilCompanyById']);
    Route::get('/council_member/{council}', [PublicController::class, 'councilMemberById']);
    Route::get('/council_media/{council}', [PublicController::class, 'councilMediaById']);
    Route::get('/council_event/{council}', [PublicController::class, 'councilEventById']);

});