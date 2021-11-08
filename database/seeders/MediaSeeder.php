<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            ['home_id'=>1,'content' => 'https://mdesign.vn/wp-content/uploads/2019/07/50-Small-Studio-Apartment-5.jpg'],
            ['home_id'=>1,'content' => 'https://i.pinimg.com/originals/2c/bc/27/2cbc275c18e9ec9e305a3c00679502d5.jpg'],
            ['home_id'=>1,'content' => 'http://cdn.home-designing.com/wp-content/uploads/2019/01/Small-apartment-design.jpg'],
            ['home_id'=>1,'content' => 'https://thietkevanan.com/wp-content/uploads/2020/03/modern-house-design-1-892.jpg'],
            ['home_id'=>1,'content' => 'https://image.winudf.com/v2/image/Y29tLmhvdXNlLnBsYW4uZGVzaWduX3NjcmVlbl8wXzE1MzE4NDA4ODRfMDAy/screen-0.jpg?fakeurl=1&type=.jpg'],
        ]);
    }
}
