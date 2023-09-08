<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         *
         *  $table->string("first_name", 255);
            $table->string("second_name", 255);
            $table->integer("age", false);
            $table->string('email', 255);
            $table->integer("pesel_number", false);
            $table->integer('phone_number', false);

         */
        $faker = Factory::create();
        $clients = [];

        for ($i = 0; $i < 20; $i++) {
            $clients[] = [
                "email" => $faker->email(),
                "first_name" => $faker->firstName(),
                "second_name" => $faker->lastName(),
                "age" => rand(15, 70),
                "pesel_number" => rand(111111111, 999999999),
                "phone_number" => $faker->phoneNumber(),
            ];
        }

        DB::table('clients')->insertOrIgnore($clients);
    }
}
