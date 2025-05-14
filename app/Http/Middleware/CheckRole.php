<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Controleer of de gebruiker ingelogd is en of de rol overeenkomt
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Als de gebruiker niet de juiste rol heeft, abort met een 403
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
