<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'vue'])->name('login');

Route::get('/login',[DashboardController::class, 'login'])->name('login');


Route::get('/registration', [DashboardController::class,'registration'])->name('registration');

Route::get('/logout',  [DashboardController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function (){

    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
});

Route::post('/login',[AuthController::class , 'login'])->name('login.process');

Route::post('/registration',[AuthController::class , 'registration'])->name('registration.process');

