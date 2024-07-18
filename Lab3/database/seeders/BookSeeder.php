<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'thumbnail' => $faker->imageUrl,
                'author' => $faker->name,
                'publisher' => $faker->company,
                'Publication' => $faker->date,
                'Price' => $faker->randomFloat(2, 10, 100), // Random price between 10 and 100
                'Quantity' => $faker->numberBetween(1, 50), // Random quantity between 1 and 50
                'Category_id' => ($i % 5) + 1 // Cycle through categories 1 to 5
            ]);
    }
}
}
