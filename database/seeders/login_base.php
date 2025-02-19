<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class login_base extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@smk.com',
            'password' => Hash::make('admin')
        ]); 
    }
}
