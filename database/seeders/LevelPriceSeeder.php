<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_prices')->insert([
            ['name' => '5000000 - 8000000'],
            ['name' => '8000000 - 10000000'],
            ['name' => '10000000 - 15000000'],
            ['name' => '15000000 - 20000000'],
            ['name' => '20000000 - 25000000'],
        ]);
    }
}
