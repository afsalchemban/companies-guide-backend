<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("
        INSERT INTO `subscription` (`company_id`, `package_id`, `start_date`, `end_date`, `status`) VALUES
        (1, 2, '2021-06-01', '2022-06-01', 'active'),
        (2, 2, '2020-03-14', '2021-03-14', 'expired'),
        (3, 3, '2022-01-01', '2023-01-01', 'active'),
        (4, 1, '2021-11-01', '2022-11-01', 'active'),
        (5, 1, '2020-10-14', '2021-10-14', 'expired');");
    }
}
