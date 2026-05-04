@extends('layouts.admin')

@section('title', 'Berita Admin')
@section('page-title', 'Berita')
@section('page-subtitle', 'Kelola artikel berita dan update perusahaan dari satu layar.')

@section('content')
    @php
        $stats = [
            [
                'label' => 'Artikel Terbit',
                'value' => '18',
                'hint' => 'Posting aktif',
                'tone' => 'bg-blue-100 text-blue-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7.5h10M7 11.5h10M7 15.5h6" /><path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" /></svg>',
            ],
            [
                'label' => 'Draft',
                'value' => '4',
                'hint' => 'Belum publish',
                'tone' => 'bg-amber-100 text-amber-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>',
            ],
            [
                'label' => 'Views',
                'value' => '2.4K',
                'hint' => '30 hari',
                'tone' => 'bg-emerald-100 text-emerald-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.5 12s3.5-6.5 9.5-6.5 9.5 6.5 9.5 6.5-3.5 6.5-9.5 6.5S2.5 12 2.5 12z" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z" /></svg>',
            ],
            [
                'label' => 'Status',
                'value' => 'Ready',
                'hint' => 'Editorial',
                'tone' => 'bg-slate-900 text-white',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12l2.5 2.5L16 9" /></svg>',
            ],
        ];
    @endphp

    @include('admin.modules.module-page', [
        'stats' => $stats,
        'moduleTitle' => 'Berita',
        'moduleDescription' => 'Gunakan ruang ini untuk manajemen artikel, agenda perusahaan, dan berita terbaru dengan tampilan dashboard yang konsisten.',
        'searchLabel' => 'Search berita',
        'filterLabel' => 'Filter kategori berita',
        'filters' => ['Semua', 'Artikel', 'Agenda', 'Update perusahaan'],
        'tableTitle' => 'Daftar Berita',
        'tableDescription' => 'Belum ada data berita yang ditampilkan di modul ini.',
        'emptyCount' => '0 item',
        'emptyTitle' => 'Belum ada data',
        'emptyDescription' => 'Buat artikel berita pertama untuk menyiapkan area publik dan menjaga halaman berita tetap terisi.',
        'ctaLabel' => 'Tambah Data',
        'ctaUrl' => route('admin.berita.index'),
        'resetUrl' => route('admin.berita.index'),
    ])
@endsection