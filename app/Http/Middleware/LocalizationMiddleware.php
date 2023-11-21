<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the 'locale' session key is set
        if (Session::has('locale')) {
            // If set, use the stored locale
            App::setLocale(Session::get('locale'));
        } else {
            // If not set, use the default locale (in this case, 'en' for English)
            Session::put('locale', 'en');
            App::setLocale('en');
        }

        // Continue with the request
        return $next($request);
    }
}
