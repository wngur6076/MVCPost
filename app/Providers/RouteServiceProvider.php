<?php

namespace App\Providers;

use Eclair\Routing\Route;
use Eclair\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public static function register()
    {
        foreach ([ 'web', 'api' ] as $name) {
            require_once dirname(__DIR__, 2) . "/routes/{$name}.php";
        }
    }

    public static function boot()
    {
        Route::run();
    }
}