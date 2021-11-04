<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSquareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_squareds')->insert([
            ['name' => '80'],
            ['name' => '90'],
            ['name' => '100'],
            ['name' => '120'],
            ['name' => '150'],
        ]);
    }
}
