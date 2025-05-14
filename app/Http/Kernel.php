<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * De globale HTTP-middleware stack.
     *
     * Deze middleware worden uitgevoerd bij **elke** HTTP-aanvraag naar je applicatie.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // Controleert of de applicatie in onderhoudsmodus staat
        \Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Controleert of de postgrootte limiet niet wordt overschreden
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Trimmen van strings in de request
        \App\Http\Middleware\TrimStrings::class,
        // Converteert lege strings naar null
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        // Behandelt vertrouwde proxies
        \Illuminate\Http\Middleware\TrustProxies::class,
    ];

    /**
     * De middleware groepen van de applicatie.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // Verhoogt de throttle rate limiting voor API-aanvragen
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * De route middleware van de applicatie.
     *
     * Deze middleware kunnen worden toegekend aan routes of groepen.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class, 
    ];
}
