<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContadorAuth
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
       /** verificando si el usuario contador inicia la sesión */
       if(auth()->check()){
        if(auth()->user()->role == 'contador') {
            return $next($request);
        }
    }
    return redirect()->to('/');//sino inicia, lleva a la ruta del login
    }
}
