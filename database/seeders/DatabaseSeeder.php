<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'email' => 'creator@example.com',
                'name' => 'Tyler Creator',
                'role' => 1,
                'password' => bcrypt('12345')
            ],
            [
                'email' => 'investor@example.com',
                'name' => 'John Investor',
                'role' => 2,
                'password' => bcrypt('12345')
            ],
            [
                'email' => 'manager@example.com',
                'name' => 'Phill Manager',
                'role' => 3,
                'password' => bcrypt('12345')
            ]
        ]);

        $this->call(RatingsTableSeeder::class);
        $this->call(SectorsTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(InstrumentsTableSeeder::class);

        Idea::factory(3)->create();

        $this->call(IdeaProductTableSeeder::class);
        $this->call(IdeaInstrumentTableSeeder::class);
    }
}
