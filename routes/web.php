<?php

use Illuminate\Support\Facades\Route;

// $centralDomains = config('tenancy.central_domains', []);
// if (is_array($centralDomains) || is_object($centralDomains)) {
//     foreach ($centralDomains as $domain) {
//         Route::domain($domain)->group(function () {
//             // Central domain homepage
//             Route::get('/', function () {
//                 return 'Welcome to the central homepage for ' . request()->getHost();
//             });

//             // Central domain dashboard
//             Route::get('/dashboard', function () {
//                 return 'Welcome to the dashboard for ' . request()->getHost();
//             });
//         });
//     }
// }

// // Optionally, you can also add tenant-specific routes here as well
// $tenantDomains = config('tenancy.tenant_domains', []);
// if (is_array($tenantDomains) || is_object($tenantDomains)) {
//     foreach ($tenantDomains as $domain) {
//         Route::domain($domain)->group(function () {
//             Route::get('/tenant-dashboard', function () {
//                 return 'Welcome to the tenant-specific dashboard for ' . request()->getHost();
//             });
//         });
//     }
// }
