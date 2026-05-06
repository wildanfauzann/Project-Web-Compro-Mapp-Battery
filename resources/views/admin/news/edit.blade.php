@extends('layouts.admin')

@section('title', 'Edit Artikel')
@section('page-title', 'Edit Artikel')
@section('page-subtitle', 'Perbarui judul, gambar, dan isi teks dari artikel ini.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.berita.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Edit</span>
        </div>

        @include('admin.news.partials.form', [
            'actionUrl' => route('admin.berita.update', $artikel),
            'submitLabel' => 'Simpan Perubahan',
            'artikel' => $artikel,
        ])
    </div>
@endsection
