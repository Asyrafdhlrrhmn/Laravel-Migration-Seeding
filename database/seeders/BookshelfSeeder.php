<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            [
                'code' => 'A01',
                'name' => 'Rak Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'A02',
                'name' => 'Rak Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'B01',
                'name' => 'Rak Novel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'B02',
                'name' => 'Rak Sejarah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}