<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MainController extends Controller
{

    public function verify()
    {
        $user = Auth::user();

        $user->email_verified_at = Carbon::now()->toDateTimeString();

        $user->save();

        return redirect()->route('dashboard');
    }
}
