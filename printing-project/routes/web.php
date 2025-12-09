<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class,'showLogin'])->name('show.login');
Route::get('/register', [AuthController::class,'showRegister'])->name('show.register');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/register', [AuthController::class,'register'])->name('register');

Route::get('/readshome', [AuthController::class,'showHome'])->name('show.home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/resetpass', [AuthController::class,'showResetPass'])->name('show.resetpass');
Route::post('/resetpass', [AuthController::class, 'resetpass'])->name('resetpass');
Route::get('/about', [AuthController::class,'showAbout'])->name('show.about');
// Route::post('/about', [AuthController::class, 'about'])->name('about');

//Home
Route::resource('requests', RequestController::class);
Route::post('/requestforms/{id}/complete', [RequestController::class, 'markCompleted'])
    ->name('requestforms.complete');
Route::get('/messaging', [HomeController::class,'showMessage'])->name('show.message');
