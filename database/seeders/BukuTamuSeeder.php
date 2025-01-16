<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BukuTamuSeeder extends Seeder
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
            DB::table('buku_tamu')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'tujuan' => $faker->sentence(3),
                'waktu_kunjungan' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
