<?php

namespace Database\Seeders;
http://127.0.0.1:8000/dashboard
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
                'name' => 'Faizal Aji',
                'email' => 'faizal@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 'admin',
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 'admin',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
