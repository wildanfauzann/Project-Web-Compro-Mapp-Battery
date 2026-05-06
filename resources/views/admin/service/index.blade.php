@extends('layouts.admin')

@section('title', 'Layanan Admin')
@section('page-title', 'Layanan')
@section('page-subtitle', 'Kelola konten layanan, termasuk gambar utama, gallery, dan penjelasan lengkap.')

@section('content')
    <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6" data-reveal>
        <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs uppercase tracking-[0.24em] text-slate-500">Data Table UI</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-950">Daftar Layanan</h2>
                <p class="mt-2 text-sm text-slate-500">Total data layanan: {{ $layanans->total() }}</p>
            </div>
            <a href="{{ route('admin.layanan.create') }}" class="btn-primary flex items-center gap-2">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Tambah Layanan
            </a>
        </div>

        <form method="GET" class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-end">
            <label class="block flex-1">
                <span class="mb-2 block text-sm font-semibold text-slate-700">Pencarian</span>
                <input type="search" name="q" value="{{ request('q') }}" placeholder="Cari nama layanan..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
            </label>
            <div class="flex gap-2">
                <button type="submit" class="btn-primary">Cari</button>
                <a href="{{ route('admin.layanan.index') }}" class="btn-outline">Reset</a>
            </div>
        </form>

        @if(session('success'))
            <div class="mt-6 rounded-2xl bg-emerald-50 p-4 text-sm font-semibold text-emerald-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-hidden rounded-2xl border border-slate-200">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-600">
                    <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                        <tr>
                            <th class="p-4 font-semibold">Image</th>
                            <th class="p-4 font-semibold">Layanan</th>
                            <th class="p-4 font-semibold">Deskripsi Singkat</th>
                            <th class="p-4 font-semibold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        @forelse($layanans as $layanan)
                            <tr class="hover:bg-slate-50/50">
                                <td class="p-4">
                                    <div class="h-16 w-16 overflow-hidden rounded-xl border border-slate-200 bg-slate-100">
                                        <img src="{{ asset($layanan->image) }}" alt="{{ $layanan->title }}" class="h-full w-full object-cover">
                                    </div>
                                </td>
                                <td class="p-4">
                                    <p class="font-semibold text-slate-900">{{ $layanan->title }}</p>
                                    <p class="text-xs text-slate-500">Slug: {{ $layanan->slug }}</p>
                                </td>
                                <td class="p-4 max-w-xs truncate" title="{{ $layanan->description }}">
                                    {{ Str::limit($layanan->description, 50) }}
                                </td>
                                <td class="p-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('admin.layanan.edit', $layanan) }}" class="rounded-xl border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50 hover:text-blue-600">Edit</a>
                                        <button type="button" data-modal-target="delete-modal-{{ $layanan->id }}" class="rounded-xl border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 shadow-sm transition hover:bg-slate-50 hover:text-rose-600">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @include('admin.service.partials.delete-modal', ['layanan' => $layanan])
                        @empty
                            <tr>
                                <td colspan="4" class="p-8 text-center text-slate-500">Belum ada data layanan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            {{ $layanans->links() }}
        </div>
    </section>
@endsection