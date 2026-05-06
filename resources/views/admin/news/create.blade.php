@extends('layouts.admin')

@section('title', 'Tulis Artikel')
@section('page-title', 'Tulis Artikel')
@section('page-subtitle', 'Buat postingan baru untuk berita, agenda, atau update perusahaan.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.berita.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Create</span>
        </div>

        @include('admin.news.partials.form', [
            'actionUrl' => route('admin.berita.store'),
            'submitLabel' => 'Publikasikan Artikel',
            'artikel' => null,
        ])
    </div>
@endsection
