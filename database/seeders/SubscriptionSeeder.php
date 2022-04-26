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
        (1, 2, '1975-09-16', '1984-01-30', 'active'),
        (2, 2, '2005-05-13', '1987-10-25', 'expired'),
        (3, 3, '1992-03-20', '2010-07-11', 'active'),
        (4, 1, '2021-05-22', '1973-05-31', 'active'),
        (5, 1, '1977-07-13', '1988-12-20', 'expired');");
    }
}
