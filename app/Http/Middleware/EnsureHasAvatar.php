<?php

namespace App\Http\Middleware;

use Closure;

class EnsureHasAvatar
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
        if(auth()->check() && empty( auth()->user()->media_id) ) return redirect('/')->with('error',trans('app.update_profile_picture'));
         return $next($request);
    }
}
