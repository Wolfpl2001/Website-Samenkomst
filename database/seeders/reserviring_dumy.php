<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class reserviring_dumy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Reserviring')->insert([
            'First_Name' => 'Juan',
            'Last_name' => 'Perez',
            'Local_id' => 1,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
        DB::table('Reserviring')->insert([
            'First_Name' => 'Pedro',
            'Last_name' => 'Gomez',
            'Local_id' => 2,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
        DB::table('Reserviring')->insert([
            'First_Name' => 'Maria',
            'Last_name' => 'Lopez',
            'Local_id' => 3,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
    }
}
