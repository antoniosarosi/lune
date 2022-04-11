<?php

use App\Controllers\HomeController;
use Lune\Auth\Auth;
use Lune\Routing\Route;

Auth::routes();

Route::get("/", fn () => view("welcome"));

Route::get("/home", [HomeController::class, "show"]);
