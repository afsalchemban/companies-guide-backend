<?php

namespace App\Interfaces;

use App\Models\Area;
use App\Models\Package;
use App\Models\Sale;

interface SaleReportInterface
{
    public function init(array $filters);
    public function generate();
}
