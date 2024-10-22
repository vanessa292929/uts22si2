<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TkuesionerdetailSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('tkuesionerdetails')->insert([
                'kode_kuesioner_detail' => $faker->unique()->numerify('KD###'),
                'poin_kuesioner' => $faker->numberBetween(1, 5),
                'kode_kuesioner_perangkat' => $faker->randomElement(['KP001', 'KP002']),
                'kode_kuesioner' => 'K01',
            ]);
        }
    }
}
