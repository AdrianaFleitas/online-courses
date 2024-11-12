<?php
    use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CategoryController;

Route::post('/login', [AuthController::class, 'loginApi']);
    Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index']);
    Route::post('/courses/{courseId}/enroll', [CourseController::class, 'enrollUser']);
    Route::get('/categories/{id}/courses', [CategoryController::class, 'courses'],);
    Route::post('/courses/{courseId}/comment', [CourseController::class, 'addComment']);
    Route::post('/courses/{courseId}/like', [CourseController::class, 'likeCourse']);
    Route::post('/courses/{courseId}/unlike', [CourseController::class, 'unlikeCourse']);
    Route::get('/courses/search', [CourseController::class, 'search']);
    Route::post('/logout', [AuthController::class, 'logoutApi']);
});
