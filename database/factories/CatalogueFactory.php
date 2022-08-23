<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalogue>
 */
class CatalogueFactory extends Factory
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
            'type'=>'INJECTIONTYPE',
            'description' => fake()-> unique()->randomElement($array = array('Jonson & Jonson', 'Pyzer', 'Astrezeneca', 'Sinovac')),
        ];
    }
}
