<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminPortfolioController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminUserController;
use Illuminate\Support\Facades\Route;

// -------------------- Public Routes --------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// مسیرهای login/register/logout از auth.php پابلیک هستن
require __DIR__.'/auth.php';

// -------------------- بعد از لاگین --------------------
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->is_admin) {
            // ادمین → بره به پنل ادمین
            return redirect()->route('admin.dashboard');
        }
        // کاربر معمولی → بره پروفایل یا صفحه اصلی
        return redirect()->route('profile.edit');
    })->name('dashboard');

    // پروفایل برای همه کاربرا
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// -------------------- Admin Routes --------------------
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->is_admin) {
            return app(AdminController::class)->dashboard();
        }
        return redirect('/')->with('error', 'شما دسترسی به پنل ادمین ندارید!');
    })->name('admin.dashboard');

    // بقیه‌ی مسیرهای ادمین فقط برای ادمین
    Route::get('/services', function () {
        if (!auth()->user()->is_admin) return redirect('/');
        return app(AdminServiceController::class)->index();
    })->name('admin.services.index');

    Route::get('/portfolio', function () {
        if (!auth()->user()->is_admin) return redirect('/');
        return app(AdminPortfolioController::class)->index();
    })->name('admin.portfolio.index');

    Route::get('/blog', function () {
        if (!auth()->user()->is_admin) return redirect('/');
        return app(AdminBlogController::class)->index();
    })->name('admin.blog.index');

    Route::get('/users', function () {
        if (!auth()->user()->is_admin) return redirect('/');
        return app(AdminUserController::class)->index();
    })->name('admin.users.index');
});

// -------------------- 404 --------------------
Route::fallback(function () {
    return view('pages.errors.404');
});
