<?php

namespace Database\Seeders;

use App\Constants\DefaultImageConstants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CouncilCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared("INSERT INTO `council_companies` (`business_name`, `email`, `phone_number`, `landline_number`, `trade_license_number`, `legal_status`, `issued_by`, `country_id`, `city_id`, `area_id`, `person_in_charge_name`, `person_in_charge_designation`, `person_in_charge_email`, `person_in_charge_mobile`, `person_in_charge_country`, `council_id`, `council_member_id`, `created_at`, `updated_at`) VALUES
        ('ICAS', 'info@icas.org', '324255', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 1, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('WORLDTECH MEDIA ADVISORY', 'info@worldtech.org', '3242551', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 1, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('GoDaddy', 'info@godaddy.org', '3242552', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 1, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('UNICORN MINIMALIST', 'info@unicorn.org', '3242553', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 1, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Travel Tag', 'info@travel.org', '3242554', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 2, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('Move Out', 'info@move.org', '3242555', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 2, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('GARDENER', 'info@gardener.org', '3242556', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 2, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38'),
        ('MEETINGS OPC', 'info@meetings.org', '3242557', '1-252-887-6445', '2432545', 'Freezone', 'LLC', 1, 1, 1, 'James', 'Manager', 'james@icas.com', '(862) 544-2560', 'United Arab Emirates', 2, NULL, '2022-05-09 15:39:38', '2022-05-09 15:39:38');
        ");

        DB::unprepared("INSERT INTO `images` (`type`, `desktop_path`, `mobile_path`, `thumbnail_path`, `imageble_id`, `imageble_type`, `created_at`, `updated_at`) VALUES
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/thumbnail/image.png', 1, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_2/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/thumbnail/image.jpeg', 2, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_3/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/thumbnail/image.png', 3, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_4/logo/desktop/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/mobile/image.png', 'https://storage.googleapis.com/business-council-bucket/presentation/council_1/companies/company_1/logo/thumbnail/image.png', 4, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_1/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_1/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_1/logo/thumbnail/image.jpeg', 5, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_2/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_2/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_2/logo/thumbnail/image.jpeg', 6, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_3/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_3/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_3/logo/thumbnail/image.jpeg', 7, 'councilCompany', NULL, NULL),
        ('logo', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_4/logo/desktop/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_4/logo/mobile/image.jpeg', 'https://storage.googleapis.com/business-council-bucket/presentation/council_2/companies/company_4/logo/thumbnail/image.jpeg', 8, 'councilCompany', NULL, NULL);
        ");
    }
}
