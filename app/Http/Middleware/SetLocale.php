<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1); // ambil locale dari URL (/id atau /en)

        if (!in_array($locale, ['id', 'en'])) {
            // deteksi lokasi user (misal pakai header locale browser)
            $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

            if ($browserLocale === 'id') {
                return redirect('/id');
            }

            return redirect('/en');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
