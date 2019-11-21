<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $role){
         if (! $request->user()->hasRole($role)) {
            /* return redirect('home'); */
              abort(403, 'No posees permisos para acceder a este contenido. Por favor, contacta al administrador del sistema');
         }
     return $next($request);
     }
}
