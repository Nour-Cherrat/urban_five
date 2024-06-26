<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_schedules')->insert([
            'id_classe' => 1,
            'jour' => 'Lundi',
            'start_time' => '08:01:00',
            'end_time' => '10:00:00',
        ]);

        DB::table('class_schedules')->insert([
            'id_classe' => 1,
            'jour' => 'Lundi',
            'start_time' => '15:01:00',
            'end_time' => '17:00:00',
        ]);

        DB::table('class_schedules')->insert([
            'id_classe' => 2,
            'jour' => 'Lundi',
            'start_time' => '13:00:00',
            'end_time' => '14:00:00',
        ]);

        DB::table('class_schedules')->insert([
            'id_classe' => 3,
            'jour' => 'Lundi',
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
        ]);

        DB::table('class_schedules')->insert([
            'id_classe' => 3,
            'jour' => 'Mardi',
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
        ]);

        DB::table('class_schedules')->insert([
            'id_classe' => 2,
            'jour' => 'Jeudi',
            'start_time' => '08:30:00',
            'end_time' => '10:00:00',
        ]);
    }
}
