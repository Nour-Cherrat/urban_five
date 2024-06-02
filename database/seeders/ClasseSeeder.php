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
            'tarif' => '100',
        ]);

        DB::table('classes')->insert([
            'libelle' => 'Cours 2',
            'tarif' => '200',
        ]);

        DB::table('classes')->insert([
            'libelle' => 'Cours 3',
            'tarif' => '300',
        ]);
    }
}
