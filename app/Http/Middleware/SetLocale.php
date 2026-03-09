<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $segment = $request->segment(1);

        $locale = match($segment) {
            'ar'    => 'ar',
            'en'    => 'en',
            default => config('app.locale', 'en'),
        };

        app()->setLocale($locale);

        return $next($request);
    }
}