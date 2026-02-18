<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Employer;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check login User Admin role or not.
        if (auth()->check() && auth()->user()->role === 'admin'){
        return $next($request);
        }
        // If the not admin then redirect to home page with error message.
        return redirect('/')->with('error', 'Your are not Admin');

    }

}
