@extends('layouts.main')

@section('title', 'PT. Multidaya Anugrah Perkasa - Homepage')

@push('head')
    <link rel="preload" as="image" href="{{ asset('images/hero/hero1.png') }}">
@endpush

@section('content')
    @php
        $products = [
            [
                'name' => 'BATTERY',
                'category' => 'battery',
                'image' => asset('images/products/HeroProduct.jpg'),
                'description' => 'Dirancang khusus untuk aplikasi penggerak (traction) pada kendaraan listrik industri seperti forklift, scissor lift dll.',
            ],
            [
                'name' => 'CHARGER',
                'category' => 'charger',
                'image' => asset('images/hero/Battery Hero.png'),
                'description' => 'Pengisian cepat, aman, dan efisien untuk performa optimal.',
            ],
            [
                'name' => 'ACCESSORIES',
                'category' => 'accessories',
                'image' => asset('images/hero/AccesoriesHero.jpeg'),
                'description' => 'Pelengkap berkualitas untuk meningkatkan kinerja dan keamanan.',
            ],
        ];

        $featuredProducts = [
            [
                'name' => 'Traction Battery Hawker',
                'image' => asset('images/product/tractionhawcker.png'),
                'description' => 'Baterai daya dengan tingkat keandalan tinggi untuk kebutuhan forklift industri dari pemakaian ringan hingga berat.',
            ],
            [
                'name' => 'Traction Battery Microtex',
                'image' => asset('images/product/tractionmicrotex.png'),
                'description' => 'Baterai forklift internasional produksi India dengan standar kualitas Eropa.',
            ],
            [
                'name' => 'Semi Traction',
                'image' => asset('images/product/semitrac.png'),
                'description' => 'Baterai semi-traksi untuk kebutuhan kerja yang konsisten dan stabil.',
            ],
            [
                'name' => 'Lithium',
                'image' => asset('images/product/lithium.png'),
                'description' => 'Solusi lithium untuk produktivitas lebih tinggi, waktu pengisian lebih singkat, dan fleksibilitas tegangan yang luas.',
            ],
            [
                'name' => 'Charger High Frequency',
                'image' => asset('images/product/chargerhigh.png'),
                'description' => 'Charger modern berfrekuensi tinggi untuk pengisian yang efisien dan ringkas.',
            ],
            [
                'name' => 'Charger Low Frequency',
                'image' => asset('images/product/chargerlow.png'),
                'description' => 'Charger frekuensi rendah yang kuat, stabil, dan cocok untuk kebutuhan pengisian standar industri.',
            ],
            [
                'name' => 'BFS & WaterTank',
                'image' => asset('images/product/watertank.png'),
                'description' => 'Sistem pengisian air baterai yang membantu perawatan lebih praktis dan terjaga.',
            ],
            [
                'name' => 'Connector',
                'image' => asset('images/product/connector.png'),
                'description' => 'Komponen penghubung antar sel untuk memastikan aliran arus tetap optimal.',
            ],
            [
                'name' => 'Plug / Socket',
                'image' => asset('images/product/Plug.png'),
                'description' => 'Terminal utama penghubung baterai dengan forklift atau charger agar sistem bekerja aman dan efisien.',
            ],
        ];

        $heroVideo = [
    'title' => 'MAP Battery Exhibition',
    'youtube' =>'https://www.youtube.com/embed/CVDtXs1KACw?autoplay=1&mute=1&loop=1&playlist=CVDtXs1KACw',
    'description' => 'Saksikan momen partisipasi MAP Battery dalam pameran industri, menampilkan inovasi produk, teknologi baterai terkini, serta komitmen kami dalam mendukung kebutuhan energi industri yang lebih efisien dan berkelanjutan.',
];
    @endphp

    <main>
        <section id="beranda" class="scroll-fade-section in-view hero-bg-extended relative overflow-hidden bg-cover bg-center" data-nav-gradient="linear-gradient(120deg, #ffe082 0%, #f2cd00 32%, #ff9f1c 100%)" data-nav-glow="rgba(242, 205, 0, 0.45)" style="background-image: url('{{ asset('images/hero/hero1.png') }}');">
            <div class="absolute inset-0 bg-black/45"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="hero-stage">
                    <div class="scroll-fade-content hero-scroll-copy hero-copy-wrap w-full">
                        <div class="hero-copy-shell">
                            <h1 class="hero-heading font-bold text-white mb-2 drop-shadow-lg">PT. Multidaya Anugrah Perkasa</h1>
                            <p class="hero-tagline font-semibold uppercase tracking-wide text-slate-100 drop-shadow">POWERING MOBILITY ENERGIZING THE FUTURE</p>
                            <p class="hero-lead text-slate-100 drop-shadow">
                                Menyediakan traction battery, charger, dan layanan pendukung berkualitas tinggi untuk forklift dan peralatan material handling. Membantu bisnis Anda mengurangi downtime, meningkatkan produktivitas, dan menjaga operasional tetap berjalan optimal.
                            </p>
                        </div>
                    </div>

                    <section id="tentang" class="scroll-fade-section scroll-fade-content hero-embedded-section" data-nav-gradient="linear-gradient(120deg, #fff9c4 0%, #f4f4f4 50%, #c8e6c9 100%)" data-nav-glow="rgba(185, 246, 202, 0.38)">
                        <div class="about-carousel-panel relative mx-auto w-full max-w-md lg:max-w-lg">
                            <div class="rounded-2xl border border-[#d9e3ff] bg-white p-3 md:p-4 shadow-[0_18px_34px_rgba(10,23,61,0.28)]">
                                <div class="relative overflow-hidden rounded-xl border border-[#d3def8]">
                                    <div class="relative aspect-video overflow-hidden rounded-2xl">
    <iframe
        class="absolute inset-0 h-full w-full"
        src="{{ $heroVideo['youtube'] }}"
        title="{{ $heroVideo['title'] }}"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen>
    </iframe>
</div>
                                </div>

                                <div class="mt-3 rounded-xl bg-[#f6f9ff] p-3 md:p-4">
                                    <div class="hero-video-badges mb-2">
                                        <span class="inline-flex w-fit items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-[#0f1733]">Microtex</span>
                                    </div>
                                    <h3 class="text-sm md:text-base font-bold leading-tight text-[#0f1733] mb-1.5">{{ $heroVideo['title'] }}</h3>
                                    <p class="text-xs md:text-sm leading-relaxed text-[#33415f] line-clamp-3">
                                        {{ $heroVideo['description'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>


        {{-- Section 2 --}}

        <section class="scroll-fade-section layanan-showcase-section bg-[#0C014C] py-7 md:py-9 min-h-[auto] md:min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="max-w-4xl mx-auto text-center mb-5 md:mb-6">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.15em]">Keunggulan Kami</span>
                    <h2 class="mt-3 text-[clamp(1.6rem,3.25vw,2.6rem)] leading-tight font-bold text-white">Mengapa Perusahaan Industri Mempercayai Kami?</h2>
                    <p class="mt-2.5 text-[clamp(0.84rem,1.15vw,1.08rem)] leading-relaxed text-[#d9e4ff] max-w-3xl mx-auto">
                        Produk dan layanan kami dirancang untuk mendukung operasional industri yang menuntut keandalan tinggi, efisiensi biaya, serta produktivitas yang konsisten setiap hari.</p>
                </div>

                <div class="grid gap-3 md:gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 12h5m6 0h5M7 9v6m10-6v6M9 6h6v12H9z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Efisiensi Energi Maksimal</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Mengoptimalkan penggunaan daya untuk membantu menekan biaya operasional tanpa mengorbankan performa kerja.</p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.8 12.2l1.7 1.7 2.8-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Keandalan yang Teruji</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Dirancang untuk menghadapi penggunaan intensif dengan performa yang stabil dan umur pakai yang lebih panjang.</p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><circle cx="17" cy="17" r="3" stroke="currentColor" stroke-width="1.8"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Informasi yang Transparan</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Mulai dari spesifikasi produk hingga layanan purnajual, kami memberikan informasi yang jelas dan dapat dipercaya.</p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4v16M4 12h16M7.8 7.8l8.4 8.4M16.2 7.8l-8.4 8.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Teknologi yang Terus Berkembang</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Menghadirkan solusi energi modern yang mengikuti kebutuhan industri dan perkembangan teknologi terkini.</p>
                    </article>
                </div>

                <div class="mt-5 md:mt-6 flex flex-wrap items-center justify-center gap-2.5 md:gap-3">
                    <a href="#testimoni" class="inline-flex items-center justify-center rounded-full border border-[#0f1733] bg-[#f2cd00] px-6 md:px-8 py-2.5 text-xs md:text-sm font-semibold text-[#0f1733] hover:bg-[#e8c200] transition-colors">
                        Lihat Testimoni
                    </a>
                    <a href="#produk" class="inline-flex items-center justify-center rounded-full border border-[#f2cd00] bg-[#0f1733] px-6 md:px-8 py-2.5 text-xs md:text-sm font-semibold text-white hover:bg-[#1a2548] transition-colors">
                        Lihat Produk
                    </a>
                </div>
            </div>
        </section>


        {{-- Section 3 --}}

        <section id="produk" class="scroll-fade-section in-view produk-showcase-section bg-white py-6 md:py-7 min-h-[auto] md:min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f4f8 55%, #e9edf5 100%)" data-nav-glow="rgba(120, 144, 156, 0.28)" style="background-color:#ffffff;">
            <div class="scroll-fade-content produk-showcase-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-4 md:mb-5">
                    <span class="inline-flex items-center rounded-full bg-[#0f1733] text-[#f2cd00] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em]">Produk Unggulan</span>
                    <h2 class="mt-2.5 text-[clamp(1.4rem,2.7vw,2.25rem)] leading-tight font-bold text-[#0f1733]">Solusi Lengkap untuk Sistem Energi Forklift dan Material Handling</h2>
                    <p class="mt-1.5 text-[clamp(0.78rem,0.95vw,0.92rem)] leading-relaxed text-[#4b5976]">
                        Mulai dari traction battery, charger industri, hingga aksesoris pendukung, kami menyediakan solusi terintegrasi untuk menjaga produktivitas dan keandalan operasional bisnis Anda.</p>
                </div>

                <div class="grid gap-2.5 md:gap-3.5 md:grid-cols-3">
                    @foreach ($products as $product)
                        <a href="{{ url('/produk?category=' . urlencode($product['category'])) }}" class="produk-showcase-card group relative overflow-hidden rounded-2xl border border-[#2d3d88] bg-[#0f1733] min-h-56 md:min-h-68 shadow-[0_14px_30px_rgba(0,0,0,0.25)]">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="produk-showcase-image absolute inset-0 h-full w-full object-cover" width="640" height="480" loading="lazy" decoding="async" />
                            <div class="absolute inset-0 bg-linear-to-t from-[#090e25f5] via-[#0d1538b8] to-[#0f17331f]"></div>

                            <div class="produk-showcase-content relative z-10 h-full flex flex-col justify-end p-3.5 md:p-4">
                                <span class="produk-showcase-line mb-1.5 inline-block h-1.5 w-8 rounded-full bg-[#f2cd00]"></span>
                                <h3 class="produk-showcase-title text-[1.45rem] md:text-[1.75rem] leading-none font-bold text-white">{{ $product['name'] }}</h3>
                                <p class="produk-showcase-desc mt-1.5 text-[11px] md:text-[13px] leading-5 md:leading-6 text-[#d7e0ff] line-clamp-3">
                                    {{ $product['description'] }}
                                </p>
                                <span class="produk-showcase-btn mt-3 inline-flex w-fit items-center rounded-full border border-[#f2cd00] px-3.5 py-1 text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#f2cd00]">
                                    Selengkapnya
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>


        {{-- Section 4 --}}

        <section id="layanan" class="scroll-fade-section layanan-showcase-section py-6 md:py-7 min-h-[auto] md:min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content produk-showcase-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-4 md:mb-5">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em]">Layanan Unggulan</span>
                    <h2 class="mt-2.5 text-[clamp(1.4rem,2.7vw,2.25rem)] leading-tight font-bold text-white">Layanan Profesional untuk Menjaga Produktivitas Operasional</h2>
                    <p class="mt-1.5 text-[clamp(0.78rem,0.95vw,0.92rem)] leading-relaxed text-[#cfd9ff]">
                        Kami tidak hanya menyediakan produk, tetapi juga memastikan investasi Anda tetap optimal melalui layanan purnajual, pelatihan operator, dan solusi trade-in yang terencana.</p>
                </div>

                @php
                    $services = [
                        [
                            'slug' => 'after-sales-services',
                            'title' => 'After Sales Services',
                            'image' => asset('images/hero/AfterSalesHero.jpg'),
                            'description' => 'Program purnajual 3 kali per tahun (setiap 4 bulan) mencakup preventive maintenance, cek level air aki, pembersihan korosi, cek voltase serta BJ, termasuk monitoring data pengisian dan evaluasi umur baterai untuk menekan risiko downtime.',
                        ],
                        [
                            'slug' => 'training-battery',
                            'title' => 'Training Battery',
                            'image' => asset('images/hero/TrainingHero.jpg'),
                            'description' => 'Pelatihan teknis dan kebiasaan kerja operator untuk pengisian, perawatan, dan penggunaan baterai yang benar agar umur pakai lebih panjang, performa stabil, dan biaya operasional gudang lebih terkendali.',
                        ],
                        [
                            'slug' => 'trade-in',
                            'title' => 'Trade In',
                            'image' => asset('images/hero/Trade.jpeg'),
                            'description' => 'Solusi tukar tambah baterai lama ke unit yang lebih siap pakai dengan proses evaluasi kondisi yang transparan, sehingga perencanaan anggaran penggantian aset menjadi lebih ringan dan terukur.',
                        ],
                    ];
                @endphp

                <div class="grid gap-2.5 md:gap-3.5 md:grid-cols-3">
                    @foreach ($services as $service)
                        <a href="{{ url('/layanan?service=' . urlencode($service['slug']) . '#layanan-detail-section') }}" class="produk-showcase-card group relative overflow-hidden rounded-2xl border border-[#2d3d88] bg-[#0f1733] min-h-56 md:min-h-68 shadow-[0_14px_30px_rgba(0,0,0,0.25)]">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="produk-showcase-image absolute inset-0 h-full w-full object-cover" width="640" height="480" loading="lazy" decoding="async" />
                            <div class="absolute inset-0 bg-linear-to-t from-[#090e25f5] via-[#0d1538b8] to-[#0f17331f]"></div>

                            <div class="produk-showcase-content relative z-10 h-full flex flex-col justify-end p-3.5 md:p-4">
                                <span class="produk-showcase-line mb-1.5 inline-block h-1.5 w-8 rounded-full bg-[#f2cd00]"></span>
                                <h3 class="produk-showcase-title text-[1.45rem] md:text-[1.75rem] leading-none font-bold text-white">{{ $service['title'] }}</h3>
                                <p class="produk-showcase-desc mt-1.5 text-[11px] md:text-[13px] leading-5 md:leading-6 text-[#d7e0ff] line-clamp-3">
                                    {{ $service['description'] }}
                                </p>
                                <span class="produk-showcase-btn mt-3 inline-flex w-fit items-center rounded-full border border-[#f2cd00] px-3.5 py-1 text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#f2cd00]">
                                    Selengkapnya
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Section 5 --}}

        <section id="testimoni" class="scroll-fade-section py-10 md:py-14 bg-white min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f6ff 55%, #e5edff 100%)" data-nav-glow="rgba(120, 144, 255, 0.2)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                @php
                    $testimonialClients = [
                        ['name' => 'ABC', 'logo' => asset('images/testimoni/ABC.png')],
                        ['name' => 'Alfamidi', 'logo' => asset('images/testimoni/alfamidi.png')],
                        ['name' => 'Berca', 'logo' => asset('images/testimoni/berca.png')],
                        ['name' => 'BSP', 'logo' => asset('images/testimoni/bsp.png')],
                        ['name' => 'Clariant', 'logo' => asset('images/testimoni/clariant.png')],
                        ['name' => 'Diamond', 'logo' => asset('images/testimoni/diamond.png')],
                        ['name' => 'Gajah', 'logo' => asset('images/testimoni/gajah.png')],
                        ['name' => 'Indofood', 'logo' => asset('images/testimoni/indofood.png')],
                        ['name' => 'Indogrosir', 'logo' => asset('images/testimoni/indogrosir.png')],
                        ['name' => 'Indomart', 'logo' => asset('images/testimoni/indomart.png')],
                        ['name' => 'Jawa Manis', 'logo' => asset('images/testimoni/jawamanis.png')],
                        ['name' => 'Jotun', 'logo' => asset('images/testimoni/jotun.png')],
                        ['name' => 'Kiat', 'logo' => asset('images/testimoni/kiat.png')],
                        ['name' => 'Mahle', 'logo' => asset('images/testimoni/mahle.png')],
                        ['name' => 'Mayora', 'logo' => asset('images/testimoni/mayora.png')],
                        ['name' => 'Padang Global', 'logo' => asset('images/testimoni/padangglobal.png')],
                        ['name' => 'Roman', 'logo' => asset('images/testimoni/roman.png')],
                        ['name' => 'Santos', 'logo' => asset('images/testimoni/santos.png')],
                        ['name' => 'Soho', 'logo' => asset('images/testimoni/soho.png')],
                        ['name' => 'Tempo', 'logo' => asset('images/testimoni/tempo.png')],
                        ['name' => 'Toppan', 'logo' => asset('images/testimoni/toppan.png')],
                        ['name' => 'Torabika', 'logo' => asset('images/testimoni/Torabika.png')],
                        ['name' => 'Traktor', 'logo' => asset('images/testimoni/traktor.png')],
                        ['name' => 'Wahana', 'logo' => asset('images/testimoni/wahana.png')],
                        ['name' => 'Wilmar', 'logo' => asset('images/testimoni/wilmar.png')],
                        ['name' => 'Wings', 'logo' => asset('images/testimoni/wings.png')],
                    ];
                @endphp

                <div class="homepage-testi-shell mx-auto max-w-5xl rounded-2xl bg-gradient-to-b from-[#0f1733] to-[#1a2548] px-6 py-10 md:px-8 md:py-12 shadow-[0_12px_30px_rgba(15,23,51,0.16)]">
                    <div class="text-center mb-8 md:mb-10">
                        <p class="text-[11px] md:text-xs font-bold uppercase tracking-[0.28em] text-[#f2cd00]">Klien Terpercaya</p>
                        <h2 class="mt-2 text-[clamp(2rem,3.5vw,3rem)] font-bold tracking-tight text-white">Dipercaya oleh Berbagai Industri di Indonesia</h2>
                        <p class="mt-2 text-sm md:text-base text-[#cbd5e6] max-w-2xl mx-auto">Berkolaborasi dengan perusahaan nasional dan multinasional dari berbagai sektor industri untuk mendukung operasional yang lebih produktif dan berkelanjutan.</p>
                    </div>

                    <div class="homepage-logo-loop" data-logo-loop data-speed="96" data-direction="left" data-hover-speed="0" aria-label="Logo klien PT MAP">
                        <div class="homepage-logo-loop-track" data-logo-loop-track>
                            @foreach ($testimonialClients as $client)
                                <div class="homepage-logo-loop-item">
                                    <img src="{{ $client['logo'] }}" alt="Logo {{ $client['name'] }}" class="homepage-logo-loop-image" width="320" height="180" loading="lazy" decoding="async" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-8 md:mt-10 flex justify-center">
                        <a href="/tentang#testimoni" class="inline-flex items-center gap-2.5 rounded-full bg-[#f2cd00] px-6 md:px-8 py-2.5 text-xs md:text-sm font-semibold text-[#0f1733] transition-all hover:-translate-y-0.5 hover:bg-[#ffda2f] shadow-[0_8px_20px_rgba(242,205,0,0.24)]">
                            Lihat Semua Testimoni <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 6 --}}

        <section id="berita" class="scroll-fade-section layanan-showcase-section py-6 md:py-7 bg-[#0C014C] min-h-[auto] md:min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content berita-fit-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="max-w-4xl mx-auto mb-4 md:mb-5">
                    <div class="flex flex-col gap-4 items-center text-center w-full">
                        <div class="w-full">
                            <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.14em] text-center">Blog & Edukasi</span>
                            <h2 class="mt-2 text-[clamp(1.3rem,2.2vw,1.9rem)] leading-tight font-bold text-white text-center">Insight Industri, Teknologi, dan Perawatan Baterai</h2>
                            <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#d6ddf8] text-center">Temukan artikel, tips operasional, dan wawasan industri terbaru untuk membantu meningkatkan efisiensi serta umur pakai sistem energi perusahaan Anda.</p>
                        </div>
                    </div>
                </div>

                @php
                    $articles = [
                        [
                            'category' => 'Umum',
                            'date' => '2026-03-18 06:56:34',
                            'image' => asset('images/artikel/artikel1.png'),
                            'title' => 'Mengutamakan Keselamatan: Standar K3 Sebagai Pilar Keberhasilan Operasional',
                            'description' => 'Memahami bagaimana penerapan budaya Keselamatan dan Kesehatan Kerja (K3) yang ketat tidak hanya melindungi karyawan, tetapi juga meningkatkan efisiensi jangka panjang.',
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
                            <div class="relative h-full min-h-28 md:min-h-29.5 overflow-hidden bg-[#efefef]">
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

        {{-- Section 7 --}}

        <section class="scroll-fade-section py-8 md:py-10 bg-white min-h-[auto] md:min-h-[calc(102svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f7f9ff 55%, #e5ecff 100%)" data-nav-glow="rgba(120, 144, 255, 0.16)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="faq-header max-w-4xl mx-auto mb-6 md:mb-8 text-center">
                    <span class="inline-flex items-center rounded-full border border-[#f2cd00] bg-[#fff8d8] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.14em] text-[#d47a00] shadow-[0_6px_14px_rgba(15,23,51,0.06)]">
                        FAQ
                    </span>
                    <h2 class="mt-3 text-[clamp(1.7rem,2.6vw,2.7rem)] font-bold leading-tight tracking-tight text-[#102248]">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="mx-auto mt-2 max-w-2xl text-sm md:text-[0.95rem] leading-relaxed text-[#5a6784]">
                        Berikut beberapa pertanyaan yang paling sering diajukan terkait baterai forklift, charger industri, dan layanan kami. </p>
                </div>
                @php
                    $faqs = [
                        [
                            'question' => 'KENAPA BATERAI FORKLIFT CEPAT HABIS ATAU DROP?',
                            'answer' => 'Biasanya disebabkan oleh pola charging yang tidak tepat, penggunaan berlebih, atau kurangnya perawatan rutin.',
                        ],
                        [
                            'question' => 'BERAPA LAMA UMUR BATERAI FORKLIFT?',
                            'answer' => 'Umumnya 3-5 tahun, tergantung pemakaian, perawatan, dan pola pengisian daya.',
                        ],
                        [
                            'question' => 'LEBIH BAIK PAKAI BATERAI LITHIUM ATAU LEAD-ACID?',
                            'answer' => 'Lithium lebih praktis dan cepat isi ulang, sedangkan lead-acid lebih ekonomis, pemilihan tergantung kebutuhan operasional.',
                        ],
                    ];
                @endphp
                <div class="grid gap-4 md:grid-cols-3 md:gap-5">
                    @foreach ($faqs as $index => $faq)
                        <article class="faq-card group relative overflow-hidden rounded-2xl border border-[#f2cd00] bg-[#fffdf2] p-4 md:p-5 shadow-[0_10px_22px_rgba(15,23,51,0.08)]">
                            <div class="pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100" aria-hidden="true" style="background: radial-gradient(circle at top right, rgba(255,255,255,0.12), transparent 42%), linear-gradient(180deg, rgba(15,23,51,0.08), transparent 35%);"></div>
                            <div class="relative z-10 flex items-start gap-3">
                                <span class="faq-number inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-[#f2cd00] bg-white text-[11px] font-bold text-[#d47a00] shadow-[0_6px_14px_rgba(15,23,51,0.06)] transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:border-[#4c67b8] group-hover:bg-[#16306f] group-hover:text-[#f2cd00]">
                                    {{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <div class="min-w-0 flex-1">
                                    <h3 class="faq-question text-[0.95rem] md:text-[1rem] font-bold leading-snug text-[#102248] transition-colors duration-300 group-hover:text-white">
                                        {{ $faq['question'] }}
                                    </h3>
                                    <span class="mt-3 block h-px w-14 bg-[#f2cd00] transition-all duration-300 group-hover:w-20 group-hover:bg-[#2d4ea2]"></span>
                                    <p class="faq-answer mt-3.5 text-sm md:text-[0.93rem] leading-6 text-[#4d5a78] transition-colors duration-300 group-hover:text-[#c8d4f8]">
                                        {{ $faq['answer'] }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Section 8 Call to Action --}}

        <section id="unduhan" class="scroll-fade-section layanan-showcase-section relative overflow-hidden py-14 md:py-16 bg-[#0C014C] min-h-[auto] md:min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="pointer-events-none absolute inset-0 opacity-70" aria-hidden="true" style="background-image: radial-gradient(rgba(242, 205, 0, 0.18) 1px, transparent 1px); background-size: 24px 24px; background-position: 0 0;"></div>
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(242,205,0,0.16),transparent_34%),radial-gradient(circle_at_20%_25%,rgba(255,255,255,0.08),transparent_18%),radial-gradient(circle_at_80%_75%,rgba(47,128,237,0.18),transparent_24%)]" aria-hidden="true"></div>
            <div class="scroll-fade-content relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="mx-auto flex max-w-4xl flex-col items-center text-center px-4 md:px-6 py-10 md:py-14">
                    <span class="inline-flex items-center rounded-full border border-[#f2cd0040] bg-[#f2cd0015] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.18em] text-[#f7d84a]">
                        Konsultasi & Dukungan
                    </span>
                    <h2 class="mt-4 text-[clamp(2rem,4vw,3.9rem)] font-bold leading-[1.05] tracking-tight text-white">
                        Jangan Biarkan Kendala Operasional
                        <span class="block text-[#f2cd00]">Menghambat Produktivitas Anda.</span>
                    </h2>
                    <p class="mt-5 max-w-2xl text-sm md:text-lg leading-relaxed text-[#d7def6]">
                        Dapatkan solusi yang sesuai kebutuhan bersama tim kami. Kami siap membantu dari konsultasi awal hingga rekomendasi langkah terbaik untuk bisnis Anda.
                    </p>
                    <a href="#" data-open-contact class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] shadow-[0_14px_30px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                        Konsultasi Lebih Lanjut
                        <span aria-hidden="true" class="text-base">→</span>
                    </a>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-[11px] md:text-sm text-[#b8c4ec]">
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Respon cepat dan ramah</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Konsultasi sesuai kebutuhan</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Solusi yang relevan</span>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
