<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Het pad naar de "home"-route voor je applicatie.
     *
     * Meestal wordt gebruikers hierheen omgeleid na login.
     *
     * @var string
     */
    public const HOME = '/redirect';

    /**
     * Hier kun je route model bindings, patroonfilters, enz. definiëren.
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
