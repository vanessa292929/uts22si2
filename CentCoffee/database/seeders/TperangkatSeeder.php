<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TperangkatSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('perangkat')->insert([
                'kode_perangkat' => $faker->unique()->numerify('PR###'),
                'kata_sandi_perangkat' => bcrypt($faker->password),
                'nama_perangkat' => $faker->word(),
                'jumlah_kursi_perangkat' => $faker->randomDigit(),
                'status_perangkat' => $faker->boolean(),
            ]);
        }
    }
}
