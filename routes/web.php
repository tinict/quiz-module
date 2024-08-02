<?php

use Illuminate\Support\Facades\Route;

/**
 * @description: Route default, return view -> default 'welcome page'
 */
// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * @description: Home page of Zeal Quiz
 */
Route::get('/', function () {
    return view('app/page');
});

/**
 * @description: Home page of Zeal Quiz
 */
Route::get('/profile', function () {
    return view('app/profile/page');
});
