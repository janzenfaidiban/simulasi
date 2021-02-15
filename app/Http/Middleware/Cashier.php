<?php

namespace App\Http\Middleware;

use Closure;

class Cashier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        if(in_array($request->user()->level, $roles)){
            return $next($request); 
        }
        return redirect('/login/moses/kilang');
    }
}
