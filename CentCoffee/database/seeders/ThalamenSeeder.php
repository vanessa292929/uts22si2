<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ThalamenSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('halaman')->insert([
                'kode_halaman' => 'HL' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'nama_halaman' => $faker->word,
                'ikon_halaman' => $faker->word . '-icon',
                'urutan_halaman' => $faker->numberBetween(1, 50)
            ]);
        }
    }
}
