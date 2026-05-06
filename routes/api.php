<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\KontakSalesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// API Public Routes for CRUD
// Catatan: Jika ingin diamankan, masukkan ke dalam middleware auth:sanctum
Route::apiResource('kategori', KategoriController::class);
Route::apiResource('produk', ProdukController::class);
Route::apiResource('berita', BeritaController::class);
Route::apiResource('layanan', LayananController::class);
Route::apiResource('kontak-sales', KontakSalesController::class);
