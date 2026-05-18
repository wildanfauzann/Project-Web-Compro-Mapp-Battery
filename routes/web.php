<?php

use App\Models\DetailProduk;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/produk', function (Request $request) {
    $query = \App\Models\Produk::with('kategori');

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where('nama_produk', 'like', '%' . $search . '%')
              ->orWhere('kode_produk', 'like', '%' . $search . '%')
              ->orWhereHas('kategori', function($q) use ($search) {
                  $q->where('nama_kategori', 'like', '%' . $search . '%');
              });
    }

    $produks = $query->get();
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

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');

Route::get('/unduhan', function () {
    return view('pages.unduhan');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $stats = [
            'produk' => Produk::count(),
            'kategori' => Kategori::count(),
            'detail' => DetailProduk::count(),
            'tanpa_gambar' => Produk::whereNull('img')->count(),
        ];

        $recentProduks = Produk::query()
            ->with('kategori')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'recentProduks'));
    })->name('dashboard');

    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('detail-produk', DetailProdukController::class);
    Route::resource('layanan', App\Http\Controllers\Admin\LayananController::class);
    Route::resource('berita', App\Http\Controllers\Admin\BeritaController::class);

    Route::resource('unduhan', App\Http\Controllers\Admin\UnduhanController::class);
    Route::resource('testimoni', App\Http\Controllers\Admin\TestimoniController::class);
    Route::resource('kontak-sales', App\Http\Controllers\Admin\KontakSalesController::class);
});
