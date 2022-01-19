<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [PostController::class, 'index'])->name('contact');
Route::get('/', [AdminController::class, 'index'])->name('admin');
