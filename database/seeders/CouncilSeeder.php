<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CouncilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `councils` (`council_name`, `email`, `mobile_number`, `landline_number`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `logo_image_path`, `cover_image_path`, `created_at`, `updated_at`) VALUES
        ('UAE Business Council', 'uae@council.com', '+18289565075', '+1 (806) 258-9977', 1, 1, 1, 'Ahammed', 'Vice President', 'ahammed@council.com', '252.762.6310', 'United Arab Emirates', 'https://storage.googleapis.com/business-council-bucket/councils/logos/no-image.png', 'https://storage.googleapis.com/business-council-bucket/councils/cover-images/no-image.png', '2022-05-09 15:39:38', '2022-05-09 15:39:38');");

        DB::table('users')->insert([
            'name' => 'UAE Business Council',
            'email' => 'uae@council.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'user_type' => 'council',
            'userable_id' => 1,
            'userable_type' => 'council'
        ]);
    }
}
