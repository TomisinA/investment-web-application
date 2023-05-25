<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('products')->insert([
            [ 'name' => 'Bonds' ],
            [ 'name' => 'Equity' ],
            [ 'name' => 'Mutual Funds' ],
            [ 'name' => 'Index Funds' ],
            [ 'name' => 'Private Equity' ],
            [ 'name' => 'Exchange-traded Funds' ],
            [ 'name' => 'Stocks' ],
            [ 'name' => 'Fixed Deposit' ],
            [ 'name' => 'Certificates of Deposit' ],
            [ 'name' => 'Retirement Planning' ],
            [ 'name' => 'Insurance' ],
            [ 'name' => 'Provident Funds' ],
            [ 'name' => 'Annuity' ],
            [ 'name' => 'Trade' ],
            [ 'name' => 'Derivative' ],
            [ 'name' => 'Cash and Cash Equivalences' ]
        ]);
    }
}
