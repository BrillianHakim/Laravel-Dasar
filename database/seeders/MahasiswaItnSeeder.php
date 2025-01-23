<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class MahasiswaItnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1;$i<=10;$i++){
            DB::table('mahasiswa_itn')->insert([
                'nama' => $faker->name,
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Komputer dan Jaringan', 'Arsitektur dan Desain', 'Manajemen', 'Kedokteran', 'Psikologi', 'Ilmu Hukum', 'Pendidikan Guru', 'Psikologi Sosial']),
                'kelas' => $faker->randomElement(['A', 'B', 'C'])
            ]);
        }
    }
}
