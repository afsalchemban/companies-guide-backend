<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $this->call([
            AdminSeeder::class,
            SalesSeeder::class,
            PackageSeeder::class,
            IssuedByLegalStatusSeeder::class,
            CountryCityAreaSeeder::class,
            CompanyActivitySeeder::class,
            CompaniesSeeder::class,
            SubscriptionSeeder::class,
            OrdersSeeder::class,
            BankSeeder::class,
            CashSeeder::class,
            ChequeSeeder::class,
            CouncilSeeder::class,
            CouncilCompanySeeder::class,
            CouncilMemberSeeder::class,
            CouncilEventsSeeder::class
        ]);     
    }
}
