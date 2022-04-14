<?php

namespace App\Providers;

use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\DataRepositoryInterface;
use App\Interfaces\SaleReportInterface;
use App\Interfaces\SaleRepositoryInterface;
use App\Repositories\SaleRepository;
use App\Repositories\DataRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\UserSwitchingService;
use Exception;
use Illuminate\Auth\AuthenticationException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserSwitchingService::class, function ($app) {
            return new UserSwitchingService();
        });

        $this->app->bind(SaleRepositoryInterface::class, SaleRepository::class);

        $this->app->bind(CompanyRepositoryInterface::class, function ($app) {
            return new CompanyRepository($app->make(UserSwitchingService::class));
        });

        $this->app->bind(DataRepositoryInterface::class, DataRepository::class);
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
