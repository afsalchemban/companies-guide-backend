<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouncilController;
use App\Http\Controllers\FollowUpController;
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

    Route::get('followup/{package}', [FollowUpController::class, 'followUpCompanyByPackage']);

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
        Route::post('/profile', [CompanyController::class, 'editProfile']);
        Route::post('/add_product', [CompanyController::class, 'addProduct']);

    });

    Route::prefix('council')->group(function(){
        Route::post('/change_council_logo/{council}', [CouncilController::class, 'changeCouncilLogo']);
        Route::post('/change_cover_image/{council}', [CouncilController::class, 'changeCoverImage']);
        Route::post('/add_media_image/{council}', [CouncilController::class, 'addMedia']);
        Route::post('/add_event/{council}', [CouncilController::class, 'addEvent']);
        Route::post('/council_member/{council}', [CouncilController::class, 'addMember']);
        Route::post('/council_company/{council}', [CouncilController::class, 'addCompany']);

        Route::put('/council_member/{council}/{councilMember}', [CouncilController::class, 'updateMember']);
        Route::put('/council_company/{council}/{councilCompany}', [CouncilController::class, 'updateCompany']);

        Route::post('/change_member_image/{council}/{councilMember}', [CouncilController::class, 'changeMemberImage']);
        Route::post('/change_company_logo/{council}/{councilCompany}', [CouncilController::class, 'changeCompanyLogo']);

        Route::put('/update_event/{council}/{councilEvent}', [CouncilController::class, 'updateEvent']);
        Route::put('/update_media/{council}/{councilGallery}', [CouncilController::class, 'updateMedia']);

        Route::delete('/delete_event/{council}/{councilEvent}', [CouncilController::class, 'deleteEvent']);
        Route::delete('/delete_media/{council}/{councilGallery}', [CouncilController::class, 'deleteMedia']);
    });

    Route::get('/expired_banners', [CompanyController::class, 'getExpiredBanners']);
    
    Route::apiResources([
        'company'=>CompanyController::class,
        'sale'=>SaleController::class,
        'council'=>CouncilController::class,
        'banner'=>BannerController::class,
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
    Route::get('/search_categories/{param}', [DataController::class, 'searchCategories']);
    Route::get('/parent_categories/{category}', [DataController::class, 'parentCategories']);
    Route::get('/countries', [DataController::class, 'countries']);
    Route::get('/cities/{country}', [DataController::class, 'cities']);
    Route::get('/areas/{city}', [DataController::class, 'areas']);
    Route::get('/legal_statuses', [DataController::class, 'legalStatuses']);
    Route::get('/issued_by', [DataController::class, 'issuedBy']);
    Route::get('/reports', [DataController::class, 'reports']);
    Route::get('/packages', [DataController::class, 'packages']);
    Route::get('/active_activities/{param}', [DataController::class, 'activeActivities']);
    Route::get('/get_all_contacts', [DataController::class, 'getAllContacts']);

});


Route::post('login', [AuthController::class, 'login']);
Route::post('login-dashboard', [AuthController::class, 'loginDashboard']);

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
Route::get('queue', [DataController::class, 'test_queue']);
Route::get('invoice', [DataController::class, 'test_invoice']);
Route::post('image', [DataController::class, 'image']);
Route::get('resize', [DataController::class, 'test_resize']);




/* 
| Front End apis
*/

Route::prefix('public')->group(function () {

    Route::get('/companies/active', [PublicController::class, 'allActiveCompanies']);
    Route::post('/companies/directory_page', [PublicController::class, 'companiesForDirectoryPage']);
    Route::get('/companies/{package}', [PublicController::class, 'companiesByPackage']);
    Route::get('/councils', [PublicController::class, 'allCouncils']);
    Route::get('/council/{council}', [PublicController::class, 'councilById']);
    Route::get('/council_company/{council}', [PublicController::class, 'councilCompanyById']);
    Route::get('/council_company_details/{councilCompany}', [PublicController::class, 'councilCompanyDetailsById']);
    Route::get('/council_member/{council}', [PublicController::class, 'councilMemberById']);
    Route::get('/council_member_details/{councilMember}', [PublicController::class, 'councilMemberDetailsById']);
    Route::get('/council_media/{council}', [PublicController::class, 'councilMediaById']);
    Route::get('/council_event/{council}', [PublicController::class, 'councilEventById']);
    Route::get('/council_media_details/{councilGallery}', [PublicController::class, 'councilMediaDetailsById']);
    Route::get('/council_event_details/{councilEvent}', [PublicController::class, 'councilEventDetailsById']);
    Route::get('/banners', [PublicController::class, 'activeBanners']);
    Route::get('/company_profile/{company}', [PublicController::class, 'companyProfile']);

});