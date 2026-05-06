@extends('layouts.admin')

@section('title', 'Edit Layanan')
@section('page-title', 'Edit Layanan')
@section('page-subtitle', 'Ubah informasi layanan, detail poin, dan gambar pendukung.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.layanan.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Edit</span>
        </div>

        @include('admin.service.partials.form', [
            'actionUrl' => route('admin.layanan.update', $layanan),
            'submitLabel' => 'Simpan Perubahan',
            'layanan' => $layanan,
        ])
    </div>
@endsection
