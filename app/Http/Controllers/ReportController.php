<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleReportRequest;
use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
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

    public function company(SaleReport $saleReport){
        
        $report = $saleReport->start();
        return $report->generate();
    }
}
