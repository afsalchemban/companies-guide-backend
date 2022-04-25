<?php

namespace App\Traits;
use Carbon\Carbon;

trait ReportTrait
{
    public function convertDurationToDate($duration){
        switch($duration->type)
            {
                case 'last-30' : return Carbon::now()->subDays(30)->toDateTimeString(); break;
                case 'last-7' : return Carbon::now()->subDays(7)->toDateTimeString(); break;
                case 'current-month' : return Carbon::now()->firstOfMonth()->toDateTimeString(); break;
                case 'last-6-month' : return Carbon::now()->subMonths(6)->toDateTimeString(); break;
                case 'custom' : return []; break;
                default : return null;
            }
    }
}
