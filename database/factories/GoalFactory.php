<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'target'=> $this->faker->realText(),
        'image'=> $this->faker->imageUrl(),
        'start_date' => $this->faker->dateTimeBetween('now','+30 days'),
        'completion_date'=> $this->faker->dateTimeBetween('now','3 months'),
        'category_id'=> Category::all()->random()->id,
        ];
    }
}