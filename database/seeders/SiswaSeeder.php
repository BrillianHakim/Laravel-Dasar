<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
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
        DB::table('siswa')->insert([
            'nama' => $faker->name,
            'kelas' => $faker->randomElement(['10', '11', '12']),
            'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $faker->address,
            'tanggal_lahir' => $faker->date('Y-m-d', '2005-12-31'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
