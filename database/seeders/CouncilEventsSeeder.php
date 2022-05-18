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
        DB::table('council_events')->insert([
            'name' => 'Tech Event',
            'location' => 'Dubai',
            'link' => 'wwww.google.com',
            'council_id' => 1, // password
            'event_date' => '2022-02-02'
        ]);

        DB::table('images')->insert([
            'type' => 'event',
            'desktop_path' => Storage::url(DefaultImageConstants::COUNCIL_EVENT_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COUNCIL_EVENT_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COUNCIL_EVENT_THUMBNAIL),
            'imageble_id' => '1',
            'imageble_type' => 'councilEvent',
        ]);
    }
}
