<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CouncilMember>
 */
class CouncilMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dob' => $this->faker->date('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'designation' => $this->faker->text(10),
            'nationality' => 1,
            'mobile' => $this->faker->phoneNumber(),
            'country_id' => 1,
            'city_id' => 1,
            'area_id' => 1,
        ];
    }
}
