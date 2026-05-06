@extends('layouts.admin')

@section('title', 'Edit Kontak Sales')
@section('page-title', 'Edit Kontak Sales')
@section('page-subtitle', 'Perbarui data diri, foto, atau area cakupan dari sales ini.')

@section('content')
    <div class="space-y-6">
        <div class="flex items-center justify-between" data-reveal>
            <a href="{{ route('admin.kontak-sales.index') }}" class="btn-ghost">Kembali ke tabel</a>
            <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Form Edit</span>
        </div>

        @include('admin.kontak-sales.partials.form', [
            'actionUrl' => route('admin.kontak-sales.update', $kontak_sale),
            'submitLabel' => 'Simpan Perubahan',
            'sales' => $kontak_sale,
        ])
    </div>
@endsection
