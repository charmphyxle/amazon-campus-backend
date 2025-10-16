<?php

use App\Http\Controllers\Api\AccreditationController as ApiAccreditationController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryController as ApiGalleryController;
use App\Http\Controllers\Api\NewsAndEventController as ApiNewsAndEventController;
use App\Http\Controllers\Api\TestimonialController as ApiTestimonialController;
use App\Http\Controllers\Api\VideoGalleryController as ApiVideoGalleryController;
use Illuminate\Support\Facades\Route;


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('news-and-events', ApiNewsAndEventController::class)->only('index');
Route::apiResource('galleries', ApiGalleryController::class)->only('index');
Route::apiResource('testimonials', ApiTestimonialController::class)->only('index');
Route::apiResource('accreditations', ApiAccreditationController::class)->only('index');
Route::apiResource('video-galleries', ApiVideoGalleryController::class)->only('index');
Route::post('/contact', [ContactController::class, 'sendMail']);

Route::middleware('auth:sanctum')->group(function () {  
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});
