<?php

use Illuminate\Support\Facades\Route;

$centralDomains = config('tenancy.central_domains', []);
if (is_array($centralDomains) || is_object($centralDomains)) {
    foreach ($centralDomains as $domain) {
        Route::domain($domain)->group(function () {
            // Central domain homepage
            Route::get('/', function () {
                return 'Welcome to the central homepage for ' . request()->getHost();
            });

            // Central domain dashboard
            Route::get('/riwekasan', function () {
                return 'Welcome to the dashboard for ' . request()->getHost();
            });
        });
    }
}
