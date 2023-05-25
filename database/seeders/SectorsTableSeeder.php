<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sectors')->insert([
            [ 'name' => 'Banking & Investment Services' ],
            [ 'name' => 'Technology' ],
            [ 'name' => 'Healthcare Services' ],
            [ 'name' => 'Real Estate' ],
            [ 'name' => 'Food & Beverages' ],
            [ 'name' => 'Automobiles' ],
            [ 'name' => 'Telecommunication' ],
            [ 'name' => 'Utilities' ],
            [ 'name' => 'Transportation' ],
            [ 'name' => 'Construction' ]
        ]);
    }
}
