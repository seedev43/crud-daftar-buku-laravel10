<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publication_years')->insert([
            [
                'year' => '2011',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'year' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'year' => '2016',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
