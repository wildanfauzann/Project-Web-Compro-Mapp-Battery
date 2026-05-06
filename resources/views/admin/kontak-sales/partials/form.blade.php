@php
    $isEdit = isset($sales) && $sales;
    $currentImage = $isEdit && $sales->foto ? asset($sales->foto) : null;
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
                    <h2 class="text-2xl font-semibold text-slate-950">Informasi Pribadi & Kontak</h2>
                    <p class="mt-2 text-sm text-slate-500">Nama, area, dan informasi kontak untuk pelanggan.</p>
                </div>
            </div>

            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Nama Lengkap</span>
                    <input type="text" name="nama" value="{{ old('nama', $sales->nama ?? '') }}" required placeholder="Contoh: Budi Santoso" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('nama')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Jabatan / Posisi</span>
                    <input type="text" name="jabatan" value="{{ old('jabatan', $sales->jabatan ?? '') }}" placeholder="Contoh: Regional Manager" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('jabatan')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block sm:col-span-2">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Area Cakupan (Coverage)</span>
                    <input type="text" name="area" value="{{ old('area', $sales->area ?? '') }}" placeholder="Contoh: Jawa Timur & Bali" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('area')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Nomor WhatsApp</span>
                    <input type="text" name="no_whatsapp" value="{{ old('no_whatsapp', $sales->no_whatsapp ?? '') }}" placeholder="Contoh: 628123456789" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    <p class="mt-1 text-xs text-slate-500">Gunakan format 628... tanpa spasi atau karakter khusus.</p>
                    @error('no_whatsapp')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>

                <label class="block">
                    <span class="mb-2 block text-sm font-semibold text-slate-700">Alamat Email</span>
                    <input type="email" name="email" value="{{ old('email', $sales->email ?? '') }}" placeholder="Contoh: budi@multidaya.co.id" class="w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-400 focus:bg-white focus:ring-4 focus:ring-slate-200">
                    @error('email')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>

            <div class="mt-6 flex flex-wrap items-center gap-3">
                <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
                <a href="{{ route('admin.kontak-sales.index') }}" class="btn-outline">Batal</a>
            </div>
        </section>
    </div>

    <aside class="space-y-6 xl:sticky xl:top-24" data-reveal>
        <section class="rounded-3xl border border-slate-200 bg-white p-5 shadow-sm lg:p-6">
            <h2 class="text-xl font-semibold text-slate-950">Foto Profil</h2>
            <p class="mt-1 text-sm text-slate-500">Upload pas foto profesional (Opsional).</p>
            
            <div class="mt-5">
                <label class="block">
                    <input type="file" name="foto" accept="image/*" class="block w-full rounded-2xl border border-dashed border-slate-300 bg-slate-50 px-4 py-3 text-sm text-slate-700 file:mr-4 file:rounded-xl file:border-0 file:bg-slate-950 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white">
                    @error('foto')<p class="mt-2 text-sm text-rose-600">{{ $message }}</p>@enderror
                </label>
            </div>

            @if ($isEdit)
                <div class="mt-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Preview Foto Lama</p>
                    <div class="mt-2 overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 p-2 text-center">
                        @if ($currentImage)
                            <img src="{{ $currentImage }}" class="mx-auto h-32 w-32 rounded-full object-cover shadow-sm" alt="Foto">
                        @else
                            <div class="h-32 flex items-center justify-center text-sm text-slate-500">Tidak ada foto</div>
                        @endif
                    </div>
                </div>
            @endif
        </section>
    </aside>
</form>
