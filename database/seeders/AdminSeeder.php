<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'userable_id' => 1,
            'userable_type' => 'admin',
        ]);
        DB::table('images')->insert([
            'type' => 'profile',
            'desktop_path' => Storage::url(DefaultImageConstants::ADMIN_PROFILE_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::ADMIN_PROFILE_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::ADMIN_PROFILE_THUMBNAIL), // password
            'imageble_id' => 1,
            'imageble_type' => 'user',
            'created_at' => '2022-05-22 13:49:56',
            'updated_at' => '2022-05-22 13:49:56',
        ]);
    }
}
