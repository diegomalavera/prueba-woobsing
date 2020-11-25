<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class CheckEmailVerified extends Middleware
{
    protected $except = [
        'verificacion',
        'logout',
    ];

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
            if (!$this->inExceptArray($request) && !$this->userIsVerified()) {
                return redirect()->route('verificacion');
            }
        }

        return $next($request);
    }

    public function userIsVerified()
    {
        $user = Auth::user();

        return $user->email_verified_at !== null;
    }
}
