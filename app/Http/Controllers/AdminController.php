<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
       
        $users = User::all();
        return view('admin.adduser', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,gebruiker',
        ],[
            'password.min' => 'Het wachtwoord moet minimaal 8 tekens bevatten.', 
        ]);

        try {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role'),
            ]);
            return redirect()->route('admin.adduser')->with('success', 'Gebruiker is aangemaakt.');
        } catch (\Exception $e) {
            return redirect()->route('admin.adduser')->with('error', 'Er is een fout opgetreden: ' . $e->getMessage());
        }
    }


    public function edit(User $user)
    {
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' =>'required|in:admin,gebruiker',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => $request->filled('password') ? Hash::make($request->input('password')) : $user->password,
        ]);

        return redirect()->route('admin.adduser')->with('success', 'Gebruiker is aangepast.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.adduser')->with('success', 'Gebruiker is verwijderd.');
    }
}