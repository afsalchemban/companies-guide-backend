<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouncilMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `council_members` (`name`, `dob`, `nationality`, `email`, `website`, `mobile`, `designation`, `profile_image`, `country_id`, `city_id`, `area_id`, `council_id`, `created_at`, `updated_at`) VALUES
        ('Prof. Leo Vandervort', '2021-12-26', '1', 'qjohnston@example.org', NULL, '(380) 220-7314', 'Ut.', 'https://storage.googleapis.com/business-council-bucket/councils/members/profile-images/no-image.png', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38');");
    }
}
