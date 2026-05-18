<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@eletter.com',
                'password' => Hash::make('password'),
                'role_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@eletter.com',
                'password' => Hash::make('password'),
                'role_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dosen',
                'email' => 'dosen@eletter.com',
                'password' => Hash::make('password'),
                'role_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@eletter.com',
                'password' => Hash::make('password'),
                'role_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}