<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('idea_product')->insert([
            [
                'idea_id' => 1,
                'product_id' => fake()->numberBetween(1, 16)
            ],
            [
                'idea_id' => 2,
                'product_id' => fake()->numberBetween(1, 16)
            ],
            [
                'idea_id' => 2,
                'product_id' => fake()->numberBetween(1, 16)
            ],
            [
                'idea_id' => 3,
                'product_id' => fake()->numberBetween(1, 16)
            ],
            [
                'idea_id' => 3,
                'product_id' => fake()->numberBetween(1, 16)
            ]
        ]);
    }
}
