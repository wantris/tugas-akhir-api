<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DosensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 10) as $index) {
            DB::table('dosens')->insert([
                'nidn' => rand(0000000000, 9999999999),
                'nama_dosen' => $faker->name,
            ]);
        }
    }
}
