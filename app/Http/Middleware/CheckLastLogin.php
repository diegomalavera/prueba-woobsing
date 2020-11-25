<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckLastLogin
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
            $now = Carbon::now();

            $user = Auth::user();

            $date = Carbon::parse($user->last_login_at);

            if($now->diffInHours($date) >= 23) {
                return redirect()->route('sesiones');
            }
        }

        return $next($request);
    }
}
