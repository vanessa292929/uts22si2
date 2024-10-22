<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TbahanbakuSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('bahan_baku')->insert([
                'kode_bahan_baku' => 'BB' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_bahan_baku' => $faker->word,
                'stok_bahan_baku' => $faker->randomFloat(2, 1, 100),
                'satuan_bahan_baku' => $faker->randomElement(['kg', 'ltr', 'pcs']),
                'tanggal_kadaluarsa_bahan_baku' => $faker->date()
            ]);
        }
    }
}
