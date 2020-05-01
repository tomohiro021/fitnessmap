<?php

use Illuminate\Database\Seeder;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('gyms')->insert([
            [
            'id' => 1,
            'name' => '山田花子',
            'zip_code' => 1234567,
            'address1' => '東京都',
            'address2' => '品川区',
            'lat' => 2.0,
            'lng' => 3.0,
            'summary' => 'テストです',
            'detail' => 'テストです',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],//
        ]);
    }
}
