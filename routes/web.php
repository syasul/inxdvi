<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\AppDemoController;

Route::get('/', [\App\Http\Controllers\Front\PageController::class, 'home'])->name('client.home');
Route::get('/demo', [\App\Http\Controllers\Front\PageController::class, 'demoIndex'])->name('client.demo.index');
Route::get('/blog', [\App\Http\Controllers\Front\PageController::class, 'blogIndex'])->name('client.blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\Front\PageController::class, 'blogShow'])->name('client.blog.show');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('app-demo', AppDemoController::class);
    Route::get('setting', [SettingController::class, 'index'])->name('admin.setting.index');
    Route::post('setting', [SettingController::class, 'update'])->name('admin.setting.update');
    Route::get('ai-assistant', [\App\Http\Controllers\Admin\AiAssistantController::class, 'index'])->name('admin.ai-assistant.index');
});

// Auth Routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
