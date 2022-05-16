<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'business_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'landline_number' => $this->faker->phoneNumber(),
            'trade_license_number' => $this->faker->text(),
            'company_activity_id' => 1,
            'legal_status' => 'Freezone',
            'issued_by' => 'LLC',
            'country_id' => 1,
            'city_id' => 1,
            'area_id' => 1,
            'person_in_charge_name' => $this->faker->name(),
            'person_in_charge_designation' => $this->faker->text(),
            'person_in_charge_email' => $this->faker->unique()->safeEmail(),
            'person_in_charge_mobile' => $this->faker->phoneNumber(),
            'person_in_charge_country' => $this->faker->text(),
            'logo_image_path' => 'https://storage.googleapis.com/business-council-bucket/councils/companies/logos/no-image.png'
        ];
    }
}
