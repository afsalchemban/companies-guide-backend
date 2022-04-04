<?php

namespace App\Services\Reports;

use App\Models\User;

class Reports implements ReportInterface
{
    private $start;
    private $end;

    public function setRange(String $startTimeStamp , String $endTimeStamp)
    {
        $this->start = $startTimeStamp;
        $this->end = $endTimeStamp;
    }
    public function getAll(){
        return User::all();
    }
}
