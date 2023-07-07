<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SoloUser
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
                return redirect('admin');//si es administrador redirige al HOME
            break;
			case('2'):
                return $next($request);// si es un usuario continua ruta USER
			break;	
        }
    }
}
