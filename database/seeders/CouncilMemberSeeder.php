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
        ('Ahammed', '2021-12-26', '1', 'ahammed@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Kate Thomas', '2021-12-26', '1', 'kate@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Praveena', '2021-12-26', '1', 'pravi@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Amber', '2021-12-26', '1', 'amber@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('George', '2021-12-26', '1', 'george@example.org', NULL, '(380) 220-7314', 'Ut.', 1, 1, 1, 1, '2022-05-09 15:39:38', '2022-05-09 15:39:38');
        ");

        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('profile', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_1/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_1/logo/thumbnail/image.png', 1, 'councilMember', NULL, NULL),
        ('profile', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_2/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_2/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_1/logo/thumbnail/image.jpeg', 2, 'councilMember', NULL, NULL),
        ('profile', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_3/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_3/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/members/member_1/logo/thumbnail/image.png', 3, 'councilMember', NULL, NULL),
        ('profile', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/member_1/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/member_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/company_2/logo/thumbnail/image.png', 4, 'councilMember', NULL, NULL),
        ('profile', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/member_2/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/member_2/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/members/member_2/logo/thumbnail/image.jpeg', 5, 'councilMember', NULL, NULL);
        ");
    }
}
