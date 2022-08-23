<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
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
            'role_name'=>fake()->unique()->randomElement($array = array('admin', 'employee')),
            'role_description'=>fake()->unique()->randomElement($array = array('Administrador', 'Empleado')),
        ];
    }
}
