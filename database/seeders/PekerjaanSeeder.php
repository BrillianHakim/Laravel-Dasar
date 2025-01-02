<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=15;$i++){
            DB::table('pekerjaan')->insert([
                'nama' => $faker->name,
                'nama_pekerjaan' => $faker->jobTitle,
                'deskripsi' => $faker->sentence,
            ]);

            }
        
    }
}
    

