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
        ('Council Excecutive Meeting', 'A snapshot from the meeting', '1'),
        ('Chamber meeting', 'In the middle of business', '1'),
        ('Meeting Hall', 'A picture of hall before meeting', '1'),
        ('Yearly Programme', 'The programme happens every end of year', '1');
        ");
        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_1/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_1/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_1/media/thumbnail/image.jpeg', 1, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_2/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_2/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_2/media/thumbnail/image.jpeg', 2, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_3/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_3/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_3/media/thumbnail/image.jpeg', 3, 'councilMedia', NULL, NULL),
        ('media', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_4/media/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_4/media/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/medias/media_4/media/thumbnail/image.jpeg', 4, 'councilMedia', NULL, NULL);
        ");
    }
}
