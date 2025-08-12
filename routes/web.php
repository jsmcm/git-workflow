<?php

use Illuminate\Support\Facades\Route;

Route::get("test", function() {
    $phpVersion = phpversion();
    $env = env('APP_ENV', 'unknown');
    echo "<p>php version: $phpVersion</p>";
    echo "<p>environment: $env</p>";
});

Route::get('/', function () {
    return view('welcome');
});
