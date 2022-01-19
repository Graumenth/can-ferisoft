<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [PostController::class, 'index'])->name('contact');
Route::post('/contact/save', [PostController::class, 'save'])->name('contact.save');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
