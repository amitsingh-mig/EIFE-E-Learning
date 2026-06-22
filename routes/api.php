<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Public Endpoints
Route::get('/courses/{id}/curriculum', [ApiController::class, 'getCurriculum']);
Route::get('/dashboard/events', [ApiController::class, 'getEvents']);
Route::get('/comments/{lesson_id}', [ApiController::class, 'getComments']);

// Protected Endpoints
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/progress/toggle', [ApiController::class, 'toggleLessonProgress']);
    Route::post('/comments', [ApiController::class, 'postComment']);
    Route::post('/comments/{id}/like', [ApiController::class, 'likeComment']);
});
