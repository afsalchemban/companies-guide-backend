<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::unprepared("INSERT INTO `companies` (`id`, `business_name`, `email`, `phone_number`, `landline_number`, `trade_license_number`, `company_activity_id`, `legal_status`, `issued_by`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `sale_id`, `created_at`, `updated_at`) VALUES
        (1, 'MIDWEST MEDICAL CLINIC', 'midwest@company.com', '864-289-9486', '248-372-0013', '22230133356181', 1, 'Freezone', 'LLC', 1, 1, 1, 'Aaron Mitchell', 'Manager', 'abshire.manuela@example.org', '208.347.7432', 'Incidunt iusto sunt nobis sit quo laudantium. Nulla magnam est vero quibusdam. Quod ea iure praesentium in occaecati sed est. Ut sed pariatur magni modi ab.', 1, '2022-03-21 07:24:24', '2022-04-21 07:24:24'),
        (2, 'B & A INTERNATIONAL FZCO', 'lamont58@example.net', '(724) 890-2723', '+1-475-456-2955', '3454013332434', 1, 'Freezone', 'LLC', 1, 1, 1, 'Amelia Hackett', 'IT Admin', 'shanna.stokes@example.net', '1-938-297-1637', 'Et sed quia enim id iure rem et natus. Et odit amet occaecati consequatur maiores quis sint ad.', 2, '2022-03-21 07:24:24', '2022-04-21 07:24:24'),
        (3, 'D & D DIGITAL STUDIO', 'sschuster@example.org', '1-757-830-4441', '539.583.2000', '3874632483', 1, 'Freezone', 'LLC', 1, 1, 1, 'Verda Ledner', 'Market Head', 'nschultz@example.net', '(712) 545-7341', 'Sint ipsa ea ratione eaque omnis sit. Dolores praesentium saepe voluptatem voluptates velit ut molestiae a. Omnis voluptate et enim est alias incidunt quia laudantium.', 2, '2022-03-21 07:24:24', '2022-04-21 07:24:24'),
        (4, 'R & B ELITE FITNESS', 'uheidenreich@example.net', '(513) 255-4993', '863.731.9705', '4395789435', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gino Prosacco', 'Owner', 'cathrine.greenfelder@example.net', '1-213-348-3253', 'Sit earum delectus consequatur consectetur eum non. Vel consequatur consequatur officia.', 2, '2022-04-21 07:24:24', '2022-04-21 07:24:24'),
        (5, 'PACIFIC INTERNATIONAL TRADING (L.L.C)', 'bondricka@example.com', '931.588.0183', '+1.520.205.9388', '83745748', 1, 'Freezone', 'LLC', 1, 1, 1, 'Gregory Bode', 'CEO', 'ulices.paucek@example.net', '352.897.1928', 'Aut iusto quo velit accusamus. Ducimus magnam sint aut. Consequuntur modi aut velit quo et impedit sunt illum.', 1, '2022-04-21 07:24:24', '2022-04-21 07:24:24');");    

        DB::table('users')->insert([
            'name' => 'MIDWEST MEDICAL CLINIC',
            'email' => 'midwest@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dummypassword'), // password
            'remember_token' => Str::random(10),
            'userable_id' => 1,
            'userable_type' => 'company'
        ]);

        DB::table('images')->insert([
            'type' => 'logo',
            'desktop_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL),
            'imageble_id' => '1',
            'imageble_type' => 'company',
        ]);

        DB::table('images')->insert([
            'type' => 'logo',
            'desktop_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL),
            'imageble_id' => '2',
            'imageble_type' => 'company',
        ]);

        DB::table('images')->insert([
            'type' => 'logo',
            'desktop_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL),
            'imageble_id' => '3',
            'imageble_type' => 'company',
        ]);

        DB::table('images')->insert([
            'type' => 'logo',
            'desktop_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL),
            'imageble_id' => '4',
            'imageble_type' => 'company',
        ]);

        DB::table('images')->insert([
            'type' => 'logo',
            'desktop_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_DESKTOP),
            'mobile_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_MOBILE),
            'thumbnail_path' => Storage::url(DefaultImageConstants::COMPANY_LOGO_THUMBNAIL),
            'imageble_id' => '5',
            'imageble_type' => 'company',
        ]);
    }
}
