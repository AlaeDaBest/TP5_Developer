<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     
     */
    public function definition(): array
    {
        return [ 
            'name' => $this->faker->company(), 
            'description' => $this->faker->paragraph(), 
            'start_date' => $this->faker->date(), 
            'end_date' => $this->faker->date(), 
            'status' => $this->faker->randomElement(['Planning', 'In Progress', 'Completed'])
        ];
    }
}