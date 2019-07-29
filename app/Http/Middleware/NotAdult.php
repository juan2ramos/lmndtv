<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NotAdult
{

    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('adult')) {
            return redirect()->route('choose.night');
        }

        return $next($request);
    }
}
