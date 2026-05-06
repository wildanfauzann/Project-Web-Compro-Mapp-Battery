@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk')
@section('page-subtitle', 'Isi data produk baru, lengkap dengan gambar dan detail teknis.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.produk.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Create</span>
        </div>

        @include('admin.product.partials.form', [
            'actionUrl' => route('admin.produk.store'),
            'submitLabel' => 'Simpan Produk',
            'produk' => null,
        ])
    </div>
@endsection