@extends('layouts.admin')

@section('title', 'Tambah Layanan')
@section('page-title', 'Tambah Layanan')
@section('page-subtitle', 'Isi informasi layanan, detail poin, dan unggah galeri gambar.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.layanan.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Create</span>
        </div>

        @include('admin.service.partials.form', [
            'actionUrl' => route('admin.layanan.store'),
            'submitLabel' => 'Simpan Layanan',
            'layanan' => null,
        ])
    </div>
@endsection
