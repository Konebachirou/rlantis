<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class verifActive
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
        
        if(auth()->check() && (auth()->user()->active == 'false')){
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

             return redirect("/login")->with('message',"Votre compte n'est pas Activé par l'administrateur veuillez le contacter" );

        }
        return $next($request);
    }
}
