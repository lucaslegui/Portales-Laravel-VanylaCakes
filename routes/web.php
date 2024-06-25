<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthCheck;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::resource('categories', CategoryController::class);


Route::get('/products', [ProductController::class, 'index'])->name('products.index')
    ->middleware(AuthCheck::class);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')
    ->middleware(AuthCheck::class);
Route::post('/products/create', [ProductController::class, 'createProcess'])->name('products.create.process')
    ->middleware(AuthCheck::class);
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')
    ->middleware(AuthCheck::class);
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update')
    ->middleware(AuthCheck::class);
Route::get('/products/{id}/confirm-delete', [ProductController::class, 'confirmDelete'])->name('products.confirmDelete')
    ->middleware(AuthCheck::class);
Route::delete('/products/{id}', [ProductController::class, 'delete'])
    ->name('products.delete')
    ->middleware(AuthCheck::class);

Route::get('/catalogo', [ProductController::class, 'catalog'])->name('products.catalog');
Route::resource('products', ProductController::class)->only(['index', 'show']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about', [HomeController::class, 'about'])->name('about');
