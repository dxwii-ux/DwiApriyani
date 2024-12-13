<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

// Route Login
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'cekLogin']);
Route::get('logout', [AdminController::class, 'logout'])->name('logout');

// Middleware untuk Admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboardAdmin');

    // Route Meja
    Route::get('meja', [MejaController::class, 'meja'])->name('meja');
    Route::get('meja/edit/{no}', [MejaController::class, 'edit'])->name('meja.edit');
    Route::post('meja/edit/{no}', [MejaController::class, 'update'])->name('meja.update');
    Route::get('meja/delete/{no}', [MejaController::class, 'delete'])->name('meja.delete');

    // Route Menu
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::post('menu', [MenuController::class, 'simpan'])->name('menu.simpan');
    Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('menu/edit/{id}', [MenuController::class, 'update'])->name('menu.update');
    Route::get('menu/delete/{id}', [MenuController::class, 'delete'])->name('menu.delete');

    // Route Pelanggan
    Route::get('pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
    Route::post('pelanggan', [PelangganController::class, 'simpan'])->name('pelanggan.simpan');
    Route::get('pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::post('pelanggan/edit/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::get('pelanggan/hapus/{id}', [PelangganController::class, 'hapus'])->name('pelanggan.hapus');

    // Route Order
    Route::get('order', [OrderController::class, 'index'])->name('order');
    Route::post('order', [OrderController::class, 'store'])->name('order.store');
    Route::get('order/edit/{id_pesanan}', [OrderController::class, 'edit_data'])->name('order.edit');
    Route::post('order/edit/{id_pesanan}', [OrderController::class, 'update'])->name('order.update');
    Route::get('order/hapus/{id_pesanan}', [OrderController::class, 'destroy'])->name('order.destroy');

    // Route Transaksi
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::post('transaksi/simpan', [TransaksiController::class, 'simpan'])->name('transaksi.simpan');
    Route::get('transaksi/hapus/{id}', [TransaksiController::class, 'hapus'])->name('transaksi.hapus');

    // Route Laporan
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::post('laporan/filter', [LaporanController::class, 'filter'])->name('laporan.filter');
});
