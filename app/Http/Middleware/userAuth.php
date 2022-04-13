<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role == 'user') {
            Log::info('User is authorized to access this page');
            return $next($request);
        } elseif (auth()->user()->role == 'teacher') {
            Log::info('User is authorized as a teacher');
            return redirect()->route('teacher.dashboard');
        } elseif (auth()->user()->role == 'principal') {
            Log::info('User is authorized as a principal');
            return redirect()->route('principal.dashboard');
        } elseif (auth()->user()->role == 'admin') {
            Log::info('User is authorized as an admin');
            return redirect()->route('admin.dashboard');
        }
    }
}
