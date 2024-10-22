<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TpemberitahuanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 30; $i++) {
            DB::table('pemberitahuan')->insert([
                'kode_pemberitahuan' => $faker->unique()->numerify('PN###'),
                'isi_pemberitahuan' => $faker->sentence(),
                'tanggal_pemberitahuan' => $faker->date(),
                'kode_pengingat' => $faker->numerify('PR###'),
            ]);
        }
    }
}
