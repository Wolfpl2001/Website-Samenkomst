<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function loadDashboard()
    {
        try {
            $reserviring = DB::table('Reserviring')->get();

            $today = Carbon::today();

            $nearExpiryDate = $today->copy()->addDays(30);

            $contract = DB::table('contracts')
                ->whereBetween('End_Date', [$today, $nearExpiryDate])
                ->get();

            return view('dash', ['data' => $reserviring, 'contract' => $contract]);
        } catch (\Exception $e) {
            return redirect()->route('dashboard')->with('error', 'ther was en error: ' . $e->getMessage());
        }
    }
}
