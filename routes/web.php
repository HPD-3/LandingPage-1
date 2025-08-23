<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/landing/{slug}', [LandingPageController::class, 'show'])->name('landing.show');

Route::get('/admin/create', [LandingPageController::class, 'create'])->name('landing.create');
Route::post('/admin/store', [LandingPageController::class, 'store'])->name('landing.store');
Route::get('/landing/pages/{url_path}', function ($url_path) {
    return view("landing.pages.$url_path");
})->name('landing.page');

