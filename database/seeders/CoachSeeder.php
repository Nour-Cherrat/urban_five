<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coaches')->insert([
            'id_user' => '2',
            'id_classe' => '1',
            'salaire' => '1000',
        ]);

        DB::table('coaches')->insert([
            'id_user' => '3',
            'id_classe' => '2',
            'salaire' => '2000',
        ]);

        DB::table('coaches')->insert([
            'id_user' => '4',
            'id_classe' => '3',
            'salaire' => '2000',
        ]);

    }
}
