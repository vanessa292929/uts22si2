<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TpegawaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('pegawai')->insert([
                'kode_pegawai' => 'PG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'kata_sandi' => bcrypt('password'),
                'nama_pegawai' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'kode_otoritas' => 'OT' . str_pad($faker->numberBetween(1, 10), 3, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
