<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouncilMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `council_media` (`title`, `description`,`council_id`) VALUES
        ('Health Sector', 'UAE Canada Health Analysis', '1'),
        ('Dubai Expo 2020', 'A glimpse of expo 2020', '1'),
        ('Top 50 Business opprotunities', 'Helping entrepreneurs', '1'),
        ('Promote employee wellness', 'The programme happens every end of year', '1');
        ");
        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_5/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_5/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_6/media/thumbnail/image.jpeg', 1, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_6/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_6/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_6/media/thumbnail/image.jpeg', 2, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_7/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_7/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_7/media/thumbnail/image.jpeg', 3, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_8/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_8/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_8/media/thumbnail/image.jpeg', 4, 'councilMedia', NULL, NULL);
        ");
    }
}
