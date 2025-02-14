<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class contract_dumy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Contracts')->insert([
            'Company_Name' => 'Google',
            'Reserviring_id' => 1,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
        DB::table('Contracts')->insert([
            'Company_Name' => 'Facebook',
            'Reserviring_id' => 2,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
        DB::table('Contracts')->insert([
            'Company_Name' => 'Amazon',
            'Reserviring_id' => 3,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
        DB::table('Contracts')->insert([
            'Company_Name' => 'Microsoft',
            'Reserviring_id' => 4,
            'Start_Date' => '2025-02-14',
            'End_Date' => '2025-02-14',
            'Status' => 'Activo',
        ]);
    }
}
