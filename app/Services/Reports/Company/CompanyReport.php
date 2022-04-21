<?php

namespace App\Services\Reports\Company;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CompanyReport
{
    protected $company;
    protected $package;
    protected $activity;
    protected $duration;

    public function __construct()
    {
        $this->company = null;
        $this->package = null;
        $this->activity = null;
        $this->duration = null;
    }

    public function init(array $filters)
    {
        if(array_key_exists('company_id', $filters))
        {
            $this->company = $filters['company_id'];
        }
        if(array_key_exists('package_id', $filters))
        {
            $this->package = $filters['package_id'];
        }
        if(array_key_exists('company_activity_id', $filters))
        {
            $this->activity = $filters['company_activity_id'];
        }
        if(!empty($filters['duration']))
        {
            $this->_processDate($this->duration = json_decode($filters['duration']));
        }
        
    }

    private function _processDate($duration){
        if($this->duration!=null)
        {
            switch($duration->type)
            {
                case 'last-30' : $this->duration->date = Carbon::now()->subDays(30)->toDateTimeString(); break;
                case 'current-month' : $this->duration->date = Carbon::now()->firstOfMonth()->toDateTimeString(); break;
                case 'last-6-month' : $this->duration->date = Carbon::now()->subMonths(6)->toDateTimeString(); break;
                default : $this->duration->date=null;
            }
        }
    }

    public function start()
    {
        if(Auth::user()->isAdmin())
        {
            return App::make(CompanyReportForAdmin::class);
        }
        elseif(Auth::user()->isSale())
        {
            return App::make(CompanyReportForSale::class);
        }
    }
}
