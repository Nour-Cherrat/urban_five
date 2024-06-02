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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nom' => 'Cherrat',
            'prenom' => 'Nour',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Admin',
        ]);
    }
}
