<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // ambil id dari tabel lain
        $bookshelfIds = DB::table('bookshelves')->pluck('id')->toArray();
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        for ($i = 0; $i < 30; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'author' => $faker->name(),
                'year' => $faker->year(),
                'publisher' => $faker->company(),
                'city' => $faker->city(),
                'cover' => 'default.jpg',
                'bookshelf_id' => $faker->randomElement($bookshelfIds),
                'category_id' => $faker->randomElement($categoryIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}