<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('risk_ratings')->insert([
            [ 'name' => 'Highly suitable for conservative investors' ],
            [ 'name' => 'Suitable for conservative investors' ],
            [ 'name' => 'Suitable for moderate investors' ],
            [ 'name' => 'Suitable for aggressive investors' ],
            [ 'name' => 'Highly suitable for aggressive investors' ]
        ]);
    }
}
