<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [App\Http\Controllers\ProductsController::class, 'all']);

Route::get('/about', function () {
    return view('about');
});
