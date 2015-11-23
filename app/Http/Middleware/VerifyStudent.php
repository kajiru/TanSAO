<?php

namespace TanSAO\Http\Middleware;

use Closure;
use Auth;

class VerifyStudent
{
    /**
     * Needs modification...
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){

            $UserStatus = Auth::user()->status;

            return $UserStatus == 4 ? redirect('/students/create') : $next($request);

        }else{

            return redirect("/auth/login");

        }
    }
}
