<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contract_dumy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contracts = [
            [
                'Company_Name' => 'Test Company',
                'Reserviring_id' => 1,
                'Start_Date' => '2025-02-14',
                'End_Date' => '2025-02-14',
                'Status' => 'Active',
            ],
        ];

        foreach ($contracts as $contract) {
            \App\Models\Contract::create($contract);
        }
    }
}
