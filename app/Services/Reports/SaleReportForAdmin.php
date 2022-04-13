<?php

namespace App\Services\Reports;

use App\Interfaces\SaleReportInterface;
use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;

class SaleReportForAdmin implements SaleReportInterface
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
        if(array_key_exists('sale_id', $filters))
        {
            $this->sale = $filters['sale_id'];
        }
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('area_id', $filters))
        {
            $this->area = $filters['area_id'];
        }
    }

    private function _extract()
    {
        return Sale::all();
    }

    public function generate()
    {
        return $this->_extract();
    }
}
