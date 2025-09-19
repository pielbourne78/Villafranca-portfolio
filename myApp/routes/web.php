<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// Default Laravel route

Route::get('/', [PageController::class, 'index']);

// Portfolio routes

Route::get('/portfolio', [PageController::class, 'index'])->name('portfolio.home');

Route::get('/about', [PageController::class, 'about'])->name('portfolio.about');

Route::get('/projects', [PageController::class, 'projects'])->name('portfolio.projects');

Route::get('/contact', [PageController::class, 'contact'])->name('portfolio.contact');
