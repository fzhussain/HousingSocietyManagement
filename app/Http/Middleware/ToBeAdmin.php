<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToBeAdmin
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
        # Allow only if the user is admin or id matches
        $user = Auth::user();
        if ($user->admin == 1) {
            return $next($request);
        }

        return response('Unauthorized.', 401);
    }
}
