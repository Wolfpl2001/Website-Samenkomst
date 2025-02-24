<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class locals_dumy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Locals')->insert([
            'Num' => 1,
            'Type' => 'Sala de reuniones',
            'Max_People' => 10,
            'Table' => 'U',
            'Screen' => 'Proyector',
            'Status' => 'Beschikbaar',
        ]);
        DB::table('Locals')->insert([
            'Num' => 2,
            'Type' => 'Sala de reuniones',
            'Max_People' => 10,
            'Table' => 'T',
            'Screen' => 'Proyector',
            'Status' => 'Beschikbaar',
        ]);
        DB::table('Locals')->insert([
            'Num' => 3,
            'Type' => 'Sala de reuniones',
            'Max_People' => 10,
            'Table' => 'Y',
            'Screen' => 'Proyector',
            'Status' => 'Beschikbaar',
        ]);
        DB::table('Locals')->insert([
            'Num' => 4,
            'Type' => 'Sala de reuniones',
            'Max_People' => 10,
            'Table' => 'Z',
            'Screen' => 'Proyector',
            'Status' => 'Beschikbaar',
        ]);
        
    }
}