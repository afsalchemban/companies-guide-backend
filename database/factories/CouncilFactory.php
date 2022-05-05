<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Council>
 */
class CouncilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'council_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile_number' => $this->faker->phoneNumber(),
            'landline_number' => $this->faker->phoneNumber(),
            'country_id' => 1,
            'city_id' => 1,
            'area_id' => 1,
            'person_in_charge_name' => $this->faker->name(),
            'person_in_charge_designation' => $this->faker->text(),
            'person_in_charge_email' => $this->faker->unique()->safeEmail(),
            'person_in_charge_mobile' => $this->faker->phoneNumber(),
            'person_in_charge_country' => $this->faker->text(),
        ];
    }
}
