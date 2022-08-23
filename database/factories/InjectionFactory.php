<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Injection>
 */
class InjectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'injection_type'=>fake()->randomElement($array = array(' Sputnik', 'AstraZeneca', 'Pfizer', 'Jhonson&Jhonson')),
            'injection_date'=> fake() ->date,
            'dosis'=>fake()->numberBetween(1, 4),

        ];
    }
}
