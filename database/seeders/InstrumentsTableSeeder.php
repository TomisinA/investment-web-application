<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('instruments')->insert([
            [ 'name' => 'AAPL' ], // Apple Inc.
            [ 'name' => 'MSFT' ], // Microsoft Corporation
            [ 'name' => 'GOOGL' ], // Alphabet Inc. (Google)
            [ 'name' => 'TSLA' ], // Tesla, Inc.
            [ 'name' => 'FB' ], // Meta Platforms, Inc. (formerly Facebook, Inc.)
            [ 'name' => 'AMZN' ], // Amazon.com, Inc.
            [ 'name' => 'NFLX' ], // Netflix, Inc.
            [ 'name' => 'BRK.A' ], // Berkshire Hathaway Inc. Class A
            [ 'name' => 'JPM' ], // JPMorgan Chase & Co.
            [ 'name' => 'V' ], // Visa Inc.
            [ 'name' => 'WMT' ], // Walmart Inc.
            [ 'name' => 'JNJ' ], // Johnson & Johnson
            [ 'name' => 'NVDA' ], // NVIDIA Corporation
            [ 'name' => 'XOM' ], // Exxon Mobil Corporation
            [ 'name' => 'BA' ] // The Boeing Company
        ]);
    }
}
