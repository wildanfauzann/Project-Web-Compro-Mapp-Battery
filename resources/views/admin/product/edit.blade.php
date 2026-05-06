@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')
@section('page-subtitle', 'Perbarui data produk, gambar, dan detail lengkapnya.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.produk.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Edit</span>
        </div>

        @include('admin.product.partials.form', [
            'actionUrl' => route('admin.produk.update', $produk),
            'submitLabel' => 'Perbarui Produk',
            'produk' => $produk,
        ])
    </div>
@endsection