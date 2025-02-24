<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\locals;

class KamersController extends Controller
{
    public function index(){
        $kamers = locals::all();
        return view('kamers.overzicht', compact('kamers'));
    }
    public function create()
    {
        return view('kamers.create');
    }

    // Slaat een nieuwe kamer op.
    public function store(Request $request){
        // Slaat een nieuwe kamer op.
        $request->validate([
            'num' => 'required|string|max:255|unique:locals,num',
            'type' => 'required|string|max:255',
            'max_people' => 'required|integer|min:1',
            'table' => 'required|string|max:255',
            'screen' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        // maak een nieuw kamer en sla deze op
        locals::create([
            'num' => $request->input('num'),
            'type' => $request->input('type'),
            'max_people' => $request->input('max_people'),
            'table' => $request->input('table'),
            'screen' => $request->input('screen'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('kamers.index')->with('succes', 'Kamer is succesvol toegevoegd!');
    }
    public function update(Request $request, $id){
        $request ->validate([
            'num' => 'required|string|max:255|unique:locals,num,' . $id,
            'type' => 'required|string|max:255',
            'max_people' => 'required|integer|min:1',
            'table' => 'required|string|max:255',
            'screen' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);
        $kamers = locals::findOrFail($id);
        $kamers->update($request->all());
        return redirect()->route('kamers.index')->with('succes', 'Kamer is succesvol bijgewerkt!');
        
    }
    public function edit($id){
        $kamer = locals::findOrFail($id);
        return view('kamers.edit', compact('kamer'));
    }
    public function destroy($id){
        $kamers = locals::findOrfail($id);
        $kamers->delete();
        return redirect()->route('kamers.index')->with('succes', 'Kamer is succesvol verwijderd!');
    }
}