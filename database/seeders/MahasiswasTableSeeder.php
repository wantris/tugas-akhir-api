<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 20) as $index) {
            DB::table('mahasiswas')->insert([
                'nim' => rand(11000000, 99999999),
                'nama' => $faker->name,
                'jurusan' => $faker->randomElement([
                    'Teknik Informatika',
                    'Teknik Mesin',
                    'Teknik Pendingin',
                    'Keperawatan',
                ]),
            ]);
        }
    }
}
