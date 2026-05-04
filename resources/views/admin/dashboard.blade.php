@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Ringkasan performa katalog dan shortcut operasional.')

@section('content')
	<div class="space-y-6">
		<section class="grid gap-4 md:grid-cols-2 xl:grid-cols-4" data-reveal>
			<article class="card-elevated rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
				<p class="text-sm text-slate-500">Total Produk</p>
				<div class="mt-3 flex items-end justify-between gap-4">
					<div>
						<p class="text-3xl font-semibold text-slate-950">{{ $stats['produk'] }}</p>
						<p class="mt-1 text-xs uppercase tracking-[0.22em] text-slate-400">Produk aktif</p>
					</div>
					<div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-950 text-white">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
						</svg>
					</div>
				</div>
			</article>

			<article class="card-elevated rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
				<p class="text-sm text-slate-500">Kategori</p>
				<div class="mt-3 flex items-end justify-between gap-4">
					<div>
						<p class="text-3xl font-semibold text-slate-950">{{ $stats['kategori'] }}</p>
						<p class="mt-1 text-xs uppercase tracking-[0.22em] text-slate-400">Katalog aktif</p>
					</div>
					<div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-700">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" />
						</svg>
					</div>
				</div>
			</article>

			<article class="card-elevated rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
				<p class="text-sm text-slate-500">Detail Lengkap</p>
				<div class="mt-3 flex items-end justify-between gap-4">
					<div>
						<p class="text-3xl font-semibold text-slate-950">{{ $stats['detail'] }}</p>
						<p class="mt-1 text-xs uppercase tracking-[0.22em] text-slate-400">SKU detail</p>
					</div>
					<div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-100 text-amber-700">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" />
						</svg>
					</div>
				</div>
			</article>

			<article class="card-elevated rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
				<p class="text-sm text-slate-500">Tanpa Gambar</p>
				<div class="mt-3 flex items-end justify-between gap-4">
					<div>
						<p class="text-3xl font-semibold text-slate-950">{{ $stats['tanpa_gambar'] }}</p>
						<p class="mt-1 text-xs uppercase tracking-[0.22em] text-slate-400">Perlu update</p>
					</div>
					<div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-100 text-rose-700">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
							<path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M8 13l2.5-2.5a1 1 0 011.4 0l3.5 3.5 1-1" />
						</svg>
					</div>
				</div>
			</article>
		</section>

		<section class="grid gap-6 xl:grid-cols-[minmax(0,1.35fr)_minmax(0,0.85fr)]">
			<article class="rounded-3xl border border-slate-200 bg-white shadow-sm" data-reveal>
				<div class="flex items-center justify-between gap-4 border-b border-slate-200 px-5 py-4">
					<div>
						<h2 class="text-lg font-semibold text-slate-900">Produk Terbaru</h2>
						<p class="text-sm text-slate-500">Lima data terakhir yang masuk ke katalog.</p>
					</div>
					<a href="{{ route('admin.produk.index') }}" class="btn-ghost text-slate-700">Kelola Semua</a>
				</div>

				@if ($recentProduks->isEmpty())
					<div class="flex min-h-[20rem] flex-col items-center justify-center px-6 py-12 text-center">
						<div class="mb-4 flex h-16 w-16 items-center justify-center rounded-3xl bg-slate-100 text-slate-500">
							<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
								<path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
							</svg>
						</div>
						<h3 class="text-xl font-semibold text-slate-900">Belum ada produk</h3>
						<p class="mt-2 max-w-md text-sm text-slate-500">Tambahkan produk pertama untuk mulai mengisi katalog admin.</p>
						<a href="{{ route('admin.produk.create') }}" class="btn-primary mt-6">Tambah Produk</a>
					</div>
				@else
					<div class="divide-y divide-slate-200">
						@foreach ($recentProduks as $produk)
							<div class="flex flex-col gap-4 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
								<div class="flex items-center gap-4">
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
									<div>
										<p class="text-sm font-semibold text-slate-900">{{ $produk->nama_produk }}</p>
										<p class="text-sm text-slate-500">{{ $produk->kode_produk }}</p>
									</div>
								</div>
								<div class="flex items-center gap-3">
									<span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">{{ $produk->kategori?->nama_kategori ?? '-' }}</span>
								</div>
							</div>
						@endforeach
					</div>
				@endif
			</article>

			<aside class="space-y-6" data-reveal>
				<article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm">
					<h2 class="text-lg font-semibold text-slate-900">Shortcut</h2>
					<p class="mt-1 text-sm text-slate-500">Akses cepat ke task paling sering dipakai.</p>

					<div class="mt-5 grid gap-3">
						<a href="{{ route('admin.produk.create') }}" class="card-elevated flex items-center justify-between rounded-2xl border border-slate-200 bg-slate-950 px-4 py-4 text-white">
							<span>
								<span class="block text-sm font-semibold">Tambah Produk Baru</span>
								<span class="block text-xs text-slate-300">Buat item katalog baru</span>
							</span>
							<span class="text-xl">+</span>
						</a>

						<a href="{{ route('admin.produk.index') }}" class="card-elevated flex items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-4 text-slate-900">
							<span>
								<span class="block text-sm font-semibold">Kelola Produk</span>
								<span class="block text-xs text-slate-500">Cari, filter, edit, dan hapus data</span>
							</span>
							<span class="text-xl text-slate-400">→</span>
						</a>
					</div>
				</article>

				<article class="rounded-3xl border border-dashed border-slate-300 bg-white/70 p-5 shadow-sm">
					<p class="text-xs uppercase tracking-[0.22em] text-slate-500">Catatan</p>
					<h3 class="mt-2 text-base font-semibold text-slate-900">Struktur admin sudah dipisah per modul</h3>
					<p class="mt-2 text-sm leading-6 text-slate-500">Sidebar dan view sudah siap untuk modul layanan, berita, unduhan, testimoni, dan kontak sales saat Anda ingin melanjutkan CRUD di area tersebut.</p>
				</article>
			</aside>
		</section>
	</div>
@endsection
