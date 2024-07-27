<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'poster' => $this->faker->imageUrl(),
            'intro' => $this->faker->paragraph,
            'release_date' => $this->faker->date,
            'genre_id' => Genre::all()->random()->id,
        ];
    }
}
