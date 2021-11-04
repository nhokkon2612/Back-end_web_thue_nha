<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            ['title' => 'Cho thuê nhà biệt thự', 'squared_id' => '3', 'detail_address' => 'số 23 Lô TT01, đường Hàm Nghi', 'bedroom_id' => 3, 'bathroom_id' => 2, 'price_id' => '2', 'price' => '10000000' , 'category_id' => 2, 'status_id' => 1, 'description' => 'Biệt thự cao cấp', 'user_id' => 1, 'city_id' => '1', 'district_id' => '4' ],
            ['title' => 'Cho thuê nhà chung cư', 'squared_id' => '1', 'detail_address' => 'số 15 đường Phạm Hùng', 'bedroom_id' => 2, 'bathroom_id' => 1, 'price_id' => '4', 'price' => '18000000' , 'category_id' => 1, 'status_id' => 1, 'description' => 'Căn hộ sang trọng', 'user_id' => 1, 'city_id' => '1', 'district_id' => '4' ]
        ]);
    }
}
