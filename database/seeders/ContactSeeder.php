<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nom' => 'test',
            'email' => 'test@gmail.com',
            'objet' => 'test objt',
            'msg' => 'test message',
        ]);

        DB::table('contacts')->insert([
            'nom' => 'test 2',
            'email' => 'test2@gmail.com',
            'objet' => 'test objt 2',
            'msg' => 'test message 2',
        ]);

        DB::table('contacts')->insert([
            'nom' => 'test 3',
            'email' => 'test3@gmail.com',
            'objet' => 'test objt 3',
            'msg' => 'test message 3',
        ]);
    }
}
