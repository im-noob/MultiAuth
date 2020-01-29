<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class Admin2
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
        if(!Auth::check()){
            return new Response(view('login'));
        }

        if(Auth::user()->role == 1){
            return new Response(view('admin1'));
        }

        if (Auth::user()->role == 2){
            return new Response(view('admin2'));
        }

        if(Auth::user()->role == 3){
            return new Response(view('admin3'));
        }

        if(Auth::user()->role == 4){
            return new Response(view('admin4'));
        }

        if(Auth::user()->role == 5 ){
            return new Response(view('admin5'));
        }
        if(Auth::user()->role == 6){
            return new Response(view('admin6'));
        }

    }
}
