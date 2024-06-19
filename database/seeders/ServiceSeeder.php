<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'libelle' => 'Service 1',
            'description' => 'desc service',
        ]);

        DB::table('services')->insert([
            'libelle' => 'Service 2',
            'description' => 'desc service',
        ]);

        DB::table('services')->insert([
            'libelle' => 'Service 3',
            'description' => 'desc service',
        ]);
    }
}
