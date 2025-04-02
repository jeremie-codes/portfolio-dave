<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\LogVisit;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('public.about');
})->name('about');
Route::get('/services/{service}', [HomeController::class, 'show'])->name('services.show');
Route::middleware([LogVisit::class])->group(function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
