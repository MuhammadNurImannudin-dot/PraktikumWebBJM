<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

//ini route login
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin', [AdminController::class, 'admin']);