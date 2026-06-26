<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebContentController;

Route::get('/', function () {
    return view('tenants.admin.dashboard');
})->name('dashboard');

Route::get('/appointments', function () {
    return view('tenants.admin.appointments');
})->name('appointments.index');

Route::get('/patients', function () {
    return view('tenants.admin.patients');
})->name('patients.index');

Route::get('/users', function () {
    return view('tenants.admin.users');
})->name('users.index');

Route::get('/doctors', function () {
    return view('tenants.admin.doctors');
})->name('doctors.index');

Route::get('/settings/content', function () {
    return view('tenants.admin.page_content_settings');
})->name('content.settings');

Route::put('/settings/content/{key}',
    [WebContentController::class, 'update']
)->name('tenant.content.update');

Route::get('/settings/theme', function () {
    return view('tenants.admin.theme.settings');
})->name('theme.settings');
