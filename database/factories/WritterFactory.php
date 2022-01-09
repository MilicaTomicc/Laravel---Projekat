<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WritterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'born' => $this->faker->date,
            'died' => $this->faker->optional()->date,
            'birth_place' => $this->faker->address
        ];
    }
}
