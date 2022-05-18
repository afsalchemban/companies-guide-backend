<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CouncilMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `council_members` (`name`, `dob`, `nationality`, `email`, `website`, `mobile`, `designation`, `country_id`, `city_id`, `area_id`, `council_id`, `created_at`, `updated_at`) VALUES
        ('Prof. Leo Vandervort', '2021-12-26', '1', 'qjohnston@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38');");

        DB::table('images')->insert([
            'type' => 'profile',
            'desktop_path' => Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COUNCIL_MEMBER_PROFILE_THUMBNAIL),
            'imageble_id' => '1',
            'imageble_type' => 'councilMember',
        ]);
    }
}
