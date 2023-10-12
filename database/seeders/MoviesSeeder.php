<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        for ($i = 0; $i < 10; $i++){
            Movie::create([
                'title' => fake()->sentence(3),
                'synopsis' => fake()->paragraph(1),
                'year' => fake()->randomDigit(),
                'cover' => fake()->sentence(3),
            ]);
        }
    }
}
