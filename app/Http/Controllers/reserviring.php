<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class reserviring extends Controller
{
    public function index()
    {
        $reservirings = DB::table('reserviring')->get();
        return view('reserviring', (['data' => $reservirings]));
    }

    public function create()
    {
        $kamers = DB::table('locals')->where("status", "active")->get();
        return view("reserviring.create", (["locals" => $kamers]));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string',
            'Start_Date' => 'required|date',
            'End_Date' => 'required|date',
            "status" => 'required|string'
        ]);

        try {

            DB::table("reserviring")->insert([
                'first_Name' => $request->input('First_Name'),
                'last_Name' => $request->input('Last_Name'),
                'start_Date' => $request->input('Start_Date'),
                'End_Date' => $request->input('End_Date'),
                'Status' => $request->input('status'),
                "local_id" => $request->input('local_id')
            ]);
            return redirect()->route('reserviring')->with('success', 'Gebruiker is aangemaakt.');
        } catch (\Exception $e) {
            return redirect()->route('reserviring.create')->with('error', 'Er is een fout opgetreden: ' . $e->getMessage());
        }

    }

    public function edit(Request $request)
    {
        $validatedData = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string',
            'Start_Date' => 'required|date',
            'End_Date' => 'required|date',
            "status" => 'required|string'
        ]);

        try {
            $reserviring = DB::table("reserviring")->find($request->id);
            $reserviring->first_Name = $request->input('First_Name');
            $reserviring->Last_Name = $request->input('Last_Name');
            $reserviring->Start_Date = $request->input('Start_Date');
            $reserviring->End_Date = $request->input('End_Date');
            $reserviring->status = $request->input('status');
            $reserviring->local_id = $request->input('local_id');
            $reserviring->save();

            return redirect()->route('reserviring')->with('success', 'Reservatie is aangemaakt.');
        } catch (\Exception $e) {
            return redirect()->route('reserviring.update')->with('error', 'Er is een fout opgetreden: ' . $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        $kamers = DB::table('locals')->where("status", "active")->get();
        $reservirings = DB::table('reserviring')->where('id', $request->id)->first();
        return view('reserviring.edit',(['reservation' => $reservirings,"locals" => $kamers]));

    }

    public function destroy($id)
    {
        try {
            DB::table('reserviring')->where('id', $id)->delete();
            return redirect()->route('reserviring')->with('success', 'Reservatie succesvol verwijderd.');
        } catch (\Exception $e) {
            return redirect()->route('reserviring')->with('error', 'Er is een fout opgetreden: ' . $e->getMessage());
        }
    }
}
