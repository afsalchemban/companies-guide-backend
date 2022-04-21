<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name' => 'Sale Test Account',
            'email' => 'sale@admin.com',
            'phone_number' => '000000',
            'gender' => 'Male',
            'dob' => '1990-03-03'
        ]);

        DB::table('sales')->insert([
            'name' => 'Shady',
            'email' => 'es@es.com',
            'phone_number' => '12345',
            'gender' => 'Male',
            'dob' => '1980-03-03'
        ]);
        

        DB::table('users')->insert([
            'name' => 'Sale Test Account',
            'email' => 'sale@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'user_type' => 'sale',
            'userable_id' => 1,
            'userable_type' => 'App\Models\Sale'
        ]);

        DB::table('users')->insert([
            'name' => 'Shady',
            'email' => 'es@es.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'user_type' => 'sale',
            'userable_id' => 2,
            'userable_type' => 'App\Models\Sale'
        ]);
    }
}
