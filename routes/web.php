<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HabitatsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/habitats', [HabitatsController::class, 'habitats'])->name('habitats');
Route::get('/contact', function () {})->name('contact');
Route::get('/ticketing', function () {})->name('ticketing');
Route::get('/legal-notices', function () {})->name('legal-notices');
Route::get('/cgv', function () {})->name('cgv');
Route::get('/animal', function () {})->name('animal');
Route::get('/review', function () {})->name('review');
Route::get('/faq', function () {})->name('faq');

