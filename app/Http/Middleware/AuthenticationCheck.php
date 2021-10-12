<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticationCheck
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

      if(session()->exists('auth') && !empty(session('auth'))){
        return $next($request);
      }else{
        return redirect()->route('login');
      }

    }
}
