<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Carbon\Carbon;

class LastLogin
{
    public function handle(Login $event)
    {
        $event->user->last_login_at = Carbon::now()->toDateTimeString();

        $event->user->save();
    }
}
