<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name' => 'Hà Huy Cường',
           'email' => 'hahuycuong1002@gmail.com',
           'password' => Hash::make('123456'),
           'phone' =>'0348400246'
       ]);
    }
}
