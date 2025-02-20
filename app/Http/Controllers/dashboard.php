<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function loadDashboard()
    {
        $reserviring = DB::table('Reserviring')->get();
        return view('dash')->with('data', $reserviring);
    }
}
