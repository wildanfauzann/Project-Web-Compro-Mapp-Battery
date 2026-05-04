@extends('layouts.admin')

@section('title', 'Layanan Admin')
@section('page-title', 'Layanan')
@section('page-subtitle', 'Kelola konten layanan dengan gaya dashboard SaaS yang sama.')

@section('content')
    @php
        $stats = [
            [
                'label' => 'Layanan Aktif',
                'value' => '3',
                'hint' => 'Program utama',
                'tone' => 'bg-blue-100 text-blue-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M5 7.5A2.5 2.5 0 017.5 5h9A2.5 2.5 0 0119 7.5v9A2.5 2.5 0 0116.5 19h-9A2.5 2.5 0 015 16.5v-9z" /><path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6M9 13h4" /></svg>',
            ],
            [
                'label' => 'Artikel Panduan',
                'value' => '12',
                'hint' => 'Konten support',
                'tone' => 'bg-amber-100 text-amber-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7.5h10M7 11.5h10M7 15.5h6" /><path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" /></svg>',
            ],
            [
                'label' => 'Request Masuk',
                'value' => '8',
                'hint' => 'Bulan ini',
                'tone' => 'bg-emerald-100 text-emerald-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" /><path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2 2 5-5" /></svg>',
            ],
            [
                'label' => 'Status Update',
                'value' => 'Live',
                'hint' => 'Siap publish',
                'tone' => 'bg-slate-900 text-white',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>',
            ],
        ];
    @endphp

    @include('admin.modules.module-page', [
        'stats' => $stats,
        'moduleTitle' => 'Layanan',
        'moduleDescription' => 'Daftar layanan purna jual, support teknis, dan informasi layanan yang ditampilkan dengan tabel bersih dan empty state yang jelas.',
        'searchLabel' => 'Search layanan',
        'filterLabel' => 'Filter jenis layanan',
        'filters' => ['Semua', 'Purna jual', 'Support teknis', 'Training'],
        'tableTitle' => 'Daftar Layanan',
        'tableDescription' => 'Belum ada baris layanan yang dikelola dari dashboard ini.',
        'emptyCount' => '0 item',
        'emptyTitle' => 'Belum ada data',
        'emptyDescription' => 'Tambahkan layanan baru untuk mengisi modul layanan dan menjaga konsistensi informasi di halaman publik.',
        'ctaLabel' => 'Tambah Data',
        'ctaUrl' => route('admin.layanan.index'),
        'resetUrl' => route('admin.layanan.index'),
    ])
@endsection