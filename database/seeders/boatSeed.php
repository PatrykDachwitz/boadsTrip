<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class boatSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $boats = [];

        for ($i = 1; $i < 15; $i++) {
            $boats[] = [
                'name' => $faker->name(),
                'places_available' => rand(100, 690)
            ];
        }

        DB::table('boats')->insertOrIgnore($boats);

    }
}
