<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TmenuSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('menu')->insert([
                'kode_menu' => $i,
                'nama_menu' => $faker->word,
                'jenis_menu' => $faker->randomElement(['F', 'D']),
                'harga_menu' => $faker->numberBetween(10000, 100000),
                'deskripsi_menu' => $faker->sentence,
                'gambar_menu' => $faker->imageUrl(),
                'kode_pegawai' => 'PG' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
