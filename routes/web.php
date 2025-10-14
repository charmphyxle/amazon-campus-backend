<?php

use App\Http\Controllers\Admin\AccreditationController as AdminAccreditationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\NewsAndEventController as AdminNewsAndEventController;
use App\Http\Controllers\Admin\NewsLetterController as AdminNewsLetterController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\ApplicationFormController as AdminApplicationFormController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
});

//admin routes
Route::get('/', [BaseController::class, 'index'])->name('admin.index');
Route::delete('news-and-events/delete-item/{event_item}', [AdminNewsAndEventController::class, 'deleteEventItem'])->name('news-and-events.deleteEventItem');
Route::post('news-and-events/{news_and_event}/add-event-item', [AdminNewsAndEventController::class, 'addEventItem'])->name('news-and-events.addEventItem');
Route::resource('news-and-events', AdminNewsAndEventController::class);
Route::post('/gallery/add-images', [AdminGalleryController::class, 'addImages'])->name('gallery.addImages');
Route::delete('/gallery/{temp_image}/delete', [AdminGalleryController::class, 'deleteTempImage'])->name('gallery.deleteTempImage');
Route::delete('/gallery/{image}/delete-image', [AdminGalleryController::class, 'deleteImage'])->name('gallery.deleteImage');
Route::resource('gallery', AdminGalleryController::class)->except(['show']);
Route::resource('testimonials', AdminTestimonialController::class)->except(['show']);
Route::resource('accreditations', AdminAccreditationController::class)->except(['show']);
Route::resource('application-forms', AdminApplicationFormController::class)->only(['index', 'show', 'destroy']);
Route::resource('news-letters', AdminNewsLetterController::class)->only(['index']);

Route::middleware(['auth'])->group(function () {
    Route::middleware(['can:admin'])->group(function () {
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
