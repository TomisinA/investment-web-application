<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaInstrumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('idea_instrument')->insert([
            [
                'idea_id' => 1,
                'instrument_id' => fake()->numberBetween(1, 15)
            ],
            [
                'idea_id' => 2,
                'instrument_id' => fake()->numberBetween(1, 15)
            ],
            [
                'idea_id' => 2,
                'instrument_id' => fake()->numberBetween(1, 15)
            ],
            [
                'idea_id' => 3,
                'instrument_id' => fake()->numberBetween(1, 15)
            ],
            [
                'idea_id' => 3,
                'instrument_id' => fake()->numberBetween(1, 15)
            ]
        ]);
    }
}
