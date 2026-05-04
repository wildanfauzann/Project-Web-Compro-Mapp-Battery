@extends('layouts.admin')

@section('title', 'Produk Admin')
@section('page-title', 'Produk')
@section('page-subtitle', 'Cari, filter, tambah, edit, dan hapus data produk.')

@section('content')
    <div class="space-y-6">
        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm" data-reveal>
            <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Data Table UI</p>
                    <h2 class="mt-2 text-2xl font-semibold text-slate-950">Katalog Produk</h2>
                    <p class="mt-2 text-sm text-slate-500">Total data: {{ $produks->total() }} item, menampilkan hasil yang sesuai pencarian dan filter.</p>
                </div>

                <a href="{{ route('admin.produk.create') }}" class="btn-primary w-fit">Tambah Data</a>
            </div>

            <form method="GET" class="mt-6 grid gap-4 lg:grid-cols-[minmax(0,1fr)_240px_auto]">
                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Search</span>
                    <div class="relative">
                        <input type="search" name="q" value="{{ $search }}" placeholder="Cari nama atau kode produk" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 pr-12 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                        <svg class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.3-4.3M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" />
                        </svg>
                    </div>
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Filter Kategori</span>
                    <select name="kategori" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                        <option value="all" @selected($kategoriId === 'all')>Semua Kategori</option>
                        @foreach ($kategoriOptions as $kategori)
                            <option value="{{ $kategori->id }}" @selected((string) $kategoriId === (string) $kategori->id)>{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </label>

                <div class="flex items-end gap-3">
                    <button type="submit" class="btn-primary">Terapkan</button>
                    <a href="{{ route('admin.produk.index') }}" class="btn-outline">Reset</a>
                </div>
            </form>
        </section>

        <section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm" data-reveal>
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <div>
                    <h3 class="text-lg font-semibold text-slate-900">Data Produk</h3>
                    <p class="text-sm text-slate-500">Kolom yang tampil: image, name, category, action.</p>
                </div>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">{{ $produks->count() }} tampil</span>
            </div>

            @if ($produks->isEmpty())
                <div class="flex min-h-[22rem] flex-col items-center justify-center px-6 py-14 text-center">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-3xl bg-slate-100 text-slate-500">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2.5-2.5a1 1 0 011.4 0l3.5 3.5 1-1" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold text-slate-900">Belum ada data</h4>
                    <p class="mt-2 max-w-md text-sm text-slate-500">Tambahkan data pertama agar tabel produk mulai terisi.</p>
                    <a href="{{ route('admin.produk.create') }}" class="btn-primary mt-6">Tambah Data</a>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-[0.22em] text-slate-500">
                            <tr>
                                <th class="px-5 py-4">Image</th>
                                <th class="px-5 py-4">Name</th>
                                <th class="px-5 py-4">Category</th>
                                <th class="px-5 py-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-white">
                            @foreach ($produks as $produk)
                                <tr class="transition hover:bg-slate-50/80">
                                    <td class="px-5 py-4 align-middle">
                                        <div class="h-16 w-16 overflow-hidden rounded-2xl border border-slate-200 bg-slate-100">
                                            @if ($produk->img_url)
                                                <img src="{{ $produk->img_url }}" alt="{{ $produk->nama_produk }}" class="h-full w-full object-cover">
                                            @else
                                                <div class="flex h-full w-full items-center justify-center text-slate-400">
                                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 align-middle">
                                        <div>
                                            <p class="font-semibold text-slate-950">{{ $produk->nama_produk }}</p>
                                            <p class="mt-1 text-sm text-slate-500">{{ $produk->kode_produk }}</p>
                                        </div>
                                    </td>
                                    <td class="px-5 py-4 align-middle">
                                        <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">{{ $produk->kategori?->nama_kategori ?? '-' }}</span>
                                    </td>
                                    <td class="px-5 py-4 align-middle">
                                        <div class="flex justify-end gap-2">
                                            <a href="{{ route('admin.produk.edit', $produk) }}" class="inline-flex items-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 transition hover:-translate-y-0.5 hover:border-slate-300 hover:bg-slate-50">Edit</a>
                                            <button type="button" data-delete-trigger data-delete-url="{{ route('admin.produk.destroy', $produk) }}" data-delete-name="{{ $produk->nama_produk }}" class="inline-flex items-center rounded-xl border border-rose-200 bg-rose-50 px-3 py-2 text-sm font-semibold text-rose-700 transition hover:-translate-y-0.5 hover:border-rose-300 hover:bg-rose-100">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="border-t border-slate-200 px-5 py-4">
                {{ $produks->links() }}
            </div>
        </section>
    </div>

    @include('admin.product.partials.delete-modal')
@endsection