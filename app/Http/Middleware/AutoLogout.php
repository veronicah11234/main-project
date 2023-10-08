<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $key = 'user-is-online-' . Auth::user()->id;
            Cache::put($key, true, now()->addMinutes(5)); // Set the cache key for 5 minutes (adjust as needed)
         // Set the cache key for 5 minutes (adjust as needed)
        }

        return $next($request);
    }
}
