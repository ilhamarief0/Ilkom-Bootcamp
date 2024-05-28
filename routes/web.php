<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login-post', 'login')->name('login.post');
    });
});


Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(TableController::class)->group(function () {
        Route::get('/dasbboard/table', 'index')->name('dashboard.table');
    });
});
