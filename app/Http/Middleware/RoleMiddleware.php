<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role = null)
    {
        if ($role) {
            if (Auth::check() && Auth::user()->role === $role) {
                return $next($request);
            }

            return redirect('/unauthorized'); // Atau rute lain yang sesuai
        }

        return $next($request); // Jika tidak ada role yang diberikan, lanjutkan saja
    }
}