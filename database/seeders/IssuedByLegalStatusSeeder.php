<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuedByLegalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `reports` (`name`) VALUES
        ('Sale'),
        ('Company');");

        DB::unprepared("INSERT INTO `issued_by` (`name`) VALUES
        ('Freezone'),
        ('Local'),
        ('JAFZA'),
        ('DAFZA'),
        ('DMCC'),
        ('DUBAI SOUTH '),
        ('TCOM'),
        ('DTECH'),
        ('MEYDAN'),
        ('DUBAI SILICON OASIS'),
        ('SHARJAH AIRPORT'),
        ('HAMRIYA'),
        ('AJMAN'),
        ('AJMAN MEDIA CITY'),
        ('CREATIVE CITY'),
        ('IFZA FREE'),
        ('UAQ'),
        ('RAKEZ');");

        DB::unprepared("INSERT INTO `legal_statuses` (`name`) VALUES
        ('LLC'),
        ('Service Agency'),
        ('FZE'),
        ('Group'),
        ('FZ-LLC'),
        ('Civil company'),
        ('Partnership Company'),
        ('Foreign Recognized Company'),
        ('Private Joint Stock Company'),
        ('Public Joint Stock Company'),
        ('Holding Company'),
        ('Sole Proprietorship'),
        ('Professional Trade Licence'),
        ('Professional Freelance Licence'),
        ('LLP');");
    }
}
