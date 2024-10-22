<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TmenudetailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('menu_detail')->insert([
                'kode_menu_detail' => $i,
                'jumlah_bahan_baku_detail' => $faker->randomFloat(2, 1, 100),
                'kode_menu' => $faker->numberBetween(1, 50),
                'kode_bahan_baku' => 'BB' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
