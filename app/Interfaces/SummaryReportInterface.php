<?php

namespace App\Interfaces;

interface SummaryReportInterface
{
    public function init(array $filters, $model);
    public function generate();
}
