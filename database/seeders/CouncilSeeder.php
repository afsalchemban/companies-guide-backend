<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
        DB::unprepared("INSERT INTO `councils` (`council_name`, `email`, `mobile_number`, `landline_number`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `created_at`, `updated_at`) VALUES
        ('Canada Business Council', 'canada@council.com', '+18289565075', '+1 (806) 258-9977', 1, 1, 1, 'Ahammed', 'Vice President', 'ahammed@council.com', '324234', 'United Arab Emirates', '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Australia Business Council', 'australia@council.com', '4353453', '34545', 1, 1, 1, 'Sam', 'Vice President', 'sam@council.com', '23434', 'United Arab Emirates', '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Malaysian Business Council', 'malaysia@council.com', '4353454', '34545', 1, 1, 1, 'Mostfa', 'Vice President', 'mostafa@council.com', '23434', 'United Arab Emirates', '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Indian Busines sCouncil', 'india@council.com', '4353455', '34545', 1, 1, 1, 'Abhishek', 'Vice President', 'abhishek@council.com', '23434', 'United Arab Emirates', '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Saudi Business Council', 'saudi@council.com', '4353456', '34545', 1, 1, 1, 'Hamza', 'Vice President', 'hamza@council.com', '23434', 'United Arab Emirates', '2022-05-09 15:39:38', '2022-05-09 15:39:38');");

        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/logo/thumbnail/image.png', 1, 'council', NULL, NULL),
        ('cover', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/desktop/no-image.png', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/mobile/no-image.png', NULL, 1, 'council', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/logo/thumbnail/image.jpeg', 2, 'council', NULL, NULL),
        ('cover', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/desktop/no-image.png', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/mobile/no-image.png', NULL, 2, 'council', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_3/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_3/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_3/logo/thumbnail/image.jpeg', 3, 'council', NULL, NULL),
        ('cover', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/desktop/no-image.png', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/mobile/no-image.png', NULL, 3, 'council', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_4/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_4/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_4/logo/thumbnail/image.jpeg', 4, 'council', NULL, NULL),
        ('cover', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/desktop/no-image.png', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/mobile/no-image.png', NULL, 4, 'council', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_5/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_5/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_5/logo/thumbnail/image.jpeg', 5, 'council', NULL, NULL),
        ('cover', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/desktop/no-image.png', 'https://storage.googleapis.com/business-council-bucket/defaults/council/cover/mobile/no-image.png', NULL, 5, 'council', NULL, NULL);");
    }
}
