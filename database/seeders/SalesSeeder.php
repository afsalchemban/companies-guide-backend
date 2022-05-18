<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'name' => 'Sulaiman',
            'email' => 'sale@admin.com',
            'phone_number' => '000000',
            'gender' => 'Male',
            'dob' => '1990-03-03'
        ]);

        DB::table('images')->insert([
            'type' => 'profile',
            'desktop_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_THUMBNAIL),
            'imageble_id' => '1',
            'imageble_type' => 'sale',
        ]);

        DB::table('sales')->insert([
            'name' => 'Shady',
            'email' => 'es@es.com',
            'phone_number' => '12345',
            'gender' => 'Male',
            'dob' => '1980-03-03'
        ]);

        DB::table('images')->insert([
            'type' => 'profile',
            'desktop_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::SALE_PROFILE_THUMBNAIL),
            'imageble_id' => '2',
            'imageble_type' => 'sale',
        ]);
        

        DB::table('users')->insert([
            'name' => 'Sulaiman',
            'email' => 'sale@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'userable_id' => 1,
            'userable_type' => 'sale'
        ]);

        DB::table('users')->insert([
            'name' => 'Shady',
            'email' => 'es@es.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'userable_id' => 2,
            'userable_type' => 'sale'
        ]);
    }
}
