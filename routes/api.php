<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\LayananController;
use App\Http\Controllers\Api\KontakSalesController;

// --- RUTE PUBLIK (Untuk Tampilan User/Visitor) ---
// User hanya boleh GET (index & show)
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/{kategori}', [KategoriController::class, 'show']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);

Route::get('berita', [BeritaController::class, 'index']);
Route::get('berita/{artikel}', [BeritaController::class, 'show']);

Route::get('layanan', [LayananController::class, 'index']);
Route::get('layanan/{layanan}', [LayananController::class, 'show']);

// Kontak sales mungkin tetap public agar user bisa kirim pesan
Route::post('kontak-sales', [KontakSalesController::class, 'store']);
Route::post('login', [AuthController::class, 'apiLogin']);

// --- RUTE TERPROTEKSI (Untuk Admin) ---
// Admin harus login (Sanctum) untuk menambah, edit, atau hapus data

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // CRUD lengkap untuk Admin
    Route::apiResource('kategori', KategoriController::class)->except(['index', 'show']);
    Route::apiResource('produk', ProdukController::class)->except(['index', 'show']);
    Route::apiResource('berita', BeritaController::class)->except(['index', 'show'])->parameters(['berita' => 'artikel']);
    Route::apiResource('layanan', LayananController::class)->except(['index', 'show']);
    Route::apiResource('kontak-sales', KontakSalesController::class)->except(['store']);
    
    Route::post('logout', [AuthController::class, 'apiLogout']);
});