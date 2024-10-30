<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/soal-2', function () {
    return view('soal2');
});
