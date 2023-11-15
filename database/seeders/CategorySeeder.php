<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Novel',
                'slug' => 'novel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Komik',
                'slug' => 'komik',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
