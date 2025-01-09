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

//error
Route::fallback(function () {
    return response()->view('errors.error-404', [], 404);
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

//Dashboard companie
Route::get('employee-dashboard', function () {
    return view('dashboard.entreprises.employee-dashboard');
});
Route::get('deals-dashboard', function () {
    return view('dashboard.entreprises.deals-dashboard');
});
Route::get('leads-dashboard', function () {
    return view('dashboard.entreprises.leads-dashboard');
});

// Chat & Call
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
Route::get('incoming-call', function () {
    return view('applications.incoming-call');
});
Route::get('call-history', function () {
    return view('applications.call-history');
});
Route::get('calendar', function () {
    return view('applications.calendar');
});

// Dashboard Super Admin
Route::get('dashboard', function () {
    return view('dashboard.superadmin.dashboard');
});
Route::get('companies', function () {
    return view('dashboard.superadmin.companies');
});
Route::get('subscription', function () {
    return view('dashboard.superadmin.subscription');
});
Route::get('packages', function () {
    return view('dashboard.superadmin.packages');
});
Route::get('packages-grid', function () {
    return view('dashboard.superadmin.packages-grid');
});
Route::get('domain', function () {
    return view('dashboard.superadmin.domain');
});
Route::get('purchase-transaction', function () {
    return view('dashboard.superadmin.purchase-transaction');
});

//CRM
Route::get('contacts-grid', function () {
    return view('crm.contacts.contacts');
});
Route::get('contact-details', function () {
    return view('crm.contacts.contact-details');
});
Route::get('companies-grid', function () {
    return view('crm.companies.companies-crm');
});
Route::get('company-details', function () {
    return view('crm.companies.company-details');
});
Route::get('deals-grid', function () {
    return view('crm.deals.deals');
});
Route::get('pipeline', function () {
    return view('crm.pipelines.pipeline');
});
Route::get('analytics', function () {
    return view('crm.analytics.analytics');
});
Route::get('activity', function () {
    return view('crm.activities.activity');
});

//Jobs
Route::get('job-grid', function () {
    return view('jobs.job-list');
});
Route::get('candidates-grid', function () {
    return view('jobs.candidates');
});

//Change Language
Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
