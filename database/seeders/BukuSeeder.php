<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('buku')->insert([
                'judul' => $faker->sentence(3),
                'penulis' => $faker->name,
                'tahun_terbit' => $faker->year,
                'genre' => $faker->word,
            ]);
        }
    }
}
