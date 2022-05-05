<?php

namespace App\Providers;

use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\CouncilRepositoryInterface;
use App\Interfaces\DataRepositoryInterface;
use App\Interfaces\SaleReportInterface;
use App\Interfaces\SaleRepositoryInterface;
use App\Repositories\SaleRepository;
use App\Repositories\DataRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\CouncilRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\UserSwitchingService;
use Illuminate\Database\Eloquent\Relations\Relation;

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

        $this->app->bind(CouncilRepositoryInterface::class, CouncilRepository::class);

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
        Relation::enforceMorphMap([
            'cash' => 'App\Models\CashPayment',
            'cheque' => 'App\Models\ChequePayment',
            'bank' => 'App\Models\BankPayment',
            'company' => 'App\Models\Company',
            'sale' => 'App\Models\Sale',
            'user' => 'App\Models\User',
            'order' => 'App\Models\Order',
            'council' => 'App\Models\Council',
        ]);
    }
}
