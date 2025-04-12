<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\LogVisit;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services/{service}', [HomeController::class, 'show'])->name('services.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/comment', [ContactController::class, 'comment'])->name('comment.store');
Route::post('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter.store');
