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
Route::get('employee-dashboard', function () {
    return view('dashboard.entreprises.employee-dashboard');
});
Route::get('deals-dashboard', function () {
    return view('dashboard.entreprises.deals-dashboard');
});
Route::get('leads-dashboard', function () {
    return view('dashboard.entreprises.leads-dashboard');
});
Route::get('chat', function () {
    return view('applications.chat');
});
Route::get('voice-call', function () {
    return view('applications.voice-call');
});
Route::get('video-call', function () {
    return view('applications.video-call');
});
Route::get('outgoing-call', function () {
    return view('applications.outgoing-call');
});


//Change Language
Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
