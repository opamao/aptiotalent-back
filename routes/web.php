<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

//Authentification
Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});
Route::get('email-verif', function () {
    return view('auth.email-verification');
});
Route::get('reset-password', function () {
    return view('auth.reset-password');
});
Route::get('change-success', function () {
    return view('auth.success');
});

// Admin entreprise, superadmin
Route::get('admin-dashboard', function () {
    return view('dashboard.entreprises.index');
});

//Profile
Route::get('profile', function () {
    return view('profile.profile');
});
Route::get('profile-settings', function () {
    return view('profile.profile-settings');
});


//Change Language
Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
