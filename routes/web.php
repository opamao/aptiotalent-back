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
Route::get('security-settings', function () {
    return view('profile.security-settings');
});
Route::get('notification-settings', function () {
    return view('profile.notification-settings');
});
Route::get('connected-apps', function () {
    return view('profile.connected-apps');
});
Route::get('bussiness-settings', function () {
    return view('profile.bussiness-settings');
});
Route::get('seo-settings', function () {
    return view('profile.seo-settings');
});
Route::get('prefixes', function () {
    return view('profile.prefixes');
});
Route::get('preferences', function () {
    return view('profile.preferences');
});
Route::get('currencies', function () {
    return view('profile.currencies');
});
Route::get('tax-rates', function () {
    return view('profile.tax-rates');
});
Route::get('payment-gateways', function () {
    return view('profile.payment-gateways');
});
Route::get('sms-settings', function () {
    return view('profile.sms-settings');
});
Route::get('sms-template', function () {
    return view('profile.sms-template');
});
Route::get('email-template', function () {
    return view('profile.email-template');
});
Route::get('email-settings', function () {
    return view('profile.email-settings');
});
Route::get('leave-type', function () {
    return view('profile.leave-type');
});
Route::get('job-category', function () {
    return view('profile.job-category');
});
Route::get('job-type', function () {
    return view('profile.job-type');
});
Route::get('job-level', function () {
    return view('profile.job-level');
});
Route::get('job-experience', function () {
    return view('profile.job-experience');
});
Route::get('job-qualification', function () {
    return view('profile.job-qualification');
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
    return view('crm.contacts');
});
Route::get('contact-details', function () {
    return view('crm.contact-details');
});
Route::get('companies-grid', function () {
    return view('crm.companies-crm');
});
Route::get('company-details', function () {
    return view('crm.company-details');
});
Route::get('deals-grid', function () {
    return view('crm.deals');
});
Route::get('pipeline', function () {
    return view('crm.pipeline');
});
Route::get('analytics', function () {
    return view('crm.analytics');
});
Route::get('activity', function () {
    return view('crm.activity');
});

//Jobs
Route::get('job-grid', function () {
    return view('jobs.job-list');
});
Route::get('candidates-grid', function () {
    return view('jobs.candidates');
});

//Assets
Route::get('assetes', function () {
    return view('assets.assets');
});
Route::get('asset-categories', function () {
    return view('assets.asset-categories');
});

//Users Management
Route::get('users', function () {
    return view('roles.users');
});
Route::get('roles-permissions', function () {
    return view('roles.roles-permissions');
});

//Repports
Route::get('expenses-report', function () {
    return view('reports.expenses-report');
});
Route::get('invoice-report', function () {
    return view('reports.invoice-report');
});
Route::get('payment-report', function () {
    return view('reports.payment-report');
});
Route::get('user-report', function () {
    return view('reports.user-report');
});
Route::get('employee-report', function () {
    return view('reports.employee-report');
});
Route::get('payslip-report', function () {
    return view('reports.payslip-report');
});

//Blogs
Route::get('blogs', function () {
    return view('blogs.blogs');
});
Route::get('blog-categories', function () {
    return view('blogs.blog-categories');
});
Route::get('blog-comments', function () {
    return view('blogs.blog-comments');
});
Route::get('blog-tags', function () {
    return view('blogs.blog-tags');
});

//FAQs
Route::get('faq', function () {
    return view('faqs.faq');
});

//Terms
Route::get('pricing', function () {
    return view('terms.pricing');
});
Route::get('privacy-policy', function () {
    return view('terms.privacy-policy');
});
Route::get('terms-condition', function () {
    return view('terms.terms-condition');
});

//Change Language
Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
