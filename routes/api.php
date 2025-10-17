<?php

use App\Http\Controllers\Api\AccreditationController as ApiAccreditationController;
use App\Http\Controllers\Api\ApplicationFormController as ApiApplicationFormController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CalendarEventController as ApiCalendarEventController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryController as ApiGalleryController;
use App\Http\Controllers\Api\NewsAndEventController as ApiNewsAndEventController;
use App\Http\Controllers\Api\PosterController as ApiPosterController;
use App\Http\Controllers\Api\TestimonialController as ApiTestimonialController;
use App\Http\Controllers\Api\VideoGalleryController as ApiVideoGalleryController;
use App\Http\Controllers\Api\VideoTestimonialController as ApiVideoTestimonialController;
use Illuminate\Support\Facades\Route;


Route::apiResource('news-and-events', ApiNewsAndEventController::class)->only('index');
Route::apiResource('galleries', ApiGalleryController::class)->only('index');
Route::apiResource('testimonials', ApiTestimonialController::class)->only('index');
Route::apiResource('accreditations', ApiAccreditationController::class)->only('index');
Route::apiResource('video-galleries', ApiVideoGalleryController::class)->only('index');
Route::apiResource('video-testimonials', ApiVideoTestimonialController::class)->only('index');
Route::apiResource('posters', ApiPosterController::class)->only('index');
Route::apiResource('calendar-events', ApiCalendarEventController::class)->only('index');
Route::apiResource('application-forms', ApiApplicationFormController::class)->only('store');
Route::post('/contact', [ContactController::class, 'sendMail']);

// auth routes
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
// Route::middleware('auth:sanctum')->group(function () {  
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/profile', [AuthController::class, 'profile']);
// });
