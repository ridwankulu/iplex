<?php

namespace App\Http\Middleware;
use Jenssegers\Agent\Agent;
use Closure;
use Illuminate\Support\Str;
use App\Setting;




class Decrypter extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
     
    
    public function handle($request, Closure $next, ...$guards)
    {
        
        return $next($request);

   }
}
