@extends('layouts.admin')

@section('title', 'Kontak Sales Admin')
@section('page-title', 'Kontak Sales')
@section('page-subtitle', 'Kelola lead, kontak masuk, dan funnel follow up penjualan.')

@section('content')
    @php
        $stats = [
            [
                'label' => 'Lead Masuk',
                'value' => '27',
                'hint' => '30 hari',
                'tone' => 'bg-blue-100 text-blue-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12l2.5 2.5L16 9" /><path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" /></svg>',
            ],
            [
                'label' => 'Follow Up',
                'value' => '11',
                'hint' => 'Perlu dijawab',
                'tone' => 'bg-amber-100 text-amber-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01" /><path stroke-linecap="round" stroke-linejoin="round" d="M10.3 4.3l-8 14A2 2 0 003.1 21h17.8a2 2 0 001.7-2.7l-8-14a2 2 0 00-3.5 0z" /></svg>',
            ],
            [
                'label' => 'Converted',
                'value' => '8',
                'hint' => 'Deal masuk',
                'tone' => 'bg-emerald-100 text-emerald-700',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2 2 5-5" /><path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" /></svg>',
            ],
            [
                'label' => 'Status',
                'value' => 'Hot',
                'hint' => 'Pipeline',
                'tone' => 'bg-slate-900 text-white',
                'icon' => '<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16M8 8h8M8 16h8" /></svg>',
            ],
        ];
    @endphp

    @include('admin.modules.module-page', [
        'stats' => $stats,
        'moduleTitle' => 'Kontak Sales',
        'moduleDescription' => 'Pantau kontak masuk dari calon pelanggan, simpan lead, dan siapkan follow up dengan layout dashboard yang konsisten.',
        'searchLabel' => 'Search lead',
        'filterLabel' => 'Filter status lead',
        'filters' => ['Semua', 'Baru', 'Follow up', 'Converted'],
        'tableTitle' => 'Daftar Kontak Sales',
        'tableDescription' => 'Belum ada lead yang tersimpan di modul kontak sales ini.',
        'emptyCount' => '0 item',
        'emptyTitle' => 'Belum ada data',
        'emptyDescription' => 'Data kontak sales yang masuk akan tampil di sini agar tim bisa menindaklanjuti dengan cepat.',
        'ctaLabel' => 'Tambah Data',
        'ctaUrl' => route('admin.kontak-sales.index'),
        'resetUrl' => route('admin.kontak-sales.index'),
    ])
@endsection