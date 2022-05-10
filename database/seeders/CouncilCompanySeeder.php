<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouncilCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `council_companies` (`business_name`, `email`, `phone_number`, `landline_number`, `trade_license_number`, `company_activity_id`, `legal_status`, `issued_by`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `logo_image_path`, `council_id`, `council_member_id`, `created_at`, `updated_at`) VALUES
        ('MULTISTAR', 'oemard@example.org', '380.401.7081', '1-252-887-6445', 'Qui ut commodi rem beatae aut est. Laudantium voluptatem atque aut veniam repudiandae qui ab. Qui at et doloremque et eius. Soluta est quod omnis ratione praesentium est aut.', 1, 'Freezone', 'LLC', 1, 1, 1, 'Curt Treutel', 'Sequi qui ut itaque quos autem aut. Eligendi nisi libero autem vel consequatur repudiandae aut voluptas. Velit quia quaerat corrupti molestiae vel praesentium quisquam.', 'yhansen@example.com', '(862) 544-2560', 'Commodi quam nesciunt dolor voluptas nihil in libero voluptatibus. Sit sit saepe a magnam. Odio est pariatur iste maiores.', 'https://storage.googleapis.com/business-council-bucket/councils/companies/logos/no-image.png', 1, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38');");
    }
}
