<?php

namespace App\Http\Middleware;

use Closure;

class SetLocaleFromParams
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
        $locale = $request->input('locale', \Config::get('constants.locale.en'));
        if (in_array($locale, \Config::get('constants.locale'), true)) {
            \App::setLocale($locale);
        }

        return $next($request);
    }
}
