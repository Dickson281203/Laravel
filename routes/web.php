<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;


Route::get('/Book', [BookController::class, 'index'])->name('book.index');
Route::get('/Login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/Register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/Author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/Publisher', [PublisherController::class, 'index'])->name('publisher.index');
