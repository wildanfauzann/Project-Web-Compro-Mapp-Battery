@php
    $contactAgents = [
        [
            'name' => 'Aurel',
            'role' => 'Konsultan Produk',
            'initials' => 'AU',
            'accent' => 'from-[#f97316] to-[#d97706]',
            'message' => 'Butuh rekomendasi baterai forklift yang tepat? Saya siap membantu memilih solusi terbaik sesuai kebutuhan operasional Anda.',
            'phone' => '628123450001',
        ],
        [
            'name' => 'Azzahra',
            'role' => 'Customer Care',
            'initials' => 'AZ',
            'accent' => 'from-[#334155] to-[#0f172a]',
            'message' => 'Saya siap memberikan informasi dan penawaran dengan cepat dan jelas. Hubungi saya sekarang untuk pelayanan terbaik.',
            'phone' => '628123450002',
        ],
        [
            'name' => 'Angga',
            'role' => 'Sales Executive',
            'initials' => 'AN',
            'accent' => 'from-[#0ea5e9] to-[#2563eb]',
            'message' => 'Ingin harga kompetitif dengan kualitas terjamin? Saya akan bantu menyesuaikan kebutuhan Anda dengan budget yang tepat.',
            'phone' => '628123450003',
        ],
        [
            'name' => 'Kevin',
            'role' => 'Technical Advisor',
            'initials' => 'KE',
            'accent' => 'from-[#ef4444] to-[#b91c1c]',
            'message' => 'Jika ada kendala atau butuh penjelasan teknis, saya siap membantu dengan solusi yang mudah dipahami dan tepat sasaran.',
            'phone' => '628123450004',
        ],
        [
            'name' => 'Annisa',
            'role' => 'Support Specialist',
            'initials' => 'AN',
            'accent' => 'from-[#e11d48] to-[#be123c]',
            'message' => 'Tingkatkan performa forklift Anda dengan konsultasi yang cepat, ramah, dan fokus pada ketahanan operasional jangka panjang.',
            'phone' => '628123450005',
        ],
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
            @foreach ($contactAgents as $agent)
                <a
                    href="https://wa.me/{{ $agent['phone'] }}?text={{ urlencode('Halo ' . $agent['name'] . ', saya ingin konsultasi mengenai kebutuhan baterai forklift.') }}"
                    target="_blank"
                    rel="noopener"
                    class="contact-float-item"
                    role="listitem"
                >
                    <span class="contact-float-avatar-wrap">
                        <span class="contact-float-avatar bg-linear-to-br {{ $agent['accent'] }}">{{ $agent['initials'] }}</span>
                    </span>
                    <span class="contact-float-copy">
                        <span class="contact-float-name">{{ $agent['name'] }}</span>
                        <span class="contact-float-role">{{ $agent['role'] }}</span>
                        <span class="contact-float-message">{{ $agent['message'] }}</span>
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
