<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Andrea Hirata',
                'slug' => 'andrea-hirata',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dee Lestari',
                'slug' => 'dee-lestari',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tere Liye',
                'slug' => 'tere-liye',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
