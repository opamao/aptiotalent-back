<?php

use Illuminate\Support\Facades\Route;

//Authentification
Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.login');
});
Route::get('forgot', function () {
    return view('auth.login');
});
Route::get('email-verif', function () {
    return view('auth.login');
});
Route::get('reset-password', function () {
    return view('auth.login');
});
Route::get('two-verif', function () {
    return view('auth.login');
});
Route::get('change-success', function () {
    return view('auth.login');
});
