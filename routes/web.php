<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\WorkWithUsController;

Route::get('/', [HomeController::class, 'index'])->name('website.home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');
Route::get('/our-services', [ServiceController::class, 'index'])->name('our-services.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
Route::get('/work-with-us', [WorkWithUsController::class, 'index'])->name('work-with-us.index');
Route::post('/work-with-us', [WorkWithUsController::class, 'store'])->name('work-with-us.store');
