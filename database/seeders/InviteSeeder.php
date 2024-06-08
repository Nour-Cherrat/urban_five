<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('invites')->insert([
            'id_classe' => '1',
            'nom' => 'invite',
            'prenom' => 'test2',
            'email' => 'test@gmail.com',
            'tel' => '0987654321',
            'gender' => 'M',
            'date' => Carbon::createFromFormat('d-m-Y', '21-04-2024'),
        ]);

        DB::table('invites')->insert([
            'id_classe' => '3',
            'nom' => 'invite',
            'prenom' => 'test3',
            'email' => 'test@gmail.com',
            'tel' => '0987654321',
            'gender' => 'F',
            'date' => Carbon::createFromFormat('d-m-Y', '21-02-2024'),
        ]);

        DB::table('invites')->insert([
            'id_classe' => '2',
            'nom' => 'invite',
            'prenom' => 'test4',
            'email' => 'test@gmail.com',
            'tel' => '0987654321',
            'gender' => 'F',
            'date' => Carbon::createFromFormat('d-m-Y', '21-02-2024'),
        ]);
    }
}
