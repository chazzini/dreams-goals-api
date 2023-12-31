<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Why>
 */
class WhyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question'=> $this->faker->realText(200),
            'why'=> $this->faker->realText(200),
            'category_id'=> Category::all()->random()->id,
        ];
    }
}