<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {

            $angkatan = rand(21,25);

            $npm = "55201".$angkatan.str_pad($i,3,'0',STR_PAD_LEFT);

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => $faker->userName(),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
