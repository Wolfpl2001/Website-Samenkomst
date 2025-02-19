<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

<<<<<<< Updated upstream:app/Http/Middleware/Admin.php
class admin
=======
class CheckAdmin
>>>>>>> Stashed changes:app/Http/Middleware/CheckAdmin.php
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
<<<<<<< Updated upstream:app/Http/Middleware/Admin.php
        return $next($request);
=======
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }
        return redirect('/login')->withErrors('Je hebt geen toegang tot deze pagina.');
>>>>>>> Stashed changes:app/Http/Middleware/CheckAdmin.php
    }
}
