<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HabitatsController;
use App\Http\Controllers\ZooController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/habitats', [HabitatsController::class, 'index'])->name('habitats');
Route::get('/habitat/{name}', [HabitatsController::class, 'show'])->name('habitat');
Route::get('/contact', function () {})->name('contact');
Route::get('/ticketing', function () {})->name('ticketing');
Route::get('/legal-notices', function () {})->name('legal-notices');
Route::get('/cgv', function () {})->name('cgv');
Route::get('/animal', function () {})->name('animal');
Route::get('/review', function () {})->name('review');
Route::get('/faq', function () {})->name('faq');

Route::get('/login', [LoginController::class, 'login' ])->name('auth.login');
Route::post('/login',[LoginController::class, 'authenticate' ])->name('auth.authenticate');
Route::get('/register', [RegisterController::class, 'register' ])->name('auth.register');
Route::post('/register',[RegisterController::class, 'registerPost' ])->name('auth.registerPost');

Route::get('admin/zoo/habitats/create', [HabitatsController::class, 'createForm'])->name('habitats.createForm');
Route::post('/admin/zoo/habitats/create', [HabitatsController::class, 'create'])->name('habitats.create');
Route::get('admin/zoo/habitats/edit/{name}', [HabitatsController::class, 'edit'])->name('habitats.edit');
Route::patch('admin/zoo/habitats/edit/{name}', [HabitatsController::class, 'update'])->name('habitats.update');
Route::delete('admin/zoo/habitats/edit/{name}', [HabitatsController::class, 'delete'])->name('habitats.delete');

Route::get('admin/zoo/animals/create', [AnimalsController::class, 'createForm'])->name('animals.createForm');
Route::post();

// TODO: METTRE AU PROPRE LES ROUTES !!
Route::get('/admin/zoo', [ZooController::class, 'index'])->name('zoo-index');
Route::get('/admin/zoo/create', [ZooController::class, 'createForm' ])->name('create-form');
Route::post('/admin/zoo/create', [ZooController::class, 'create'])->name('create-zoo');
Route::get('/admin/zoo/{name}', [ZooController::class, 'show'])->name('show-zoo');
Route::get('/admin/zoo/update/{name}', [ZooController::class, 'edit'])->name('zoo-edit');
Route::patch('/admin/zoo/update/{name}', [ZooController::class, 'update'])->name('zoo-update');
Route::delete('/admin/zoo/update/{name}', [ZooController::class, 'delete'])->name('zoo-delete');
