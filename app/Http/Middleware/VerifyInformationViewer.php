<?php

namespace TanSAO\Http\Middleware;

use Closure;

class VerifyInformationViewer
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

        //dd('Get viewer ID first');

        return $next($request);
    }
}
