<?php

namespace App\Services\Reports;

use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;

class SaleReport implements SaleReportInterface
{
    private $sale;
    private $package;
    private $area;

    public function __construct()
    {
        $this->sale = null;
        $this->package = null;
        $this->area = null;
    }

    public function init(array $filters)
    {
        if(array_key_exists('sale', $filters))
        {
            $this->sale = $filters['sale'];
        }
        if(array_key_exists('package', $filters))
        {
            $this->package = $filters['package'];
        }
        if(array_key_exists('area', $filters))
        {
            $this->area = $filters['area'];
        }
    }

    public function generate()
    {
        return "report";
    }
}
