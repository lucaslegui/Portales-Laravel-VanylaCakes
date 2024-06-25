<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)   $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $usuario = auth()->user();
        if ($usuario && $usuario->rol === 'admin') {
            session()->put('admin-check', true);
            return $next($request);
        }

        return redirect('/')->with('error', 'No tienes permiso para acceder a esta página.');

    }
}
