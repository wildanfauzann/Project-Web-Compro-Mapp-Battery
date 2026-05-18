@php
    $salesData = \App\Models\KontakSales::all();
    $accents = [
        'from-[#f97316] to-[#d97706]',
        'from-[#334155] to-[#0f172a]',
        'from-[#0ea5e9] to-[#2563eb]',
        'from-[#ef4444] to-[#b91c1c]',
        'from-[#e11d48] to-[#be123c]',
    ];
@endphp

<div class="contact-float" data-contact-widget>
    <div id="contact-floating-panel" class="contact-float-panel hidden" data-contact-panel aria-hidden="true">
        <div class="contact-float-panel-head">
            <p class="contact-float-kicker">Hubungi Kami</p>
            <h2 class="contact-float-title">Kontak</h2>
            <p class="contact-float-subtitle">
                Pilih tim yang ingin Anda hubungi. Konsultasi cepat dan langsung ke orang yang tepat.
            </p>
            <button type="button" class="contact-float-close" data-contact-close aria-label="Tutup panel kontak">×</button>
        </div>

        <div class="contact-float-list" role="list" aria-label="Daftar kontak tim">
            @foreach ($salesData as $index => $agent)
                @php
                    $initials = strtoupper(substr($agent->nama, 0, 2));
                    $accent = $accents[$index % count($accents)];
                    $phone = preg_replace('/[^0-9]/', '', $agent->no_whatsapp);
                    if (str_starts_with($phone, '0')) {
                        $phone = '62' . substr($phone, 1);
                    }
                    $message = "Halo, saya {$agent->nama}. Saya siap membantu Anda mengenai produk kami.";
                @endphp
                <a
                    href="https://wa.me/{{ $phone }}?text={{ urlencode('Halo ' . $agent->nama . ', saya ingin konsultasi mengenai kebutuhan baterai forklift.') }}"
                    target="_blank"
                    rel="noopener"
                    class="contact-float-item"
                    role="listitem"
                >
                    <span class="contact-float-avatar-wrap">
                        <span class="contact-float-avatar bg-linear-to-br {{ $accent }}">{{ $initials }}</span>
                    </span>
                    <span class="contact-float-copy">
                        <span class="contact-float-name">{{ $agent->nama }}</span>
                        <span class="contact-float-role">{{ $agent->jabatan }}</span>
                        <span class="contact-float-message">{{ $message }}</span>
                    </span>
                    <span class="contact-float-open" aria-hidden="true">›</span>
                </a>
            @endforeach
        </div>
    </div>

    <button type="button" class="contact-float-toggle" data-contact-toggle aria-expanded="false" aria-controls="contact-floating-panel">
        <span class="contact-float-toggle-icon-wrap">
            <img src="{{ asset('images/icon/image 28.png') }}" alt="" class="contact-float-toggle-icon" width="64" height="64" loading="lazy" decoding="async" />
        </span>
        <span class="contact-float-toggle-label">Kontak</span>
    </button>
</div>
