<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/books/{id}',[BookController::class, 'detail'] )->name('bookdetail');
Route::get('/publisher/{id}', [PublisherController::class, 'detail'])->name('publisherdetail');
Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('category');
