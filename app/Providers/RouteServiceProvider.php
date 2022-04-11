<?php

namespace App\Providers;

use Lune\App;
use Lune\Routing\Route;

class RouteServiceProvider {
    /**
     * Load all routes defined in routes directory.
     *
     * @return void
     */
    public function registerServices() {
        Route::load(App::$ROOT . "/routes");
    }
}
