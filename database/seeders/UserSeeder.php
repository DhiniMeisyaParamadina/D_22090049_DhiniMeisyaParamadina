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
                'name' => 'Dini',
                'email' => 'dhinimeisya04@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 'admin',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
