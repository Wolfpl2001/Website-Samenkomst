<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reserviring extends Controller
{
    public function index()
    {
        $reservirings = DB::table('reserviring')->get();
        return view('reserviring')->with('data', $reservirings);
    }

    public function create()
    {
        return view("reserviring.create");
    }
    public function store(request $request)
    {
        $validatedData = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string',
            'Start_Date' => 'required|date',
            'End_Date' => 'required|',
        ]);

        try {
            reserviring::create([
                'First_Name' => $request->input('First_Name'),
                'Last_Name' => $request->input('Last_Name'),
                'Start_Date' => $request->input('Start_Date'),
                'End_Date' => $request->input('End_Date'),
            ]);
            return redirect()->route('reserviring.create')->with('success', 'Gebruiker is aangemaakt.');
        } catch (\Exception $e) {
            return redirect()->route('reserviring.create')->with('error', 'Er is een fout opgetreden: ' . $e->getMessage());
        }

    }

    public function update(){

    }
}
