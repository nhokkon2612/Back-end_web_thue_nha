<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bedrooms')->insert([
            ['name' => '1'],
            ['name' => '2'],
            ['name' => '3'],
            ['name' => '4'],
            ['name' => '5'],
            ['name' => '6'],
            ['name' => '7'],
            ['name' => '8'],
            ['name' => '9'],
            ['name' => '10']
        ]);
    }
}
