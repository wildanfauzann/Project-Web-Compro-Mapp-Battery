<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/produk/detail', function () {
    return view('pages.detail-produk');
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
