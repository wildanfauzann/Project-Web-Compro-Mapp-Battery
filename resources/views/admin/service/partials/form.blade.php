@php
    $isEdit = isset($layanan) && $layanan;
    $currentImage = $isEdit ? asset($layanan->image) : null;
    $currentSideImage = $isEdit && $layanan->side_image ? asset($layanan->side_image) : null;
    
    // Format array to text for textarea
    $detailPointsText = '';
    if ($isEdit && is_array($layanan->detail_points)) {
        $detailPointsText = implode("\n", $layanan->detail_points);
    }
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
                    <h2 class="text-2xl font-semibold text-slate-950">Informasi Utama</h2>
                    <p class="mt-2 text-sm text-slate-500">Judul dan ringkasan layanan.</p>
                </div>
            </div>

            <div class="mt-6 grid gap-4">
                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Nama Layanan (Title)</span>
                    <input type="text" name="title" value="{{ old('title', $layanan->title ?? '') }}" required placeholder="Masukkan nama layanan" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('title')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Deskripsi Singkat</span>
                    <textarea name="description" rows="4" placeholder="Ringkasan layanan untuk tampilan list..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('description', $layanan->description ?? '') }}</textarea>
                    @error('description')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Gambar Utama (Thumbnail)</span>
                    <input type="file" name="image" accept="image/*" {{ $isEdit ? '' : 'required' }} class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white">
                    @error('image')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>
        </section>

        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6" data-reveal>
            <div>
                <h2 class="text-2xl font-semibold text-slate-950">Detail Halaman</h2>
                <p class="mt-2 text-sm text-slate-500">Penjelasan panjang dan poin-poin fitur layanan.</p>
            </div>

            <div class="mt-6 grid gap-4">
                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Intro Detail (Paragraf Pertama)</span>
                    <textarea name="detail_intro" rows="4" placeholder="Paragraf penjelasan di halaman detail..." class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('detail_intro', $layanan->detail_intro ?? '') }}</textarea>
                    @error('detail_intro')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Poin-poin Detail (List)</span>
                    <p class="mb-2 text-xs text-slate-500">Pisahkan setiap poin dengan menekan tombol Enter (baris baru).</p>
                    <textarea name="detail_points" rows="6" placeholder="- Poin satu&#10;- Poin dua" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">{{ old('detail_points', $detailPointsText) }}</textarea>
                    @error('detail_points')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <div class="grid gap-4 sm:grid-cols-2">
                    <label class="block">
                        <span class="mb-2 block text-sm font-semibold text-slate-700">Gambar Samping (Side Image)</span>
                        <input type="file" name="side_image" accept="image/*" class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white">
                        @error('side_image')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                    </label>

                    <label class="block">
                        <span class="mb-2 block text-sm font-semibold text-slate-700">Gallery (Multiple Image)</span>
                        <input type="file" name="gallery[]" accept="image/*" multiple class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white">
                        <p class="mt-1 text-xs text-slate-500">Bisa memilih lebih dari 1 gambar</p>
                        @error('gallery')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                        @error('gallery.*')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                    </label>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap items-center gap-3">
                <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
                <a href="{{ route('admin.layanan.index') }}" class="btn-outline">Batal</a>
            </div>
        </section>
    </div>

    <aside class="space-y-6 xl:sticky xl:top-24" data-reveal>
        @if ($isEdit)
            <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6">
                <h2 class="text-xl font-semibold text-slate-950">Gambar Saat Ini</h2>
                
                <div class="mt-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Gambar Utama</p>
                    <div class="mt-2 overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 p-2">
                        @if ($currentImage)
                            <img src="{{ $currentImage }}" class="h-40 w-full object-cover rounded-xl" alt="Utama">
                        @else
                            <div class="h-40 flex items-center justify-center text-sm text-slate-500">Tidak ada gambar</div>
                        @endif
                    </div>
                </div>

                <div class="mt-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Gambar Samping</p>
                    <div class="mt-2 overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 p-2">
                        @if ($currentSideImage)
                            <img src="{{ $currentSideImage }}" class="h-32 w-full object-cover rounded-xl" alt="Samping">
                        @else
                            <div class="h-32 flex items-center justify-center text-sm text-slate-500">Tidak ada gambar</div>
                        @endif
                    </div>
                </div>

                <div class="mt-5">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Gallery ({{ is_array($layanan->gallery) ? count($layanan->gallery) : 0 }})</p>
                    <div class="mt-2 grid grid-cols-2 gap-2">
                        @if (is_array($layanan->gallery) && count($layanan->gallery) > 0)
                            @foreach ($layanan->gallery as $galImg)
                                <img src="{{ asset($galImg) }}" class="h-20 w-full object-cover rounded-lg border border-slate-200" alt="Gallery">
                            @endforeach
                        @else
                            <div class="col-span-2 h-20 flex items-center justify-center bg-slate-50 rounded-lg text-sm text-slate-500 border border-slate-200">Kosong</div>
                        @endif
                    </div>
                    <p class="mt-2 text-xs text-rose-500">*Mengupload gallery baru akan menimpa gallery lama secara otomatis.</p>
                </div>
            </section>
        @endif
    </aside>
</form>
