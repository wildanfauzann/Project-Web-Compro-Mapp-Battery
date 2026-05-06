<!-- Delete Modal -->
<div id="delete-modal-{{ $layanan->id }}" class="fixed inset-0 z-50 hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm transition-opacity" data-modal-close></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div class="relative w-full max-w-md transform overflow-hidden rounded-3xl bg-white p-6 text-left shadow-2xl transition-all">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-rose-100 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-rose-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-1 sm:mt-0">
                        <h3 class="text-lg font-semibold text-slate-900">Hapus Layanan</h3>
                        <p class="mt-2 text-sm text-slate-500">Anda yakin ingin menghapus layanan <strong>{{ $layanan->title }}</strong>? Tindakan ini tidak dapat dibatalkan dan semua gambar terkait akan dihapus dari server.</p>
                    </div>
                </div>
                
                <div class="mt-6 flex gap-3 sm:mt-5 sm:justify-end">
                    <button type="button" data-modal-close class="btn-outline">Batal</button>
                    <form method="POST" action="{{ route('admin.layanan.destroy', $layanan) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-primary !bg-rose-600 !ring-rose-200 hover:!bg-rose-700">Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple script for this specific modal instance
    document.addEventListener('DOMContentLoaded', () => {
        const trigger = document.querySelector('[data-modal-target="delete-modal-{{ $layanan->id }}"]');
        const modal = document.getElementById('delete-modal-{{ $layanan->id }}');
        const closes = modal.querySelectorAll('[data-modal-close]');
        
        trigger?.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
        
        closes.forEach(c => {
            c.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        });
    });
</script>
