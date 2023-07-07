<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return $next($request);//si es administrador continua al HOME
            break;
			case('2'):
                return redirect('users');// si es un usuario normal redirige a la ruta USER
			break;
        }
    }
}