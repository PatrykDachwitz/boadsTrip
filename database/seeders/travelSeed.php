<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class travelSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $travels = [];

        for ($i = 0; $i < 20; $i++) {
            $travels[] = [
                "client_id" => rand(1, 15),
                "ocean_id" => rand(1, 15),
                "boat_id" => rand(1, 15),
                "available" => rand(0, 1),
            ];
        }

        DB::table('travels')->insertOrIgnore($travels);

    }
}
