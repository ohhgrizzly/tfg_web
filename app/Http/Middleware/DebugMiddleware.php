<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DebugMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        Log::debug('El middleware DebugMiddleware se está ejecutando.');
        $prueba = 'Esto es una variable de prueba desde el middleware';
        \View::share('prueba', $prueba); // Compartir la variable con la vista
        dd('$prueba');

        return $next($request);
    }
}
