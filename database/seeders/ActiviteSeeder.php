<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activites')->insert([
            'libelle' => 'Activite 1',
            'description' => 'desc test',
            'statut' => 'Actif',
            'type' => 'Individuelle',
        ]);

        DB::table('activites')->insert([
            'libelle' => 'Activite 2',
            'description' => 'desc test',
            'statut' => 'Non-actif',
            'type' => 'Collective',
        ]);

        DB::table('activites')->insert([
            'libelle' => 'Activite 3',
            'description' => 'desc test',
            'statut' => 'Actif',
            'type' => 'Individuelle',
        ]);

        DB::table('activites')->insert([
            'libelle' => 'Activite 4',
            'description' => 'desc test',
            'statut' => 'Actif',
            'type' => 'Collective',
        ]);
    }
}
