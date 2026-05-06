<div id="admin-delete-modal" class="admin-modal hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-950/60 px-4 py-6">
    <div class="admin-modal-panel w-full max-w-lg rounded-3xl border border-slate-200 bg-white p-6 shadow-2xl">
        <div class="flex items-start gap-4">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-100 text-rose-700">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.3 4.3l-8 14A2 2 0 003.1 21h17.8a2 2 0 001.7-2.7l-8-14a2 2 0 00-3.5 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01" />
                </svg>
            </div>

            <div class="flex-1">
                <p class="text-xs uppercase tracking-[0.24em] text-slate-500">Delete Confirmation Modal</p>
                <h3 class="mt-2 text-xl font-semibold text-slate-950">Hapus data produk?</h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">Tindakan ini akan menghapus data <span id="admin-delete-name" class="font-semibold text-slate-900">produk ini</span> secara permanen.</p>
            </div>
        </div>

        <form id="admin-delete-form" method="POST" class="mt-6 flex flex-wrap items-center justify-end gap-3">
            @csrf
            @method('DELETE')
            <button type="button" id="admin-delete-cancel" class="btn-outline">Batal</button>
            <button type="submit" class="rounded-2xl bg-rose-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-rose-700">Ya, hapus</button>
        </form>
    </div>
</div>