<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'abstract' => fake()->paragraph(5),
            'content' => fake()->paragraph(3),
            'expiry_date' => fake()->date(),
            'risk_rating_id' => fake()->numberBetween(1, 5),
            'major_sector_id' => fake()->numberBetween(1, 10),
            'minor_sector_id' => fake()->numberBetween(1, 10),
            'region_id' => fake()->numberBetween(1, 4),
            'country_id' => fake()->numberBetween(1, 206),
            'currency_id' => fake()->numberBetween(1, 155),
            'creator_id' => 1
        ];
    }
}
