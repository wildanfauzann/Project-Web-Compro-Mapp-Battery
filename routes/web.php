<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailProdukController;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/produk', function () {
    $produks = \App\Models\Produk::with('kategori')->get();
    return view('pages.produk', compact('produks'));
});

Route::get('/produk/detail', function (\Illuminate\Http\Request $request) {
    $kode = $request->query('item', 'HWK-PP-48V');
    $produk = \App\Models\Produk::with(['kategori', 'detailProduk'])->where('kode_produk', $kode)->first();
    if (!$produk) abort(404);
    
    $lainnya = \App\Models\Produk::with('kategori')
                ->where('kategori_id', $produk->kategori_id)
                ->where('id', '!=', $produk->id)
                ->take(4)
                ->get();
                
    return view('pages.detail-produk', compact('produk', 'lainnya'));
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});

Route::get('/layanan/detail', function () {
    return view('pages.detail-layanan');
});

Route::get('/unduhan', function () {
    return view('pages.unduhan');
});

Route::get('/berita', function () {
    return view('pages.berita');
});

Route::prefix('admin')->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('detail-produk', DetailProdukController::class);
});
