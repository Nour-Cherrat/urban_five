<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salles')->insert([
            'numSE' => '1',
            'nomSE' => 'Salle 1',
            'superficieSE' => '100',
        ]);

        DB::table('salles')->insert([
            'numSE' => '2',
            'nomSE' => 'Salle 2',
            'superficieSE' => '120',
        ]);

        DB::table('salles')->insert([
            'numSE' => '3',
            'nomSE' => 'Salle 3',
            'superficieSE' => '150',
        ]);
    }
}
