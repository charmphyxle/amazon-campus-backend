<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'index'])->name('admin.index');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['can:admin'])->group(function () {
        // Admin-only routes can be added here
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
