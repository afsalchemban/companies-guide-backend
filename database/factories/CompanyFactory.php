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
            'activities' => $this->faker->text(),
            'legal_status' => $this->faker->text(),
            'issued_by' => $this->faker->text(),
            'country' => $this->faker->text(),
            'city' => $this->faker->text(),
            'person_in_charge_name' => $this->faker->name(),
            'person_in_charge_designation' => $this->faker->text(),
            'person_in_charge_email' => $this->faker->unique()->safeEmail(),
            'person_in_charge_mobile' => $this->faker->phoneNumber(),
            'person_in_charge_country' => $this->faker->text(),
            'package_id' => null,
            'created_by_user_id'=>'2'
        ];
    }
}
