<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('regions')->insert([
            [ 'name' => 'Americas (North America, South America, Central America, Caribbean)' ],
            [ 'name' => 'Asia Pacific (Central & South Asia, Northeastern Asia, Southeastern Asia, Australia and Oceania)' ],
            [ 'name' => 'Europe (Northern Europe, Southern Europe, Eastern Europe, Western Europe)' ],
            [ 'name' => 'Middle East/Africa (Middle East, Northern Africa, Southern Africa)' ]
        ]);
    }
}
