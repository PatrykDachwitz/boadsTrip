<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class oceanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $oceans = [];

        for ($i = 1; $i < 15; $i++) {
            $oceans[] = [
                'name' => $faker->name()
            ];
        }

        DB::table('oceans')->insertOrIgnore($oceans);
    }
}
