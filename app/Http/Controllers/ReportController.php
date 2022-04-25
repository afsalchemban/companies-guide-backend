<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyReportRequest;
use App\Http\Requests\SaleReportRequest;
use App\Models\Company;
use App\Models\Sale;
use App\Services\Reports\Company\CompanyReportForAdmin;
use App\Services\Reports\Company\CompanyReportForSale;
use App\Services\Reports\Company\CompanySummaryReport;
use App\Services\Reports\ReportService;
use App\Services\Reports\Sale\SaleReportForAdmin;
use App\Services\Reports\Sale\SaleReportForSale;
use App\Services\Reports\Sale\SaleSummaryReport;
use Exception;
use Illuminate\Support\Facades\App;


class ReportController extends Controller
{
    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
    }

    public function sale(SaleReportRequest $request){

        if($request->user()->isAdmin()){
            return $this->reportService->report(App::make(SaleReportForAdmin::class),$request->validated());
        }
        elseif($request->user()->isSale()){
            return $this->reportService->report(App::make(SaleReportForSale::class),$request->validated());
        }
        else{
            throw new Exception("No report for this user");
        }
    }

    public function summarySale(SaleReportRequest $request,Sale $sale){

        return $this->reportService->summaryReport(App::make(SaleSummaryReport::class),$request->validated(),$sale);
    }

   

    public function company(CompanyReportRequest $request){
        
        if($request->user()->isAdmin()){
            return $this->reportService->report(App::make(CompanyReportForAdmin::class),$request->validated());
        }
        elseif($request->user()->isSale()){
            return $this->reportService->report(App::make(CompanyReportForSale::class),$request->validated());
        }
        else{
            throw new Exception("No report for this user");
        }
    }

    public function summaryCompany(CompanyReportRequest $request,Company $company){

        return $this->reportService->summaryReport(App::make(CompanySummaryReport::class),$request->validated(),$company);
    }
}
