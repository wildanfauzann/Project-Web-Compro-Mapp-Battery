@php
    $isEdit = isset($produk) && $produk;
    $currentImageUrl = $isEdit ? $produk->img_url : null;
@endphp

<form method="POST" action="{{ $actionUrl }}" enctype="multipart/form-data" class="grid gap-6 xl:grid-cols-[minmax(0,1.35fr)_minmax(320px,0.95fr)]">
    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif

    <div class="space-y-6">
        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6" data-reveal>
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-500">Form Create / Edit</p>
                    <h2 class="mt-2 text-2xl font-semibold text-slate-950">Informasi Utama</h2>
                    <p class="mt-2 text-sm text-slate-500">Input teks, textarea, dan upload image untuk data katalog.</p>
                </div>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Mandatory</span>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <label class="block md:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Nama Produk</span>
                    <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk ?? '') }}" placeholder="Masukkan nama produk" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('nama_produk')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Kode Produk</span>
                    <input type="text" name="kode_produk" value="{{ old('kode_produk', $produk->kode_produk ?? '') }}" placeholder="Contoh: HWK-PP-48V" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('kode_produk')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Kategori</span>
                    <select name="kategori_id" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                        <option value="">Pilih kategori</option>
                        @foreach ($kategoriOptions as $kategori)
                            <option value="{{ $kategori->id }}" @selected((string) old('kategori_id', $produk->kategori_id ?? '') === (string) $kategori->id)>{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block md:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Deskripsi Singkat</span>
                    <textarea name="deskripsi" rows="4" placeholder="Ringkasan produk untuk tampilan publik" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('deskripsi', $produk->deskripsi ?? '') }}</textarea>
                    @error('deskripsi')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block md:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Upload Gambar</span>
                    <input type="file" name="img" accept="image/*" data-product-image-input class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 shadow-sm file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:border-slate-400 hover:bg-white">
                    <p class="mt-2 text-xs text-slate-500">Format JPG, PNG, atau WEBP. Maksimal 2MB.</p>
                    @error('img')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6" data-reveal>
            <div>
                <p class="text-xs uppercase tracking-[0.24em] text-slate-500">Detail Produk</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-950">Form Detail Wajib</h2>
                <p class="mt-2 text-sm text-slate-500">Isi detail lengkap agar data siap dipakai di halaman publik.</p>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <label class="block md:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Deskripsi Lengkap</span>
                    <textarea name="deskripsi_lengkap_produk" rows="5" placeholder="Jelaskan detail teknis dan keunggulan produk" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('deskripsi_lengkap_produk', $produk->detailProduk->deskripsi_lengkap_produk ?? '') }}</textarea>
                    @error('deskripsi_lengkap_produk')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Tipe</span>
                    <input type="text" name="tipe" value="{{ old('tipe', $produk->detailProduk->tipe ?? '') }}" placeholder="Contoh: Forklift Battery" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('tipe')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Voltase</span>
                    <input type="text" name="voltase" value="{{ old('voltase', $produk->detailProduk->voltase ?? '') }}" placeholder="Contoh: 48V" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('voltase')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Kapasitas</span>
                    <input type="text" name="kapasitas" value="{{ old('kapasitas', $produk->detailProduk->kapasitas ?? '') }}" placeholder="Contoh: 600Ah" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('kapasitas')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Siklus Hidup</span>
                    <input type="text" name="siklus_hidup" value="{{ old('siklus_hidup', $produk->detailProduk->siklus_hidup ?? '') }}" placeholder="Contoh: 1200 cycle" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('siklus_hidup')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>

            <div class="mt-6 flex flex-wrap items-center gap-3">
                <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
                <a href="{{ route('admin.produk.index') }}" class="btn-outline">Batal</a>
            </div>
        </section>
    </div>

    <aside class="space-y-6 xl:sticky xl:top-24" data-reveal>
        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <p class="text-xs uppercase tracking-[0.24em] text-slate-500">Image Preview UI</p>
                    <h2 class="mt-2 text-xl font-semibold text-slate-950">{{ $isEdit ? 'Preview Edit' : 'Preview Create' }}</h2>
                </div>
                <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600">Grid Preview</span>
            </div>

            <div data-product-image-preview-grid class="mt-5 grid gap-3 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-3">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Current image</p>
                    <div class="mt-3 overflow-hidden rounded-2xl border border-slate-200 bg-white">
                        @if ($currentImageUrl)
                            <img src="{{ $currentImageUrl }}" data-product-current-image data-preview-src="{{ $currentImageUrl }}" alt="Current product image" class="h-44 w-full object-contain p-4">
                        @else
                            <div class="flex h-44 items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200 text-center text-sm text-slate-500">
                                <span>Belum ada gambar</span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-3">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Selected image</p>
                    <div class="mt-3 overflow-hidden rounded-2xl border border-dashed border-slate-300 bg-white">
                        <img src="" data-product-selected-image class="hidden h-44 w-full object-contain p-4" alt="Selected preview">
                        <div data-product-selected-placeholder class="flex h-44 items-center justify-center bg-gradient-to-br from-slate-50 to-slate-100 text-center text-sm text-slate-500">
                            <span>Upload gambar untuk melihat preview</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                <p class="text-sm font-semibold text-slate-900">Tips pengisian</p>
                <ul class="mt-3 space-y-2 text-sm text-slate-500">
                    <li>• Gunakan gambar rasio seimbang agar tabel tetap rapi.</li>
                    <li>• Detail lengkap wajib diisi sebelum submit.</li>
                    <li>• Filter kategori di tabel akan mengikuti data utama.</li>
                </ul>
            </div>
        </section>
    </aside>
</form>