<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ProfileController;


Route::get('/', [AuthController::class, 'login'])->name('auth.login');
Route::get('/Register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/ForgotPassword', [AuthController::class, 'forgotpassword'])->name('auth.forgotpassword');

Route::get('/Book', [BookController::class, 'index'])->name('book.index');
Route::get('/CreateBook', [BookController::class, 'create'])->name('book.create');
Route::get('/EditBook', [BookController::class, 'edit'])->name('book.edit');
Route::get('/DetailBook', [BookController::class, 'detail'])->name('book.detail');
Route::get('/DeleteBook', [BookController::class, 'delete'])->name('book.delete');

Route::get('/Author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/CreateAuthor', [AuthorController::class, 'create'])->name('author.create');
Route::get('/EditAuthor', [AuthorController::class, 'edit'])->name('author.edit');
Route::get('/DetailAuthor', [AuthorController::class, 'detail'])->name('author.detail');
Route::get('/DeleteAuthor', [AuthorController::class, 'delete'])->name('author.delete');

Route::get('/Publisher', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/CreatePublisher', [PublisherController::class, 'create'])->name('publisher.create');
Route::get('/EditPublisher', [PublisherController::class, 'edit'])->name('publisher.edit');
Route::get('/DetailPublisher', [PublisherController::class, 'detail'])->name('publisher.detail');
Route::get('/DeletePublisher', [PublisherController::class, 'delete'])->name('publisher.delete');

Route::get('/Profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/EditProfile', [ProfileController::class, 'edit'])->name('profile.edit');
