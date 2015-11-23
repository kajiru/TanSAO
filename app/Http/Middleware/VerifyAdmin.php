<?php

namespace TanSAO\Http\Middleware;

use Auth;
use Closure;

class VerifyAdmin
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
        if(Auth::check()){

            if(Auth::user()->status != 0){
                return redirect('/');
            }

            return $next($request);

        }else{

            return redirect("/auth/login");

        }

    }



}
