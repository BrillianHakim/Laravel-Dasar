<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LatPaginationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1;$i<=20;$i++){
            DB::table('lat_pagination')->insert([
                'nama'=>$faker->name,
                'harga'=>$faker->numberBetween(1000,10000),
            ]);
        }
    }
}
