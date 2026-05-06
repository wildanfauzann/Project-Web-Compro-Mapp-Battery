@php
    $isEdit = isset($artikel) && $artikel;
    $currentImage = $isEdit ? asset($artikel->gambar_utama) : null;
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
                    <h2 class="text-2xl font-semibold text-slate-950">Konten Artikel</h2>
                    <p class="mt-2 text-sm text-slate-500">Judul, deskripsi, dan pengelompokan topik.</p>
                </div>
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <label class="block sm:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Judul Berita/Artikel</span>
                    <input type="text" name="judul" value="{{ old('judul', $artikel->judul ?? '') }}" required placeholder="Masukkan judul..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('judul')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Kategori Artikel</span>
                    <select name="kategori_artikel" required class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                        <option value="">Pilih kategori...</option>
                        <option value="editorial" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'editorial')>Editorial</option>
                        <option value="visit" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'visit')>Visit Story</option>
                        <option value="principal" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'principal')>Principal Story</option>
                        <option value="exhibition" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'exhibition')>Exhibition</option>
                        <option value="training" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'training')>Training</option>
                        <option value="installation" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'installation')>Installation</option>
                        <option value="unit_testing" @selected(old('kategori_artikel', $artikel->kategori_artikel ?? '') === 'unit_testing')>Unit Testing</option>
                    </select>
                    @error('kategori_artikel')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Label Topik</span>
                    <input type="text" name="label" value="{{ old('label', $artikel->label ?? '') }}" placeholder="Contoh: FORKLIFT INDONESIA" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('label')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block sm:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Hashtag / Tagar</span>
                    <input type="text" name="tag" value="{{ old('tag', $artikel->tag ?? '') }}" placeholder="Contoh: Operational Insight" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('tag')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block sm:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Isi / Deskripsi Artikel</span>
                    <textarea name="deskripsi" rows="8" required placeholder="Tulis paragraf artikel di sini..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('deskripsi', $artikel->deskripsi ?? '') }}</textarea>
                    @error('deskripsi')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>

            <div class="mt-6 flex flex-wrap items-center gap-3">
                <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
                <a href="{{ route('admin.berita.index') }}" class="btn-outline">Batal</a>
            </div>
        </section>
    </div>

    <aside class="space-y-6 xl:sticky xl:top-24" data-reveal>
        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6">
            <h2 class="text-xl font-semibold text-slate-950">Gambar Utama (Thumbnail)</h2>
            <p class="mt-1 text-sm text-slate-500">Pilih gambar resolusi tinggi (maks 2MB).</p>
            
            <div class="mt-5">
                <label class="block">
                    <input type="file" name="gambar_utama" accept="image/*" {{ $isEdit ? '' : 'required' }} class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white">
                    @error('gambar_utama')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>

            @if ($isEdit)
                <div class="mt-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Preview Gambar Lama</p>
                    <div class="mt-2 overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 p-2">
                        @if ($currentImage)
                            <img src="{{ $currentImage }}" class="h-44 w-full object-cover rounded-xl" alt="Thumbnail">
                        @else
                            <div class="h-44 flex items-center justify-center text-sm text-slate-500">Tidak ada gambar</div>
                        @endif
                    </div>
                </div>
            @endif
        </section>
    </aside>
</form>
