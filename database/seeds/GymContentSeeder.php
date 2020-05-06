<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GymContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gym_contents')->insert([
            [
            'id' => 1,
            'gym_id' => 2,
            'user_id' => 2,
            'name' => 'test',
            'zip_code' => 1234567,
            'address' => 1,
            'address1' => '板橋区',
            'address2' => '栄町5-20-5',
            'lat' => 34.555,
            'lng' => 54.333,
            'summary' => '説明文',
            'detail' => '詳細文',
            'status' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
