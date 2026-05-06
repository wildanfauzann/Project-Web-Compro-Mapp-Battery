@extends('layouts.admin')

@section('title', 'Unduhan Admin')
@section('page-title', 'Unduhan')
@section('page-subtitle', 'Kelola katalog file, brosur, dan dokumen pendukung.')

@section('content')
    @php
        $stats = [
            [
                'label' => 'File Tersedia',
                'value' => '9',
                'hint' => 'PDF / ZIP',
                'tone' => 'bg-blue-100 text-blue-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v8m0 0l-3-3m3 3l3-3" /><path stroke-linecap="round" stroke-linejoin="round" d="M5 16.5A1.5 1.5 0 016.5 15h11A1.5 1.5 0 0119 16.5V18A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 18v-1.5z" /></svg>',
            ],
            [
                'label' => 'Unduhan Bulan Ini',
                'value' => '126',
                'hint' => 'Aktivitas',
                'tone' => 'bg-emerald-100 text-emerald-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2 2 5-5" /><path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" /></svg>',
            ],
            [
                'label' => 'Kategori Dokumen',
                'value' => '5',
                'hint' => 'Folder',
                'tone' => 'bg-amber-100 text-amber-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" /><path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" /></svg>',
            ],
            [
                'label' => 'Publik',
                'value' => 'Ready',
                'hint' => 'Siap dibagikan',
                'tone' => 'bg-slate-900 text-white',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" /></svg>',
            ],
        ];
    @endphp

    @include('admin.modules.module-page', [
        'stats' => $stats,
        'moduleTitle' => 'Unduhan',
        'moduleDescription' => 'Atur brosur, katalog, datasheet, dan file pendukung lain dengan layout yang clean dan responsif.',
        'searchLabel' => 'Search file',
        'filterLabel' => 'Filter tipe file',
        'filters' => ['Semua', 'Brosur', 'Katalog', 'Datasheet', 'Media kit'],
        'tableTitle' => 'Daftar Unduhan',
        'tableDescription' => 'Tidak ada file yang dimasukkan ke tabel admin saat ini.',
        'emptyCount' => '0 item',
        'emptyTitle' => 'Belum ada data',
        'emptyDescription' => 'Upload file pertama agar pengunjung bisa mengunduh dokumen yang mereka butuhkan.',
        'ctaLabel' => 'Tambah Data',
        'ctaUrl' => route('admin.unduhan.index'),
        'resetUrl' => route('admin.unduhan.index'),
    ])
@endsection