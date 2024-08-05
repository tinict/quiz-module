<?php

use Illuminate\Support\Facades\Route;

Route::get('/version', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/', function () {
    return view('app'.'/page');
});

Route::get('/forms', function () {
    return view('app/forms'.'/page');
});

require __DIR__.'/auth.php';
require __DIR__.'/test.php';
