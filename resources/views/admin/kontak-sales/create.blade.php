@extends('layouts.admin')

@section('title', 'Tambah Kontak Sales')
@section('page-title', 'Tambah Kontak Sales')
@section('page-subtitle', 'Masukkan informasi perwakilan sales beserta area cakupannya.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.kontak-sales.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Create</span>
        </div>

        @include('admin.kontak-sales.partials.form', [
            'actionUrl' => route('admin.kontak-sales.store'),
            'submitLabel' => 'Simpan Data Sales',
            'sales' => null,
        ])
    </div>
@endsection
