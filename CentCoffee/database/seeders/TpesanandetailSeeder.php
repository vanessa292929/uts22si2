<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TpesanandetailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('pesanan_detail')->insert([
                'kode_pesanan_detil' => $i,
                'jumlah_pesanan_detil' => $faker->numberBetween(1, 10),
                'status_pesanan_detil' => $faker->randomElement(['P', 'D']),
                'kode_pesanan' => $faker->numberBetween(1, 50),
                'kode_menu' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
