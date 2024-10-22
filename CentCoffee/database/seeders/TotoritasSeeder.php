<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TotoritasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('otoritas')->insert([
                'kode_otoritas' => $faker->unique()->numerify('OT###'),
                'nama_otoritas' => $faker->word(),
            ]);
        }
    }
}
