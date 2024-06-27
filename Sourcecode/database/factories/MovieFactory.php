<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'production' => $this->faker->company,
            'director' => $this->faker->name,
            'release_date' => $this->faker->date,
            'age_restriction' => $this->faker->randomElement(['G', 'PG', 'PG-13', 'R', 'NC-17']),
            'duration' => $this->faker->numberBetween(60, 240),
            'synopsis' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['available', 'unavailable', 'coming_soon']),
        ];
    }
}
