<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Kontak', [KontakController::class, 'Kontak']);
Route::get('/Profile', [ProfileController::class, 'Profile']);
