@extends('layouts.admin')

@section('title', 'Testimoni Admin')
@section('page-title', 'Testimoni')
@section('page-subtitle', 'Kelola ulasan pelanggan dan social proof perusahaan.')

@section('content')
    @php
        $stats = [
            [
                'label' => 'Testimoni',
                'value' => '14',
                'hint' => 'Terverifikasi',
                'tone' => 'bg-blue-100 text-blue-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 17l-2.5 2V7.5A2.5 2.5 0 017.5 5h9A2.5 2.5 0 0119 7.5v7A2.5 2.5 0 0116.5 17h-9z" /><path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6M9 12h4" /></svg>',
            ],
            [
                'label' => 'Rating',
                'value' => '4.9',
                'hint' => 'Rata-rata',
                'tone' => 'bg-amber-100 text-amber-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3.5l2.6 5.3 5.9.9-4.2 4.1 1 5.9-5.3-2.8-5.3 2.8 1-5.9-4.2-4.1 5.9-.9L12 3.5z" /></svg>',
            ],
            [
                'label' => 'Reviewer',
                'value' => '9',
                'hint' => 'Perusahaan',
                'tone' => 'bg-emerald-100 text-emerald-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 12a4 4 0 100-8 4 4 0 000 8z" /><path stroke-linecap="round" stroke-linejoin="round" d="M4 19a8 8 0 0116 0" /></svg>',
            ],
            [
                'label' => 'Status',
                'value' => 'Live',
                'hint' => 'Siap tampil',
                'tone' => 'bg-slate-900 text-white',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12l2.5 2.5L16 9" /></svg>',
            ],
        ];
    @endphp

    @include('admin.modules.module-page', [
        'stats' => $stats,
        'moduleTitle' => 'Testimoni',
        'moduleDescription' => 'Kelola testimoni pelanggan, kutipan, dan review yang memperkuat kredibilitas brand di halaman publik.',
        'searchLabel' => 'Search testimoni',
        'filterLabel' => 'Filter rating',
        'filters' => ['Semua', '5 bintang', '4 bintang', 'Foto + review'],
        'tableTitle' => 'Daftar Testimoni',
        'tableDescription' => 'Belum ada data testimoni yang dimasukkan ke dashboard ini.',
        'emptyCount' => '0 item',
        'emptyTitle' => 'Belum ada data',
        'emptyDescription' => 'Tambahkan testimoni untuk membangun social proof dan meningkatkan kepercayaan pengunjung.',
        'ctaLabel' => 'Tambah Data',
        'ctaUrl' => route('admin.testimoni.index'),
        'resetUrl' => route('admin.testimoni.index'),
    ])
@endsection