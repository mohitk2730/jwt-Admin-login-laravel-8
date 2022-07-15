<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'username' => 'Admin',
                'email_verified_at' => now(),
                'password' => '$2y$10$jradsteGeEQOcldE2LiQ7.Q6u8QHzz.Y4tnD/0nafGe0gmprIy9uW', // password 123456789
                'remember_token' => 'Y4tnD/0nafGe0gmprIy9uW',
                'role_type'=>"1"
            ],
        );
        DB::table('users')->insert(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'username' => 'user',
                'phone' => '905297565',
                'email_verified_at' => now(),
                'password' => '$2y$10$jradsteGeEQOcldE2LiQ7.Q6u8QHzz.Y4tnD/0nafGe0gmprIy9uW', // password 123456789
                'remember_token' => 'Y4tnD/0nafGe0gmprIy9uW',
                'role_type'=>"2"
            ],
        );
    }
}
