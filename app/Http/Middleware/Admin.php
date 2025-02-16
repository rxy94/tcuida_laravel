<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()->admin) {
            return $next($request);
        } else {
            return to_route("home");
        }
        /* if (Auth::check() && Auth::user()->admin) {
            return $next($request);
        }

        return redirect("/")->with("error", "No tienes permisos de administrador."); */

    }

}
