<?php

namespace App\Http\Middleware;

use Closure;

class Profesor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(!$request->user()->isProfesor()){
            return redirect()->route('home')->with('mensaje','Esa zona solo es para Profesores, si quieres ser uno, contacta al administrador');;
        }

        return $next($request);
    }
}
