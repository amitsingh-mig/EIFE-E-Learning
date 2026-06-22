<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;

// ---------- Home ----------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index.html', fn() => redirect()->route('home'));

// ---------- University Detail Pages ----------
Route::get('/spbu', [UniversityController::class, 'spbu'])->name('spbu');
Route::get('/spbu.html', fn() => redirect()->route('spbu'));

Route::get('/gnc', [UniversityController::class, 'gnc'])->name('gnc');
Route::get('/gnc.html', fn() => redirect()->route('gnc'));

// ---------- Course Catalog (with GET filters) ----------
Route::get('/unistry', [UniversityController::class, 'catalog'])->name('unistry');
Route::get('/unistry.html', fn() => redirect()->route('unistry'));

// ---------- Course Detail (?id=slug) ----------
Route::get('/view_course', [CourseController::class, 'show'])->name('view_course');
Route::get('/learning', fn() => view('pages.learning'))->name('learning');

// ---------- Student Dashboard ----------
Route::get('/dashboard_student', fn() => view('user.dashboard_student'))->name('dashboard');
Route::get('/dashboard_student.html', fn() => redirect()->route('dashboard'));

use App\Http\Controllers\GoogleAuthController;

// ---------- Auth ----------
Route::get('/login', fn() => view('user.login'))->name('login');
Route::get('/login.html', fn() => redirect()->route('login'));

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------- Google Auth ----------
Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);

// ---------- Admin ----------
Route::get('/admin', fn() => view('admin.dashboard'))->name('admin.dashboard');
Route::get('/admin.html', fn() => redirect()->route('admin.dashboard'));

// ---------- API Routes for Frontend JS (Using Web Middleware) ----------
Route::get('/api/courses/{id}/curriculum', [ApiController::class, 'getCurriculum']);
Route::get('/api/dashboard/events', [ApiController::class, 'getEvents']);
Route::get('/api/comments/{lesson_id}', [ApiController::class, 'getComments']);

Route::middleware('auth')->group(function () {
    Route::post('/api/progress/toggle', [ApiController::class, 'toggleLessonProgress']);
    Route::post('/api/comments', [ApiController::class, 'postComment']);
    Route::post('/api/comments/{id}/like', [ApiController::class, 'likeComment']);
});
