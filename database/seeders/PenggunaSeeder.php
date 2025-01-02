<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        for($i=1;$i<=10;$i++){
            DB::table('pengguna')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
            ]);
        }
    }
}
