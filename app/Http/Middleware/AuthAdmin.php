<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdmin
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
       if (\Illuminate\Support\Facades\Auth::id() !== 1){
           return redirect('access_denied');
        }

        return $next($request);
    }
}
