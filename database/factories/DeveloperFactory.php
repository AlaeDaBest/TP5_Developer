<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     */
    public function definition(): array
    {
        return [ 
            'name' => $this->faker->name(), 
            'email' => $this->faker->email()
        ];
    }
}
