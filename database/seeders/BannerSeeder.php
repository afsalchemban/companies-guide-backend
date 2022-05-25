<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonth(),
            'status' => 'active',
            'company_id' => 223
        ]);
        DB::table('banners')->insert([
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonth(),
            'status' => 'active',
            'company_id' => 224
        ]);
        DB::table('banners')->insert([
            'start_date' => '2021-06-06',
            'end_date' => '2021-07-06',
            'status' => 'expired',
            'company_id' => 224
        ]);

        DB::table('images')->insert([
            'type' => 'banner',
            'desktop_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_1/desktop/1653483055.jpg',
            'mobile_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_1/mobile/1653483055.jpg',
            'thumbnail_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_1/thumbnail/1653483055.jpg', // password
            'imageble_id' => 2,
            'imageble_type' => 'banner',
            'created_at' => '2022-05-22 13:49:56',
            'updated_at' => '2022-05-22 13:49:56',
        ]);

        DB::table('images')->insert([
            'type' => 'banner',
            'desktop_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_2/desktop/1653483329.jpg',
            'mobile_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_2/mobile/1653483329.jpg',
            'thumbnail_path' => 'https://storage.googleapis.com/business-council-bucket/banners/banner_2/thumbnail/1653483329.jpg', // password
            'imageble_id' => 1,
            'imageble_type' => 'banner',
            'created_at' => '2022-05-22 13:49:56',
            'updated_at' => '2022-05-22 13:49:56',
        ]);
    }
}
