<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleReportRequest;
use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
use App\Services\Reports\SaleReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct(SaleReport $saleReport)
    {
        $this->saleReport = $saleReport->start();
    }
    //
    public function sale(SaleReportRequest $request){

        $this->saleReport->init($request->validated());

        return $this->saleReport->generate();
    }

    public function company(){
        return $this->saleReport->generate();
    }
}
