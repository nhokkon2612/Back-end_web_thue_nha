<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\District;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([UsersSeeder::class]);
        $this->call(BathroomSeeder::class);
        $this->call(BedroomSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(LevelSquareSeeder::class);
        $this->call(LevelPriceSeeder::class);
        $this->call(HomeStatusSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(MediaSeeder::class);
    }
}
