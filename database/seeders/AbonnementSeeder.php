<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonnementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abonnements')->insert([
            'id_cours' => '1',
            'duree' => '1 Mois',
            'tarif' => '100',
            'description' => 'test desc',
        ]);

        DB::table('abonnements')->insert([
            'id_cours' => '3',
            'duree' => '1 Mois',
            'tarif' => '300',
            'description' => 'test desc',
        ]);

        DB::table('abonnements')->insert([
            'id_cours' => '1',
            'duree' => '1 An',
            'tarif' => '1000',
            'description' => 'test desc',
        ]);

        DB::table('abonnements')->insert([
            'id_cours' => '2',
            'duree' => '1 Mois',
            'tarif' => '150',
            'description' => 'test desc',
        ]);

        DB::table('abonnements')->insert([
            'id_cours' => '3',
            'duree' => '3 Mois',
            'tarif' => '500',
            'description' => 'test desc',
        ]);

        DB::table('abonnements')->insert([
            'id_cours' => '1',
            'duree' => '3 Mois',
            'tarif' => '300',
            'description' => 'test desc',
        ]);
    }
}
