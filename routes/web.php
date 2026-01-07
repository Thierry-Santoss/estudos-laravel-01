<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\EndtMiddleware;
use App\Http\Middleware\StartMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MainController::class, 'index'])->name('index')->middleware([StartMiddleware::class]);

// Route::get('/about', [MainController::class, 'about'])->name('about')->middleware([StartMiddleware::class, EndtMiddleware::class]);

// Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Route::middleware([StartMiddleware::class, EndtMiddleware::class])->group(function () {
//   Route::get('/', [MainController::class, 'index'])->name('index');
//   Route::get('/about', [MainController::class, 'about'])->name('about')->withoutMiddleware([EndtMiddleware::class]);
//   Route::get('/contact', [MainController::class, 'contact'])->name('contact');
// });

Route::middleware(['correr_depois'])->group(function () {
  Route::get('/', [MainController::class, 'index'])->name('index');
  Route::get('/about', [MainController::class, 'about'])->name('about');
  Route::get('/contact', [MainController::class, 'contact'])->name('contact');
});
