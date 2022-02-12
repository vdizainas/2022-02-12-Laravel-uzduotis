<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(), 
            'description' => $this->faker->sentence(5), 
            'status_id' => $this->faker->numberBetween(1, 3), 
        ];
    }
}
