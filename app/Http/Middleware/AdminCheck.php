<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check()) {
            
            if(Auth::user()->role == 'admin') {
                return $next($request); 
            }
            else {
                return redirect()->route('home');
                }
            } else {
                return redirect()->route('login');
            }
        return redirect()->route('home');
    }
}
