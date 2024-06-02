<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdherentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adherents')->insert([
            'id_classe' => '1',
            'nom' => 'test',
            'prenom' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password2'),
            'tel' => '0987654321',
            'gender' => 'M',
            'date_inscription' => Carbon::createFromFormat('d-m-Y', '21-03-2024'),
            'statut' => 'Actif',
        ]);

        DB::table('adherents')->insert([
            'id_classe' => '1',
            'nom' => 'test2',
            'prenom' => 'test2',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password2'),
            'tel' => '0987654321',
            'gender' => 'M',
            'date_inscription' => Carbon::createFromFormat('d-m-Y', '21-04-2024'),
            'statut' => 'Actif',
        ]);

        DB::table('adherents')->insert([
            'id_classe' => '3',
            'nom' => 'test3',
            'prenom' => 'test3',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password2'),
            'tel' => '0987654321',
            'gender' => 'F',
            'date_inscription' => Carbon::createFromFormat('d-m-Y', '21-02-2024'),
            'statut' => 'Actif',
        ]);

        DB::table('adherents')->insert([
            'id_classe' => '2',
            'nom' => 'test4',
            'prenom' => 'test4',
            'email' => 'test@gmail.com',
            'password' => Hash::make('password2'),
            'tel' => '0987654321',
            'gender' => 'F',
            'date_inscription' => Carbon::createFromFormat('d-m-Y', '21-02-2024'),
            'statut' => 'Non-actif',
        ]);

    }
}
