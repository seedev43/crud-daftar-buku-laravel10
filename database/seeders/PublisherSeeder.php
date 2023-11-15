<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'Bentang Pustaka',
                'slug' => 'bentang-pustaka',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mizan Publishing',
                'slug' => 'mizan-publishing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gramedia',
                'slug' => 'gramedia',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
