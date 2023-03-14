<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() !== null) {
            $rights = $request->user()->rights;
            if ($rights === 'admin') {
                return $next($request);
            } else {
                return redirect()->route("owners.list");
            }
        } else {
            return redirect()->route('login');
        }
    }
}




