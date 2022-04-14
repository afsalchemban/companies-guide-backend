<?php

namespace App\Interfaces;

interface ReportInterface
{
    public function init(array $filters);
    public function generate();
}
