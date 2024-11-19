<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[PenggunaController::class,'login']);
Route::post('login',[PenggunaController::class,'cekLogin']);
