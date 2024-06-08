<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            'libelle' => 'Cours 1',
            'num_salle' => '1',
        ]);

        DB::table('classes')->insert([
            'libelle' => 'Cours 2',
            'num_salle' => '2',
        ]);

        DB::table('classes')->insert([
            'libelle' => 'Cours 3',
            'num_salle' => '3',
        ]);
    }
}
