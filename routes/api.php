<?php

use Lune\Routing\Route;

Route::get("/api", fn () => json(["message" => "Lune API"]));
