<?php

namespace App\Providers;

use App\Interfaces\CompanyRepositoryInterface;
use App\Interfaces\CouncilCompanyRepositoryInterface;
use App\Interfaces\CouncilMemberRepositoryInterface;
use App\Interfaces\CouncilRepositoryInterface;
use App\Interfaces\DataRepositoryInterface;
use App\Interfaces\SaleReportInterface;
use App\Interfaces\SaleRepositoryInterface;
use App\Repositories\SaleRepository;
use App\Repositories\DataRepository;
use App\Repositories\CompanyRepository;
use App\Repositories\CouncilCompanyRepository;
use App\Repositories\CouncilMemberRepository;
use App\Repositories\CouncilRepository;
use App\Services\Image\ImageService;
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

        $this->app->bind(CouncilMemberRepositoryInterface::class, CouncilMemberRepository::class);

        $this->app->bind(CouncilCompanyRepositoryInterface::class, CouncilCompanyRepository::class);

        $this->app->bind(CompanyRepositoryInterface::class, function ($app) {
            return new CompanyRepository($app->make(UserSwitchingService::class),$app->make(ImageService::class));
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
            'councilEvent' => 'App\Models\CouncilEvent',
            'councilMedia' => 'App\Models\CouncilMedia'
        ]);
    }
}
