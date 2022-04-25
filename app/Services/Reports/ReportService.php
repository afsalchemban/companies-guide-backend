<?php

namespace App\Services\Reports;

use App\Interfaces\ReportInterface;
use App\Interfaces\SummaryReportInterface;
use App\Models\Sale;

class ReportService
{
    public function report(ReportInterface $report, array $filters)
    {
        $report->init($filters);
        return $report->generate();
    }

    public function summaryReport(SummaryReportInterface $report, array $filters, $model)
    {
        $report->init($filters,$model);
        return $report->generate();
    }
}
