<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class TpesananSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('pesanan')->insert([
                'kode_pesanan' => 'PS' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'tanggal_pesanan' => $faker->date(),
                'waktu_pesanan' => $faker->time(),
                'pembeli_pesanan' => $faker->name,
                'catatan_pesanan' => $faker->sentence,
                'status_pesanan' => $faker->randomElement(['C', 'P', 'T', 'D']),
                'kode_pegawai' => 'PG' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),
                'kode_perangkat' => 'PR' . str_pad($faker->numberBetween(1, 50), 3, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
