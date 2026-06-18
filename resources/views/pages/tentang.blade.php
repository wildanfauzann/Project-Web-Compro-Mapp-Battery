@extends('layouts.main')

@section('title', 'Tentang Kami - PT. Multidaya Anugrah Perkasa')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="preload" as="image" href="{{ asset('images/hero/hero2.png') }}">
@endpush

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="reveal-on-scroll hero-bg-extended relative overflow-hidden min-h-[calc(78svh-var(--navbar-height,0px))] md:min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center" style="background-image: url('{{ asset('images/hero/hero2.png') }}'); background-size: cover; background-position: center;">
            <div class="pointer-events-none absolute inset-0 bg-[linear-gradient(92deg,rgba(4,12,36,0.68)_0%,rgba(6,18,48,0.42)_42%,rgba(6,18,48,0.18)_68%,rgba(6,18,48,0.04)_100%)]"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="hero-stage">
                    <div class="hero-copy-wrap">
                        <div class="hero-copy-shell">
                            <h1 class="hero-heading font-bold text-white drop-shadow-[0_3px_12px_rgba(0,0,0,0.36)]">
                                PT. Multidaya Anugrah Perkasa
                            </h1>
                            <p class="mt-4 text-sm md:text-base leading-relaxed text-[#e6edff] drop-shadow-[0_2px_10px_rgba(0,0,0,0.28)]">
                                Kami hadir sebagai mitra solusi industri yang mengutamakan kualitas produk, kecepatan layanan, dan ketepatan dukungan teknis untuk kebutuhan operasional bisnis Anda.
                            </p>
                            <p class="mt-3 text-sm md:text-base leading-relaxed text-[#d2ddff] drop-shadow-[0_2px_10px_rgba(0,0,0,0.26)]">
                                Berpengalaman menangani beragam kebutuhan lapangan, kami berkomitmen memberikan layanan yang profesional, transparan, dan berorientasi pada hasil jangka panjang.
                            </p>
                        </div>
                    </div>

                    <div id="about-hero-carousel" class="about-carousel-panel relative mx-auto w-full max-w-md lg:max-w-lg">
                        <div class="rounded-2xl border border-[#d9e3ff] bg-white p-3 md:p-4 shadow-[0_18px_34px_rgba(10,23,61,0.28)]">
                            <div class="relative overflow-hidden rounded-xl border border-[#d3def8]">
                                <div id="about-slide-image" class="aspect-[16/9] w-full bg-center bg-cover transition-all duration-500"></div>
                            </div>

                            <div class="mt-3 rounded-xl bg-[#f6f9ff] p-3 md:p-4">
                                <p class="text-xs md:text-sm leading-relaxed text-[#33415f]" id="about-slide-text">
                                    Solusi industri terpercaya dengan dukungan tim profesional dan layanan responsif untuk menjaga produktivitas tetap optimal.
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between">
                                <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#9eb8ff66] bg-[#edf3ff] text-lg font-bold text-[#173272] hover:bg-white transition-colors" id="about-slide-prev" aria-label="Slide sebelumnya">‹</button>
                                <span class="text-[11px] md:text-xs font-semibold uppercase tracking-[0.14em] text-[#38507f]">Profil Singkat</span>
                                <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#9eb8ff66] bg-[#edf3ff] text-lg font-bold text-[#173272] hover:bg-white transition-colors" id="about-slide-next" aria-label="Slide berikutnya">›</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Sejarah Perusahaan -->
        <section class="scroll-fade-section company-history-section mt-4 md:mt-6 py-6 md:py-8 min-h-[auto] md:min-h-[calc(106svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-6 md:mb-8">
                    {{-- <span class="inline-flex items-center rounded-full border border-[#f2cd0066] bg-[#f2cd0018] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em] text-[#f7d84a]">
                        Perjalanan Kami
                    </span> --}}
                    <h2 class="text-[clamp(1.45rem,2.9vw,2.35rem)] font-bold text-white">Sejarah PT. Multidaya Anugrah Perkasa</h2>
                    <p class="mt-2 text-sm md:text-base text-[#c7d6ff] leading-relaxed">
                        Perjalanan kami bertumbuh bersama mitra strategis global dalam menghadirkan solusi energi dan layanan industri yang terpercaya.
                    </p>
                </div>

                @php
                    $historyTimeline = [
                        ['year' => '2005', 'text' => 'Warehouse project and forklift specialist', 'side' => 'left'],
                        ['year' => '2012', 'text' => 'Reseller Hawker Battery', 'side' => 'right'],
                        ['year' => '2019', 'text' => 'TAB Traction Batteries - Distributor Tunggal TAB Traction Battery (Eropa)', 'side' => 'left'],
                        ['year' => '2023', 'text' => 'Distributor Tunggal Microtex Energy Pvt. Ltd. (India, standar kualitas Eropa)', 'side' => 'right'],
                        ['year' => '2024', 'text' => 'Distributor Resmi Hawker Traction Battery (Eropa) dan opening new branch office in Surabaya', 'side' => 'left'],
                        ['year' => '2025', 'text' => 'Distributor Resmi Roypow lithium battery.', 'side' => 'right'],
                    ];
                @endphp

                <div class="company-history-timeline">
                    <div class="company-history-line" aria-hidden="true"></div>

                    @foreach ($historyTimeline as $idx => $item)
                        <article class="company-history-item {{ $item['side'] === 'left' ? 'is-left' : 'is-right' }}" style="--history-index: {{ $idx }};">
                            <div class="company-history-side side-left {{ $item['side'] === 'left' ? '' : 'is-empty' }}">
                                @if ($item['side'] === 'left')
                                    <p class="company-history-text">{{ $item['text'] }}</p>
                                @endif
                            </div>
                            <span class="company-history-year">{{ $item['year'] }}</span>
                            <div class="company-history-side side-right {{ $item['side'] === 'right' ? '' : 'is-empty' }}">
                                @if ($item['side'] === 'right')
                                    <p class="company-history-text">{{ $item['text'] }}</p>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section 3: Visi, Misi, dan Kredibilitas -->
        <section class="scroll-fade-section about-vision-section mt-4 md:mt-6 py-4 md:py-5 min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center bg-white" data-nav-gradient="linear-gradient(180deg, #ffffff 0%, #ffffff 100%)" data-nav-glow="rgba(148, 163, 184, 0.18)">
            <div class="scroll-fade-content about-vision-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="about-vision-header text-center max-w-3xl mx-auto" style="--stagger-index: 0;">
                    {{-- <span class="about-vision-kicker">Fondasi Perusahaan</span> --}}
                    <h2 class="mt-2 text-[clamp(1.35rem,2.8vw,2.2rem)] font-bold tracking-tight text-[#0f1733]">Visi, Misi, dan Kredibilitas</h2>
                    <p class="mt-2 text-sm md:text-[0.95rem] leading-relaxed text-[#415070] max-w-2xl mx-auto">
                        Komitmen kami dirancang untuk menciptakan pertumbuhan berkelanjutan bagi industri, klien, dan masa depan energi Indonesia.
                    </p>
                </div>

                <div class="about-vision-grid mt-5 md:mt-6">
                    <article class="about-vision-card" style="--stagger-index: 1;">
                        <h3 class="about-vision-card-title">VISI</h3>
                        <p class="about-vision-card-body">
                            Menjadi pemimpin terpercaya di Indonesia dalam penyediaan solusi energi industri dan kendaraan listrik yang inovatif, berkelanjutan, dan diakui secara global.
                        </p>
                    </article>

                    <article class="about-vision-card" style="--stagger-index: 2;">
                        <h3 class="about-vision-card-title">MISI</h3>
                        <ol class="about-vision-list">
                            <li>Menyediakan produk berkualitas tinggi</li>
                            <li>Mengedepankan inovasi dan keberlanjutan</li>
                            <li>Memberikan layanan teknis dan solusi terbaik</li>
                        </ol>
                    </article>
                </div>

                <article class="about-credibility-wrap mt-5 md:mt-6" style="--stagger-index: 3;">
                    <span class="about-credibility-badge">KREDIBILITAS</span>
                    <p class="about-credibility-text">
                        Pertumbuhan kami tidak hanya diukur dari pencapaian bisnis, tetapi juga dari kemampuan menghadirkan nilai tambah bagi klien, membangun kepercayaan jangka panjang, dan mendukung keberlanjutan industri di Indonesia.
                    </p>
                </article>
            </div>
        </section>

        <!-- Section 4: Testimoni -->
        <section id="testimoni" class="scroll-fade-section about-testimoni-section mt-4 md:mt-6 py-5 md:py-6 pb-10 md:pb-14 min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))] flex items-start" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0c014c 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content about-testimoni-wrap max-w-7xl mx-auto px-4 md:px-8 w-full pt-2 md:pt-3">
                <div class="about-testimoni-header max-w-3xl mx-auto mb-6 md:mb-8 text-center">
                    {{-- <span class="about-testimoni-kicker">Client Voices</span> --}}
                    <h2 class="mt-2 text-[clamp(1.05rem,1.7vw,1.45rem)] font-bold tracking-tight text-white leading-[1.1]">Testimoni</h2>
                    <p class="mt-2 text-[0.75rem] md:text-[0.82rem] leading-[1.45] text-[#d9e2ff] max-w-lg mx-auto">
                        Ulasan dari mitra yang merasakan stabilitas, keandalan, dan dukungan layanan kami di lapangan.
                    </p>
                </div>

                @php
                    $aboutTestimonials = [
                        [
                            'name' => 'PT Sukanda Djaya',
                            'logo' => asset('images/testimoni/sukanda.png'),
                            'quote' => 'Kami puas dengan kualitas baterai forklift serta layanan profesional dari PT. Multidaya Anugrah Perkasa yang membantu menjaga operasional tetap lancar dan efisien.',
                        ],
                        [
                            'name' => 'Kiat Ananda Group',
                            'logo' => asset('images/testimoni/kiatananda.png'),
                            'quote' => 'Kualitas baterai forklift dan layanan dari PT. Multidaya Anugrah Perkasa sangat membantu meningkatkan kinerja operasional kami secara optimal dan terpercaya.',
                        ],
                        [
                            'name' => 'Wings Corporation',
                            'logo' => asset('images/testimoni/wings.png'),
                            'quote' => 'Produk baterai forklift dan layanan dari PT. Multidaya Anugrah Perkasa terbukti andal dalam mendukung kelancaran operasional kami secara konsisten.',
                        ],
                        [
                            'name' => 'Mahle',
                            'logo' => asset('images/testimoni/mahle.png'),
                            'quote' => 'Produk baterai forklift dan layanan dari PT. Multidaya Anugrah Perkasa memberikan performa yang stabil dan sangat mendukung efisiensi operasional kami.',
                        ],
                    ];
                @endphp

                <div class="about-testimoni-list mx-auto max-w-5xl grid gap-2.5 md:gap-3 md:grid-cols-2 mt-1 md:mt-2">
                    @foreach ($aboutTestimonials as $index => $testimonial)
                        <article class="about-testimoni-item group grid grid-cols-[72px_minmax(0,1fr)] gap-2.5 items-center rounded-[0.95rem] border border-[#2d2a84] bg-[rgba(255,255,255,0.04)] px-3 py-3 shadow-[0_8px_18px_rgba(0,0,0,0.12)]" style="--stagger-index: {{ $index }};">
                            <div class="about-testimoni-logo-wrap flex h-16 items-center justify-center rounded-lg bg-white p-1.5 shadow-[0_8px_16px_rgba(0,0,0,0.1)] overflow-hidden">
                                <img src="{{ $testimonial['logo'] }}" alt="{{ $testimonial['name'] }}" class="about-testimoni-logo max-h-full max-w-full object-contain transition-transform duration-300 group-hover:scale-[1.04]" width="320" height="180" loading="lazy" decoding="async" />
                            </div>

                            <div class="about-testimoni-text min-w-0 pr-1">
                                <p class="text-[9px] md:text-[10px] font-semibold uppercase tracking-[0.07em] text-[#c8d3ff]">Testimoni - {{ $testimonial['name'] }}</p>
                                <p class="mt-1 text-[0.76rem] md:text-[0.82rem] leading-[1.35] font-medium text-white line-clamp-4">
                                    "{{ $testimonial['quote'] }}"
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-4 md:mt-5 flex justify-end">
                    <a href="#" class="about-testimoni-cta inline-flex items-center gap-2 rounded-full bg-[#f2cd00] px-3.5 md:px-4 py-1.5 text-[11px] md:text-xs font-semibold text-[#0f1733] shadow-[0_8px_16px_rgba(242,205,0,0.2)] transition-transform duration-300 hover:-translate-y-0.5 hover:bg-[#ffd42b]">
                        Selengkapnya <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section 5: Kantor Kami -->
        <section id="kantor-kami" class="scroll-fade-section about-office-section mt-4 md:mt-6 py-5 md:py-7 min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center bg-white" data-nav-gradient="linear-gradient(180deg, #ffffff 0%, #ffffff 100%)" data-nav-glow="rgba(148, 163, 184, 0.18)">
            <div class="scroll-fade-content about-office-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="about-office-header max-w-3xl mx-auto text-center mb-5 md:mb-7" style="--stagger-index: 0;">
                    {{-- <span class="about-office-kicker">Lokasi Kami</span> --}}
                    <h2 class="mt-3 text-[clamp(1.5rem,2.6vw,2.35rem)] font-bold tracking-tight text-[#0f1733]">Kantor Kami</h2>
                    {{-- <p class="mt-2 text-sm md:text-[0.98rem] leading-relaxed text-[#49607f]">
                        Kami melayani dari dua lokasi kantor untuk memastikan dukungan yang lebih dekat, cepat, dan responsif.
                    </p> --}}
                </div>

                @php
                    $offices = [
                        [
                            'label' => 'HEADOFFICE',
                            'address' => 'Jl. Wibawa Mukti No. 28, Jatiasih - Bekasi 17423.',
                            'city' => 'Bekasi',
                            'lat' => -6.3043,
                            'lng' => 106.9531,
                            'zoom' => 15,
                        ],
                        [
                            'label' => 'BRANCHOFFICE',
                            'address' => 'Central Industrial Park Jl. Lingkar Timur Km. 4, Blok Kappa No. 28 Kemiri, Kec. Sidoarjo, Kab. Sidoarjo, Jawa Timur 61219',
                            'city' => 'Sidoarjo',
                            'lat' => -7.4494,
                            'lng' => 112.7183,
                            'zoom' => 15,
                        ],
                    ];
                @endphp

                <div class="about-office-layout grid gap-4 lg:grid-cols-[0.9fr_1.1fr] items-stretch">
                    <div class="about-office-info space-y-2.5 md:space-y-3">
                        @foreach ($offices as $index => $office)
                            <article id="kantor-{{ strtolower($office['city']) }}" class="about-office-card group rounded-[1.1rem] border border-[#dbe4f4] bg-[#f8fbff] p-3 md:p-3.5 shadow-[0_10px_20px_rgba(15,23,51,0.08)] transition-all duration-300 hover:-translate-y-1 hover:border-[#2c4fa8] hover:shadow-[0_16px_26px_rgba(15,23,51,0.14)]" style="--stagger-index: {{ $index }};" data-office-item data-office-index="{{ $index }}" data-office-label="{{ $office['label'] }}" data-office-city="{{ $office['city'] }}" data-office-address="{{ $office['address'] }}" data-office-lat="{{ $office['lat'] }}" data-office-lng="{{ $office['lng'] }}" data-office-zoom="{{ $office['zoom'] }}">
                                <div class="flex items-start gap-3">
                                    <div class="about-office-pin flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#0c014c] text-white shadow-[0_10px_18px_rgba(12,1,76,0.18)]">
                                        <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                            <path d="M12 21s6-4.35 6-10a6 6 0 10-12 0c0 5.65 6 10 6 10z"></path>
                                            <circle cx="12" cy="11" r="2.25"></circle>
                                        </svg>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em] text-[#6a7ea6]">{{ $office['label'] }}</p>
                                        <h3 class="about-office-city mt-1 text-[0.95rem] md:text-[1rem] font-bold text-[#0f1733]">{{ $office['city'] }}</h3>
                                        <p class="mt-1 text-[0.82rem] md:text-[0.86rem] leading-relaxed text-[#4a5a76]">{{ $office['address'] }}</p>
                                    </div>
                                </div>
                                <div class="mt-2.5 flex items-center gap-2 text-[10px] md:text-[11px] font-semibold text-[#5d6d88]">
                                    <span class="about-office-card-badge inline-flex items-center rounded-full bg-[#edf2ff] px-2.5 py-1 text-[#0c014c]">Klik untuk buka peta</span>
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($office['address']) }}" target="_blank" rel="noopener" class="about-office-card-link inline-flex items-center gap-1 rounded-full border border-[#c9d6ef] bg-white px-2.5 py-1 text-[#173272] transition-colors hover:border-[#2c4fa8] hover:bg-[#f4f7ff] hover:text-[#0c014c]">
                                        Google Maps <span aria-hidden="true">↗</span>
                                    </a>
                                </div>
                            </article>
                        @endforeach

                        <article class="rounded-[1.1rem] border border-[#e7d79a] bg-[#fff9e9] p-3 md:p-3.5 shadow-[0_10px_20px_rgba(15,23,51,0.08)]">
                            <p class="text-[0.81rem] md:text-[0.86rem] leading-relaxed text-[#4b3f1b]">
                                <strong>Kami tetap bisa melayani</strong> meskipun Anda berada di luar jangkauan kantor kami. Tim kami siap membantu secara responsif dan profesional sesuai kebutuhan.
                            </p>
                        </article>
                    </div>

                    <div class="about-office-map-shell h-full rounded-[1.4rem] border border-[#dce4f2] bg-white p-3 md:p-4 shadow-[0_16px_34px_rgba(15,23,51,0.1)] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_24px_42px_rgba(15,23,51,0.14)]">
                        <div class="about-office-map-panel flex h-full min-h-[clamp(30rem,64vh,42rem)] flex-col rounded-[1.2rem] border border-[#dce4f2] bg-[#f8fbff] p-3 md:p-4">
                            <div class="flex items-center justify-between gap-3 mb-3">
                                <div>
                                    <p class="text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em] text-[#6a7ea6]">Satellite View</p>
                                    <h3 class="mt-1 text-base md:text-lg font-bold text-[#0f1733]" data-office-active-name>HEADOFFICE, Bekasi</h3>
                                </div>
                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode('Jl. Wibawa Mukti No. 28, Jatiasih - Bekasi 17423.') }}" target="_blank" rel="noopener" data-office-active-link class="inline-flex items-center gap-2 rounded-full bg-[#0c014c] px-3.5 py-1.5 text-[10px] md:text-[11px] font-semibold text-white transition-transform duration-300 hover:-translate-y-0.5 hover:bg-[#152a77]">
                                    Buka di Google Maps <span aria-hidden="true">→</span>
                                </a>
                            </div>

                            <div id="about-office-map" class="about-office-map flex-1 min-h-[clamp(24rem,54vh,38rem)] rounded-2xl overflow-hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita" class="scroll-fade-section layanan-showcase-section mt-4 md:mt-6 py-5 md:py-7 bg-[#0C014C] min-h-[calc(106svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content berita-fit-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="max-w-4xl mx-auto mb-4 md:mb-5">
                    <div class="flex flex-col gap-4 items-center text-center w-full">
                        <div class="w-full">
                            <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.14em] text-center">Blog & Edukasi</span>
                            <h2 class="mt-2 text-[clamp(1.3rem,2.2vw,1.9rem)] leading-tight font-bold text-white text-center">Wawasan Industri dan Update Terbaru</h2>
                            <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#d6ddf8] text-center">Informasi, tips operasional, dan pembaruan kegiatan terbaru untuk mendukung keputusan yang lebih tepat.</p>
                        </div>
                    </div>
                </div>

                @php
                    $articles = [
                        [
                            'category' => 'Umum',
                            'date' => '2026-03-18 06:56:34',
                            'image' => asset('images/artikel/artikel1.png'),
                            'title' => 'Hak Anak dan Nafkah Pasca Perceraian: Panduan Praktis',
                            'description' => 'Memahami hak anak pasca perceraian membutuhkan informasi yang tepat agar proses pemenuhan nafkah berjalan adil dan berkelanjutan.',
                        ],
                        [
                            'category' => 'Jasa',
                            'date' => '2026-01-28 01:17:59',
                            'image' => asset('images/artikel/artikel2.png'),
                            'title' => 'Panduan Memilih Solusi Industri yang Tepat untuk Operasional',
                            'description' => 'Langkah-langkah sederhana untuk menentukan solusi terbaik berdasarkan kebutuhan operasional, kapasitas kerja, dan efisiensi biaya.',
                        ],
                        [
                            'category' => 'Tips',
                            'date' => '2026-01-14 15:29:55',
                            'image' => asset('images/artikel/artikel3.png'),
                            'title' => 'Tips Menjaga Performa Produk agar Tetap Stabil',
                            'description' => 'Rangkaian tips perawatan rutin yang membantu memperpanjang usia pakai produk sekaligus menjaga performa tetap konsisten.',
                        ],
                    ];
                @endphp
                <div class="space-y-2.5 md:space-y-3 max-w-4xl mx-auto w-full">
                    @foreach ($articles as $article)
                        <a href="/berita" class="berita-card grid grid-cols-[94px_1fr] md:grid-cols-[118px_1fr] gap-0 overflow-hidden rounded-xl border border-[#33448d] bg-[#f5f7ff] shadow-[0_8px_18px_rgba(0,0,0,0.14)]">
                            <div class="relative h-full min-h-28 md:min-h-30 overflow-hidden bg-[#efefef]">
                                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="berita-card-image h-full w-full object-cover" width="640" height="480" loading="lazy" decoding="async" />
                                <span class="absolute left-2 top-2 inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-0.5 text-[9px] font-bold uppercase tracking-wide text-[#0f1733]">
                                    {{ $article['category'] }}
                                </span>
                            </div>
                            <div class="p-2.5 md:p-3">
                                <p class="text-[10px] md:text-[11px] font-medium text-[#5d6b8a] mb-1">📅 {{ $article['date'] }}</p>
                                <h3 class="berita-card-title text-sm md:text-[1.02rem] font-bold leading-snug text-[#0f1733] mb-1">{{ $article['title'] }}</h3>
                                <p class="berita-card-desc text-[11px] md:text-[12px] leading-5 text-[#4c5a77] mb-2 line-clamp-2">
                                    {{ $article['description'] }}
                                </p>
                                <span class="berita-card-link inline-flex items-center gap-1.5 text-[11px] md:text-[12px] font-semibold text-[#0f1733]">
                                    Baca Selengkapnya <span aria-hidden="true">→</span>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-4 md:mt-5 flex justify-center">
                    <a href="/berita" class="inline-flex w-fit items-center justify-center rounded-lg border border-[#cad6ff66] bg-[#f5f7ff] px-4 py-2 text-[11px] md:text-xs font-semibold text-[#0f1733] hover:bg-white transition-colors">
                        Lihat Semua Artikel <span aria-hidden="true" class="ml-2">→</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const officeItems = Array.from(document.querySelectorAll('[data-office-item]'));
            const activeName = document.querySelector('[data-office-active-name]');
            const activeAddress = document.querySelector('[data-office-active-address]');
            const activeLink = document.querySelector('[data-office-active-link]');
            const mapElement = document.getElementById('about-office-map');

            if (!window.L || officeItems.length === 0 || !mapElement) {
                return;
            }

            const offices = officeItems.map((item) => ({
                label: item.dataset.officeLabel || (item.dataset.officeIndex === '0' ? 'HEADOFFICE' : 'BRANCHOFFICE'),
                city: item.dataset.officeCity,
                address: item.dataset.officeAddress,
                lat: parseFloat(item.dataset.officeLat),
                lng: parseFloat(item.dataset.officeLng),
                zoom: parseInt(item.dataset.officeZoom, 10) || 15,
            }));

            const map = L.map(mapElement, {
                scrollWheelZoom: false,
                zoomControl: true,
            });

            const satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                maxZoom: 19,
                attribution: 'Tiles &copy; Esri',
            });

            const labelsLayer = L.tileLayer('https://services.arcgisonline.com/ArcGIS/rest/services/Reference/World_Boundaries_and_Places/MapServer/tile/{z}/{y}/{x}', {
                maxZoom: 19,
                attribution: 'Labels &copy; Esri',
                pane: 'overlayPane',
            });

            satelliteLayer.addTo(map);
            labelsLayer.addTo(map);

            const markerIcon = L.divIcon({
                className: 'about-office-marker',
                html: '<span class="about-office-marker-dot"></span>',
                iconSize: [22, 22],
                iconAnchor: [11, 11],
            });

            const markers = offices.map((office) => {
                const marker = L.marker([office.lat, office.lng], { icon: markerIcon }).addTo(map);
                const googleUrl = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(office.address)}`;
                marker.bindPopup(`
                    <div style="min-width: 180px; font-family: 'IBM Plex Sans', sans-serif;">
                        <div style="font-size: 12px; font-weight: 800; letter-spacing: 0.08em; color: #6a7ea6; text-transform: uppercase;">${office.label}</div>
                        <div style="margin-top: 4px; font-size: 15px; font-weight: 700; color: #0f1733;">${office.city}</div>
                        <div style="margin-top: 6px; font-size: 13px; line-height: 1.45; color: #4a5a76;">${office.address}</div>
                        <a href="${googleUrl}" target="_blank" rel="noopener" style="display:inline-flex; margin-top:10px; align-items:center; gap:6px; color:#0c014c; font-size:13px; font-weight:700; text-decoration:none;">Buka Google Maps →</a>
                    </div>
                `);
                return marker;
            });

            const bounds = L.latLngBounds(offices.map((office) => [office.lat, office.lng]));
            map.fitBounds(bounds.pad(0.25));

            const setActiveOffice = (index) => {
                const office = offices[index];
                if (!office) {
                    return;
                }

                officeItems.forEach((item) => {
                    item.classList.toggle('is-active', Number(item.dataset.officeIndex) === index);
                });

                activeName.textContent = `${office.label}, ${office.city}`;
                if (activeAddress) {
                    activeAddress.textContent = office.address;
                }
                activeLink.href = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(office.address)}`;

                requestAnimationFrame(() => {
                    map.invalidateSize();
                    map.setView([office.lat, office.lng], office.zoom, { animate: true });
                    markers[index].openPopup();
                });
            };

            officeItems.forEach((item) => {
                item.addEventListener('click', () => setActiveOffice(Number(item.dataset.officeIndex)));
            });

            const searchParams = new URLSearchParams(window.location.search);
            const requestedOffice = (searchParams.get('office') || '').toLowerCase();
            const hashOffice = (window.location.hash || '').replace('#', '').toLowerCase();

            let initialOfficeIndex = 0;
            if (requestedOffice === 'sidoarjo' || hashOffice === 'kantor-sidoarjo') {
                initialOfficeIndex = 1;
            } else if (requestedOffice === 'bekasi' || hashOffice === 'kantor-bekasi') {
                initialOfficeIndex = 0;
            }

            setActiveOffice(initialOfficeIndex);
        });
    </script>
@endsection
