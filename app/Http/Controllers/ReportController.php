<?php

namespace App\Http\Controllers;

use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct(SaleReportInterface $saleReport)
    {
        $this->saleReport = $saleReport;
    }
    //
    public function sale(Sale $sale, Package $package, Area $area){

        $this->saleReport->init([
            'sale' => $sale,
            'package' => $package,
            'area' => $area
        ]);

        return $this->saleReport->generate();
    }

    public function company(){
        return $this->saleReport->generate();
    }
}
