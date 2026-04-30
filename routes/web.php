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
    $articles = config('newsroom.articles', []);
    return view('pages.berita', compact('articles'));
});

Route::get('/berita/{slug}', function (string $slug) {
    $articles = collect(config('newsroom.articles', []));
    $article = $articles->firstWhere('slug', $slug);

    if (!$article) {
        abort(404);
    }

    $relatedArticles = $articles
        ->where('category', $article['category'])
        ->reject(fn ($item) => $item['slug'] === $article['slug'])
        ->take(3)
        ->values()
        ->all();

    if (count($relatedArticles) < 3) {
        $additional = $articles
            ->reject(fn ($item) => $item['slug'] === $article['slug'])
            ->reject(fn ($item) => collect($relatedArticles)->pluck('slug')->contains($item['slug']))
            ->take(3 - count($relatedArticles))
            ->values()
            ->all();

        $relatedArticles = array_merge($relatedArticles, $additional);
    }

    return view('pages.detail-berita', [
        'article' => $article,
        'relatedArticles' => $relatedArticles,
    ]);
});

Route::prefix('admin')->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('detail-produk', DetailProdukController::class);
});
