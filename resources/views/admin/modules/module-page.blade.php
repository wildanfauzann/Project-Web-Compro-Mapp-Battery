@php
    $stats = $stats ?? [];
    $searchLabel = $searchLabel ?? 'Search';
    $filterLabel = $filterLabel ?? 'Filter';
    $emptyTitle = $emptyTitle ?? 'Belum ada data';
    $emptyDescription = $emptyDescription ?? 'Tambahkan data pertama untuk mulai mengisi modul ini.';
    $ctaLabel = $ctaLabel ?? 'Tambah Data';
@endphp

<section class="grid gap-4 md:grid-cols-2 xl:grid-cols-4" data-reveal>
    @foreach ($stats as $stat)
        <article class="card-elevated rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
            <p class="text-sm text-slate-500">{{ $stat['label'] }}</p>
            <div class="mt-3 flex items-end justify-between gap-4">
                <div>
                    <p class="text-3xl font-semibold text-slate-950">{{ $stat['value'] }}</p>
                    <p class="mt-1 text-xs uppercase tracking-[0.22em] text-slate-400">{{ $stat['hint'] }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl {{ $stat['tone'] }}">
                    {!! $stat['icon'] !!}
                </div>
            </div>
        </article>
    @endforeach
</section>

<section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm" data-reveal>
    <div class="flex flex-col gap-5 xl:flex-row xl:items-end xl:justify-between">
        <div>
            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Data Table UI</p>
            <h2 class="mt-2 text-2xl font-semibold text-slate-950">{{ $moduleTitle }}</h2>
            <p class="mt-2 text-sm text-slate-500">{{ $moduleDescription }}</p>
        </div>

        <a href="{{ $ctaUrl }}" class="btn-primary w-fit">{{ $ctaLabel }}</a>
    </div>

    <form method="GET" class="mt-6 grid gap-4 lg:grid-cols-[minmax(0,1fr)_240px_auto]">
        <label class="block">
            <span class="mb-2 block text-sm font-semibold text-slate-700">{{ $searchLabel }}</span>
            <div class="relative">
                <input type="search" name="q" placeholder="Cari data {{ strtolower($moduleTitle) }}" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 pr-12 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                <svg class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.3-4.3M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z" />
                </svg>
            </div>
        </label>

        <label class="block">
            <span class="mb-2 block text-sm font-semibold text-slate-700">{{ $filterLabel }}</span>
            <select class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                @foreach ($filters as $filter)
                    <option>{{ $filter }}</option>
                @endforeach
            </select>
        </label>

        <div class="flex items-end gap-3">
            <button type="submit" class="btn-primary">Terapkan</button>
            <a href="{{ $resetUrl }}" class="btn-outline">Reset</a>
        </div>
    </form>
</section>

<section class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm" data-reveal>
    <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
        <div>
            <h3 class="text-lg font-semibold text-slate-900">{{ $tableTitle }}</h3>
            <p class="text-sm text-slate-500">{{ $tableDescription }}</p>
        </div>
        <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">{{ $emptyCount }}</span>
    </div>

    <div class="flex min-h-[22rem] flex-col items-center justify-center px-6 py-14 text-center">
        <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-3xl bg-slate-100 text-slate-500">
            <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2.5-2.5a1 1 0 011.4 0l3.5 3.5 1-1" />
            </svg>
        </div>
        <h4 class="text-xl font-semibold text-slate-900">{{ $emptyTitle }}</h4>
        <p class="mt-2 max-w-md text-sm text-slate-500">{{ $emptyDescription }}</p>
        <a href="{{ $ctaUrl }}" class="btn-primary mt-6">{{ $ctaLabel }}</a>
    </div>
</section>