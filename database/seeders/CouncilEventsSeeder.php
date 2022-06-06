<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CouncilEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::unprepared("INSERT INTO `council_events` (`name`, `location`, `link`, `event_date`, `council_id`) VALUES
        ('Exhibition Show', 'Burj Khaleefa', 'www.link.com', '2022-12-02', '1'),
        ('Business Fest', 'Palm Jumeirah', 'www.link.com', '2023-10-02', '1'),
        ('BootCamp', 'World Islands', 'www.link.com', '2023-11-22', '1'),
        ('Cultural Programe', 'Business Bay', 'www.link.com', '2022-12-12', '1'),
        ('LeaderShip Summit', 'Ruggat Al Butean', 'www.link.com', '2022-04-03', '1')
        ;
        ");
        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('event', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_6/event/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_6/event/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_6/event/thumbnail/image.jpeg', 1, 'councilEvent', NULL, NULL),
        ('event', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_7/event/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_7/event/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_7/event/thumbnail/image.jpeg', 2, 'councilEvent', NULL, NULL),
        ('event', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_8/event/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_8/event/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_8/event/thumbnail/image.jpeg', 3, 'councilEvent', NULL, NULL),
        ('event', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_9/event/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_9/event/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_9/event/thumbnail/image.jpeg', 4, 'councilEvent', NULL, NULL),
        ('event', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_11/event/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_11/event/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/events/event_11/event/thumbnail/image.jpeg', 5, 'councilEvent', NULL, NULL);
        ");
    }
}
