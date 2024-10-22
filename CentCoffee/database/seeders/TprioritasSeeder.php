<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TprioritasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('prioritas')->insert([
                'kode_prioritas' => $faker->unique()->numerify('PR###'),
                'nama_prioritas' => $faker->word(),
            ]);
        }
    }
}
