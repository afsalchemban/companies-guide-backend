<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `packages` (`name`,`price`,`description`) VALUES
        ('Full',7000,'Advanced package with all options plus showing banner in the homepage for one month'),
        ('Profile',5000,'Intermediate package with company profile, gallery along with directory listing'),
        ('Directory',3000,'Basic package with directory listing');");
    }
}
