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
    public function verlengtContract(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|integer|exists:contracts,id',
            ]);
            $contract = DB::table('contracts')
                ->where('id', $request->id)
                ->first();
    
            DB::table('contracts')
                ->where('id', $request->id)
                ->update([
                    'End_Date' => Carbon::parse($contract->End_Date)->addDays(365)
                ]);
    
            return redirect()->route('dashboard')->with('success', 'Contract is verlengt');
        } catch (\Exception $e) {
            return redirect()->route('dashboard')->with('error', 'There was an error: ' . $e->getMessage());
        }
    }
    
}
