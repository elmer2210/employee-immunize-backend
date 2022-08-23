<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_born'=> fake()->date('Y-m-d'),
            'direction_home'=> fake()->address(),
            'injection_state'=> fake()->randomElement($array = array('Vacunado', 'No Vacunado')),
            'injection_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 10),
            'created_at' => fake()->dateTime,
        ];
    }
}
