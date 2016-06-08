<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Config;

class Language
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
        if (Session::has('language_code') && array_key_exists(Session::get('language_code'), Config::get('languages'))) {
            App::setLocale(Session::get('language_code'));
        }

        return $next($request);
    }
}
