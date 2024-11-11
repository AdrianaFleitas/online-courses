<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if (auth()->$user->hasRole('admin')) {
            # if user role is equal to 1 allow them to access admin routes, else ridirect to page 404
            return $next($request);
        }
        return redirect('/404')->with('fail','you have no access');
    }
}
