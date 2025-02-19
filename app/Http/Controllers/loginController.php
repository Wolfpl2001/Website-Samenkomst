<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    //
    public function login() 
    {
        return view('auth.login'); 
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Controleren of de gebruiker bestaat
        $user = User::where('email', $request->input('email'))->first();
        if (!$user) {
            return back()->withErrors([
                'email' => 'Geen gebruiker gevonden met dit e-mailadres.',
            ]);
        }

        // proberen om in te loggen
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/welcome'); 
        }

        // als het mislukt wordt dit
        return back()->withErrors([
            'email' => 'De ingevoerde gegevens zijn onjuist.'
        ]);
}
}