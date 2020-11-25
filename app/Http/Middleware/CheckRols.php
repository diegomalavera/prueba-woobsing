<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cookie;

class CheckRols
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            $rol = $user->rols;

            if ($rol && $rol->id == 1 && $request->ip() == '127.0.0.1') {

                Cookie::queue('origin_sesion', true);
            }
        }

        return $next($request);
    }
}
