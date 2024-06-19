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
            'nom' => 'EL AIDER',
            'prenom' => 'FAIZA',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Admin',
        ]);

        DB::table('users')->insert([
            'nom' => 'coach1',
            'prenom' => 'coach1',
            'email' => 'coach@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Coach',
        ]);

        DB::table('users')->insert([
            'nom' => 'coach2',
            'prenom' => 'coach2',
            'email' => 'coache@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Coach',
        ]);

        DB::table('users')->insert([
            'nom' => 'coach3',
            'prenom' => 'coach3',
            'email' => 'coachee@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Coach',
        ]);

        DB::table('users')->insert([
            'nom' => 'coach4',
            'prenom' => 'coach4',
            'email' => 'coacheee@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Coach',
        ]);

        DB::table('users')->insert([
            'nom' => 'adherent 1',
            'prenom' => 'adherent 1',
            'email' => 'adherent@gmail.com',
            'password' => Hash::make('password'),
            'tel' => '0643219875',
            'type' => 'Adherent',
        ]);
    }
}
