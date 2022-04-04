<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Reports\ReportInterface;
use App\Services\Reports\Reports;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ReportInterface::class, Reports::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
