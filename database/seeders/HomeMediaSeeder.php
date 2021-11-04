<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_media')->insert([
            ['home_id' => 1, 'media_id' => 2],
            ['home_id' => 2, 'media_id' => 1],
        ]);
    }
}
