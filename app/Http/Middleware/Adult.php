<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adult
{

    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('adult')) {
            return redirect()->route('index');
        }

        return $next($request);
    }
}
