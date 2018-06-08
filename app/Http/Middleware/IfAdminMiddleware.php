<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IfAdminMiddleware
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
        $user=Auth::user();
        if( (Auth::check()) && ($user->isSuperAdmin()) ){
            return $next($request);

        }else{
            return redirect()->back();
        }

    }
}
