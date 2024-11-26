<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AdminController::class,'login'])->name('login');
Route::get('logout',[AdminController::class,'logout']);
Route::post('login',[AdminController::class,'cekLogin']);

Route::middleware('auth:admin')->group(function(){
    Route::get('/',[AdminController::class,'index']);

    // route data meja
    Route::get('meja',action: [MejaController::class,'meja']);

    // route menu
    Route::get('/menu',[MenuController::class,'index']);
    Route::post('/menu',[MenuController::class,'simpan']);
    Route::get('/menu/edit/{id}',[MenuController::class,'edit']);
    Route::get('/menu/update/{id}',[MenuController::class,'update']);
});
