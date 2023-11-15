<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Ahmad Dzaky',
                'username' => 'dzakym43',
                'email' => 'dzakymustain43@gmail.com',
                'password' => Hash::make('bandon12'),
                'level' => 'admin'
            ],
            [
                'name' => 'Akun User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('user'),
                'level' => 'user'
            ]
        ]);
    }
}
