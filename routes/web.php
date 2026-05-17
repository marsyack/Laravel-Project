<?php

use App\Http\Controllers\MemorialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('memorials.index');
});

Route::resource('memorials', MemorialController::class);