<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryController as ApiGalleryController;
use App\Http\Controllers\Api\NewsAndEventController as ApiNewsAndEventController;
use App\Http\Controllers\Api\TestimonialController as AdminTestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('news-and-events', ApiNewsAndEventController::class)->only('index');
Route::apiResource('galleries', ApiGalleryController::class)->only('index');
Route::apiResource('testimonials', AdminTestimonialController::class)->only('index');
Route::post('/contact', [ContactController::class, 'sendMail']);

Route::middleware('auth:sanctum')->group(function () {  
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});
