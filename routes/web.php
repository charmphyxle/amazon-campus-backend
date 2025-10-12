<?php

use App\Http\Controllers\Admin\AccreditationController as AdminAccreditationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\NewsAndEventController as AdminNewsAndEventController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

//admin routes
Route::get('/', [BaseController::class, 'index'])->name('admin.index');
Route::resource('news-and-events', AdminNewsAndEventController::class);
Route::post('/gallery/add-images', [AdminGalleryController::class, 'addImages'])->name('gallery.addImages');
Route::delete('/gallery/{temp_image}/delete', [AdminGalleryController::class, 'deleteTempImage'])->name('gallery.deleteTempImage');
Route::delete('/gallery/{image}/delete-image', [AdminGalleryController::class, 'deleteImage'])->name('gallery.deleteImage');
Route::resource('gallery', AdminGalleryController::class)->except(['show']);
Route::resource('testimonials', AdminTestimonialController::class)->except(['show']);
Route::resource('accreditations', AdminAccreditationController::class)->except(['show']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['can:admin'])->group(function () {
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
