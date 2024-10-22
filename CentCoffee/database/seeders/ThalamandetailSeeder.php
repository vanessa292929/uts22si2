<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ThalamandetailSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('halaman_detail')->insert([
                'kode_halaman_detail' => $i,
                'kode_otoritas' => 'OT' . str_pad($faker->numberBetween(1, 10), 3, '0', STR_PAD_LEFT),
                'kode_halaman' => 'HL' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),
                'status_halaman_detail' => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
