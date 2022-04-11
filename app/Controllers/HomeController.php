<?php

namespace App\Controllers;

use App\Middlewares\AuthMiddleware;
use Lune\Http\Controller;

class HomeController extends Controller {
    /**
     * Register middlewares.
     */
    public function __construct() {
        $this->middlewares([AuthMiddleware::class]);
    }

    /**
     * Home page.
     */
    public function show() {
        return view("home");
    }
}
