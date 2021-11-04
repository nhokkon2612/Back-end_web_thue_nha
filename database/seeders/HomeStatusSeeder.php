<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_statuses')->insert([
            ['name' => 'Còn trống'],
            ['name' => 'Đã thuê'],
            ['name' => 'Đang nâng cấp'],
        ]);
    }
}
