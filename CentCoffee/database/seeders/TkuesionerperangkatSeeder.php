<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TkuesionerperangkatSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('tkuesionerperangkats')->insert([
                'kode_kuesioner_perangkat' => $faker->unique()->numerify('KP###'),
                'pembeli_kuesioner_perangkat' => $faker->name(),
                'pesan_kuesioner_perangkat' => $faker->sentence(),
                'tanggal_kuesioner_perangkat' => $faker->date(),
                'waktu_kuesioner_perangkat' => $faker->time(),
                'status_kuesioner_perangkat' => $faker->boolean(),
                'kode_perangkat' => 'PR001',
            ]);
        }
    }
}
