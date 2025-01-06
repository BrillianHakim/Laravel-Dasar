<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'jurusan' => $faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}
