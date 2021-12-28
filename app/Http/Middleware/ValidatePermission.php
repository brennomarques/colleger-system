<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidatePermission
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
        // check session
        if(!session()->has('user')){
            return redirect()->route('accessPermission')->with('error', 'Você não esta logado!');
        }
        return $next($request);
    }
}
