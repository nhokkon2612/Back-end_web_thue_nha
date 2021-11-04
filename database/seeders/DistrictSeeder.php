<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            ['name' => 'Đống Đa', 'city_id' => 1],
            ['name' => 'Ba Đình', 'city_id' => 1],
            ['name' => 'Tây Hồ', 'city_id' => 1],
            ['name' => 'Từ Liêm', 'city_id' => 1],
            ['name' => 'Liên Chiểu', 'city_id' => 2],
        ]);
    }
}
