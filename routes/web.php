<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Hiển thị form đăng ký
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
// Xử lý đăng ký người dùng
Route::post('/register', [UserController::class, 'register']);
