<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CouncilEvents>
 */
class CouncilEventFactory extends Factory
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
            'location' => $this->faker->text(),
            'event_date' => $this->faker->date('Y-m-d'),
            'link' => $this->faker->text()
        ];
    }
}
