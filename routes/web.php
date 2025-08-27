<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTeamMemberController;
use App\Http\Controllers\Admin\AdminLogController; // کنترلر لاگ

// ----------------------
// Public Routes (Frontend)
// ----------------------
Route::group(['as' => 'public.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // مسیرهای تماس با ما
    Route::get('/contact', [ContactController::class, 'index'])->name('contact'); 
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit'); 
});

// ----------------------
// Authenticated Routes (Profile)
// ----------------------
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ----------------------
// Admin Routes
// ----------------------
Route::prefix('admin')
    ->middleware(['auth', 'verified'])
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::resource('services', AdminServiceController::class);
        Route::resource('portfolio', AdminPortfolioController::class);
        Route::resource('blog', AdminBlogController::class)->parameters(['blog' => 'post']);
        Route::resource('users', AdminUserController::class);
        Route::resource('categories', AdminCategoryController::class)->parameters(['categories' => 'category']);
        Route::resource('team-members', AdminTeamMemberController::class)->parameters(['team-members' => 'teamMember']);

        // مسیر مشاهده لاگ‌ها
        Route::get('logs', [AdminLogController::class, 'index'])->name('logs.index');
    });

// ----------------------
// General Dashboard Route
// ----------------------
Route::middleware(['auth', 'verified'])->get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// ----------------------
// Fallback (404)
// ----------------------
Route::fallback(function () {
    return view('pages.errors.404');
});
Route::get('/test-log', function () {
    \App\Helpers\AdminLogger::log('info', 'تست لاگ middleware');
    return 'Logged!';
});

// ----------------------
// Auth Routes (Breeze/Fortify)
// ----------------------
require __DIR__ . '/auth.php';
