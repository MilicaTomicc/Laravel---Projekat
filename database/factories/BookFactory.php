<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->realText,
            'writter_id' => $this->faker->numberBetween(1, 10),
            'genre_id' => $this->faker->numberBetween(1, 9),
            'isbn' => $this->faker->word(),
            'note' => $this->faker->realText,
            'pages' => $this->faker->numberBetween(10, 1110),
        ];
    }
}
