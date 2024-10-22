<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TkuesionerSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            DB::table('kuesioner')->insert([
                'kode_kuesioner' => $faker->unique()->numerify('K##'),
                'judul_kuesioner' => $faker->sentence(4),
                'isi_kuesioner' => $faker->paragraph(),
                'tanggal_kuesioner' => $faker->date(),
                'waktu_kuesioner' => $faker->time(),
                'status_kuesioner' => $faker->boolean(),
                'kode_pegawai' => 'PG001',
            ]);
        }
    }
}
