<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `orders` (`subscription_id`,`company_id`,`package_id`,`discount_percentage`,`discount_amount`,`net_total`, `created_at`, `updated_at`) VALUES
        (1,1,2,10,30,7600, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (2,2,2,10,30,7600, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (3,3,3,10,30,7600, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (4,4,1,10,30,7600, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (5,5,1,10,30,7600, '2022-04-21 07:24:24', '2022-04-21 07:24:24');
        ");
    }
}
