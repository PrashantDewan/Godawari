<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Admin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isRole == 1) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}