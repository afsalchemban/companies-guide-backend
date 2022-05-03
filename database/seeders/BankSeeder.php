<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `bank_payments` (`amount`,`bank_name`,`reference_number`) VALUES
        (7600, 'DIB', '78778787'),
        (7600, 'RAK BANK', '6876797');
        ");
    }
}
