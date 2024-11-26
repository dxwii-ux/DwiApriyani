<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
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
    Route::post('/menu/edit/{id}',[MenuController::class,'update']);
    Route::get('/menu/delete/{id}',[MenuController::class,'delete']);

    // route pelanggan
    Route::get('/pelanggan',[PelangganController::class,'index']);
    Route::post('/pelanggan',[PelangganController::class,'simpan']);
    Route::get('/pelanggan/edit/{id}',[PelangganController::class,'edit']);
    Route::post('/pelanggan/update/{id}',[PelangganController::class,'update']);
});

Route::get('/meja',function(){
    return view('meja');
});