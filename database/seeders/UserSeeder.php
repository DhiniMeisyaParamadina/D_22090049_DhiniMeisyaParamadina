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
        $users = [
            [
                'name' => 'Muhammad Ega Rama Fernanda',
                'email' => 'egaram32@gmail.com',
                'password' => Hash::make('ega123'),
                'level' => 'admin',
            ],
            [
                'name' => 'Alfi Surya Pratama',
                'email' => 'alfisuryap7@gmail.com',
                'password' => Hash::make('surya123'),
                'level' => 'admin',
            ],
            [
                'name' => 'Andhito Galih ',
                'email' => 'andhito@gmail.com',
                'password' => Hash::make('andhito123'),
                'level' => 'admin',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
