<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyReportRequest;
use App\Http\Requests\SaleReportRequest;
use App\Models\Company;
use App\Models\Sale;
use App\Services\Reports\Company\CompanyReport;
use App\Services\Reports\Sale\SaleReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function sale(SaleReportRequest $request,SaleReport $saleReport){

        $report = $saleReport->start();
        
        $report->init($request->validated());
        return $report->generate();
    }

    public function singleSale(SaleReportRequest $request,Sale $sale, SaleReport $saleReport){

        $report = $saleReport->startSale();

        $report->initSale($request->validated(),$sale);
        return $report->generate();
    }

    public function singleCompany(CompanyReportRequest $request,Company $company, CompanyReport $companyReport){

        $report = $companyReport->startCompany();

        $report->initCompany($request->validated(),$company);
        return $report->generate();
    }

    public function company(CompanyReportRequest $request, CompanyReport $companyReport){
        
        
        $report = $companyReport->start();
        
        $report->init($request->validated());
        return $report->generate();
    }
}
