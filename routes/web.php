<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('users', [UserController::class, 'users']);

Route::get('/registration/form',[AuthController::class,'loadRegisterForm']);

Route::post('/register/user',[AuthController::class,'registerUser'])->name('registerUser');

Route::get('/login/form',[AuthController::class,'loadLoginPage'])->name('loadLoginPage');

Route::post('/login/user',[AuthController::class,'LoginUser'])->name('LoginUser');

Route::get('/logout',[AuthController::class,'LogoutUser'])->name('LogoutUser');

Route::get('/forgot/password',[AuthController::class,'forgotPassword']);

Route::post('/forgot',[AuthController::class,'forgot'])->name('forgot');

Route::get('/reset/password',[AuthController::class,'loadResetPassword']);

Route::post('/reset/user/password',[AuthController::class,'ResetPassword'])->name('ResetPassword');

Route::get('/404',[AuthController::class,'load404']);

Route::fallback(function(){
    return view(view: '404');
});
