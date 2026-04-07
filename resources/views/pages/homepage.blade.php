<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Multidaya Anugrah Perkasa - Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['IBM_Plex_Sans'] bg-slate-50 text-slate-900 selection:bg-slate-800 selection:text-white">
    @php
        $products = [
            [
                'name' => 'BATTERY',
                'image' => asset('images/product/battery1.png'),
                'description' => 'Dirancang khusus untuk aplikasi penggerak (traction) pada kendaraan listrik industri seperti forklift, scissor lift dll.',
            ],
            [
                'name' => 'CHARGER',
                'image' => asset('images/product/charger1.png'),
                'description' => 'Pengisian cepat, aman, dan efisien untuk performa optimal.',
            ],
            [
                'name' => 'ACCESSORIES',
                'image' => asset('images/product/accesoris.png'),
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
            'title' => 'Microtex Exhibition March 2024',
            'video' => asset('videos/Microtex Exhibition March 2024.mp4'),
            'description' => 'Video dokumentasi Microtex yang menampilkan aktivitas, produk, dan suasana pameran secara langsung. lorem ipsum dolor sit amet lorem ipsum dolor sit amet.',
        ];
    @endphp

    <x-navbar />

    <main>
        <section id="beranda" class="scroll-fade-section in-view hero-bg-extended relative overflow-hidden bg-cover bg-center" data-nav-gradient="linear-gradient(120deg, #ffe082 0%, #f2cd00 32%, #ff9f1c 100%)" data-nav-glow="rgba(242, 205, 0, 0.45)" style="background-image: url('{{ asset('images/hero/hero1.png') }}');">
            <div class="absolute inset-0 bg-black/45"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="hero-stage">
                    <div class="scroll-fade-content hero-scroll-copy hero-copy-wrap w-full">
                        <h1 class="hero-heading font-bold text-white mb-2 drop-shadow-lg">PT. Multidaya Anugrah Perkasa</h1>
                        <p class="hero-tagline max-w-xl font-semibold uppercase tracking-wide text-slate-100 drop-shadow">POWERING MOBILITY ENERGIZING THE FUTURE</p>
                        <p class="hero-lead max-w-xl text-slate-100 drop-shadow">
                            Kami memberikan yang terbaik untuk konsumen, dalam bentuk solusi yang efektif dan efisien untuk seluruh kebutuhan energy terbarukan.
                        </p>
                    </div>

                    <section id="tentang" class="scroll-fade-section scroll-fade-content hero-embedded-section" data-nav-gradient="linear-gradient(120deg, #fff9c4 0%, #f4f4f4 50%, #c8e6c9 100%)" data-nav-glow="rgba(185, 246, 202, 0.38)">
                        <div class="hero-embedded-panel rounded-2xl border border-white/25 bg-white/92 p-3.5 md:p-4 backdrop-blur-sm shadow-[0_16px_42px_-26px_rgba(0,0,0,0.65)]">
                            <div class="mb-3 flex flex-col items-center gap-1.5 text-center">
                                {{-- <h2 class="text-sm md:text-base font-bold text-[#0f1733]">Video Microtex</h2> --}}
                            </div>

                            <figure class="hero-video-card overflow-hidden rounded-xl border border-[#d5d5d5] bg-[#0b1026] shadow-lg">
                                <div class="grid md:grid-cols-[minmax(0,1.1fr)_minmax(0,0.9fr)]">
                                    <div class="relative bg-black">
                                        <video
                                            class="hero-video-player aspect-video h-full w-full object-cover"
                                            data-hero-embedded-video
                                            src="{{ $heroVideo['video'] }}"
                                            muted
                                            loop
                                            playsinline
                                            preload="metadata"
                                            controls
                                        ></video>

                                        <button
                                            type="button"
                                            class="absolute right-3 top-3 inline-flex items-center gap-2 rounded-full bg-black/55 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-wide text-white backdrop-blur-sm transition-colors hover:bg-black/75"
                                            data-hero-video-expand
                                        >
                                            Perbesar Video
                                        </button>
                                    </div>

                                    <figcaption class="flex h-full flex-col justify-center gap-2 bg-[#0b1026] px-4 py-4 text-left text-white md:px-5">
                                        <span class="inline-flex w-fit items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-[#0f1733]">Microtex</span>
                                        <h3 class="text-sm md:text-base font-bold leading-tight">{{ $heroVideo['title'] }}</h3>
                                        <p class="text-[10px] md:text-[11px] leading-5 text-[#d9e4ff] line-clamp-5">{{ $heroVideo['description'] }}</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="scroll-fade-section layanan-showcase-section bg-[#0C014C] py-7 md:py-9 min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="max-w-4xl mx-auto text-center mb-5 md:mb-6">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.15em]">Keunggulan Kami</span>
                    <h2 class="mt-3 text-[clamp(1.6rem,3.25vw,2.6rem)] leading-tight font-bold text-white">Mengapa Memilih Produk Kami?</h2>
                    <p class="mt-2.5 text-[clamp(0.84rem,1.15vw,1.08rem)] leading-relaxed text-[#d9e4ff] max-w-3xl mx-auto">
                        Solusi energi industri kami dirancang untuk performa tinggi, keandalan jangka panjang, dan operasional yang efisien di berbagai kondisi kerja.
                    </p>
                </div>

                <div class="grid gap-3 md:gap-4 md:grid-cols-2 xl:grid-cols-4">
                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 12h5m6 0h5M7 9v6m10-6v6M9 6h6v12H9z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Efficient</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Konsumsi daya lebih optimal dengan performa stabil, sehingga operasional harian menjadi hemat energi dan tetap produktif.
                        </p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.8 12.2l1.7 1.7 2.8-3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Reliable</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Komponen berkualitas tinggi memastikan daya tahan lebih lama dan kinerja yang dapat diandalkan untuk kebutuhan industri berat.
                        </p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><circle cx="17" cy="17" r="3" stroke="currentColor" stroke-width="1.8"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Transparent</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Spesifikasi produk, estimasi performa, serta dukungan teknis disampaikan secara jelas agar keputusan pembelian lebih tepat.
                        </p>
                    </article>

                    <article class="keunggulan-card rounded-2xl bg-[#f1f1f1] border border-[#d8d8d8] shadow-[0_8px_20px_rgba(0,0,0,0.12)] p-4 md:p-5">
                        <div class="keunggulan-icon-box w-12 h-12 rounded-xl bg-[#0f1733] grid place-items-center mb-3.5 shadow-md">
                            <svg viewBox="0 0 24 24" class="keunggulan-icon w-6 h-6 text-[#f2cd00]" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 4v16M4 12h16M7.8 7.8l8.4 8.4M16.2 7.8l-8.4 8.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                        <h3 class="keunggulan-title text-2xl md:text-[1.55rem] font-bold text-[#0f1733] leading-none">Innovative</h3>
                        <p class="keunggulan-desc mt-2.5 text-xs md:text-[0.89rem] leading-6 text-[#3f4f6b]">
                            Teknologi terus diperbarui agar solusi baterai kami selalu relevan dengan perkembangan industri dan target efisiensi modern.
                        </p>
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

        <section id="produk" class="scroll-fade-section in-view produk-showcase-section bg-white py-6 md:py-7 min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f4f8 55%, #e9edf5 100%)" data-nav-glow="rgba(120, 144, 156, 0.28)" style="background-color:#ffffff;">
            <div class="scroll-fade-content produk-showcase-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-4 md:mb-5">
                    <span class="inline-flex items-center rounded-full bg-[#0f1733] text-[#f2cd00] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em]">Produk Unggulan</span>
                    <h2 class="mt-2.5 text-[clamp(1.4rem,2.7vw,2.25rem)] leading-tight font-bold text-[#0f1733]">Baterai, Charger, dan Aksesoris untuk Kebutuhan Operasional</h2>
                    <p class="mt-1.5 text-[clamp(0.78rem,0.95vw,0.92rem)] leading-relaxed text-[#4b5976]">
                        Kami menyediakan tiga kategori utama yang saling melengkapi, mulai dari Baterai sebagai sumber tenaga, Charger untuk pengisian optimal, hingga Aksesoris pendukung agar operasional lebih aman, stabil, dan efisien.
                    </p>
                </div>

                <div class="grid gap-2.5 md:gap-3.5 md:grid-cols-3">
                    @foreach ($products as $product)
                        <a href="/produk/detail" class="produk-showcase-card group relative overflow-hidden rounded-2xl border border-[#2d3d88] bg-[#0f1733] min-h-56 md:min-h-68 shadow-[0_14px_30px_rgba(0,0,0,0.25)]">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="produk-showcase-image absolute inset-0 h-full w-full object-cover" />
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

        <section id="layanan" class="scroll-fade-section layanan-showcase-section py-6 md:py-7 min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content produk-showcase-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-4 md:mb-5">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em]">Layanan Unggulan</span>
                    <h2 class="mt-2.5 text-[clamp(1.4rem,2.7vw,2.25rem)] leading-tight font-bold text-white">Tiga Layanan Utama untuk Operasional Gudang</h2>
                    <p class="mt-1.5 text-[clamp(0.78rem,0.95vw,0.92rem)] leading-relaxed text-[#cfd9ff]">
                        Fokus pada keberlanjutan performa baterai forklift melalui layanan purnajual terjadwal, edukasi operator, dan skema trade in yang lebih efisien.
                    </p>
                </div>

                @php
                    $services = [
                        [
                            'title' => 'After Sales Services',
                            'image' => asset('images/layanan/layanan1.png'),
                            'description' => 'Program purnajual 3 kali per tahun (setiap 4 bulan) mencakup preventive maintenance, cek level air aki, pembersihan korosi, cek voltase serta BJ, termasuk monitoring data pengisian dan evaluasi umur baterai untuk menekan risiko downtime.',
                        ],
                        [
                            'title' => 'Training Battery',
                            'image' => asset('images/artikel/artikel2.png'),
                            'description' => 'Pelatihan teknis dan kebiasaan kerja operator untuk pengisian, perawatan, dan penggunaan baterai yang benar agar umur pakai lebih panjang, performa stabil, dan biaya operasional gudang lebih terkendali.',
                        ],
                        [
                            'title' => 'Trade In',
                            'image' => asset('images/layanan/layanan1.png'),
                            'description' => 'Solusi tukar tambah baterai lama ke unit yang lebih siap pakai dengan proses evaluasi kondisi yang transparan, sehingga perencanaan anggaran penggantian aset menjadi lebih ringan dan terukur.',
                        ],
                    ];
                @endphp

                <div class="grid gap-2.5 md:gap-3.5 md:grid-cols-3">
                    @foreach ($services as $service)
                        <a href="/layanan/detail" class="produk-showcase-card group relative overflow-hidden rounded-2xl border border-[#2d3d88] bg-[#0f1733] min-h-56 md:min-h-68 shadow-[0_14px_30px_rgba(0,0,0,0.25)]">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="produk-showcase-image absolute inset-0 h-full w-full object-cover" />
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

        <section id="testimoni" class="scroll-fade-section py-10 md:py-14 bg-white min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f6ff 55%, #e5edff 100%)" data-nav-glow="rgba(120, 144, 255, 0.2)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                @php
                    $testimonialClients = [
                        ['name' => 'PT Sukanda Djaya', 'logo' => asset('images/testimoni/sukanda.png')],
                        ['name' => 'Kiat Ananda Group', 'logo' => asset('images/testimoni/kiatananda.png')],
                        ['name' => 'Wings Corporation', 'logo' => asset('images/testimoni/wings.png')],
                        ['name' => 'Mahle', 'logo' => asset('images/testimoni/mahle.png')],
                    ];
                @endphp

                <div class="homepage-testi-shell mx-auto max-w-6xl rounded-[1.8rem] border border-[#ccd8f2] bg-[linear-gradient(135deg,#0c2a73_0%,#1f4ea4_55%,#2f71dd_100%)] px-4 py-8 md:px-7 md:py-10 shadow-[0_18px_36px_rgba(15,23,51,0.14)]">
                    <div class="text-center">
                        <p class="text-[11px] md:text-xs font-bold uppercase tracking-[0.28em] text-[#f2cd00]">Testimonial</p>
                        <h2 class="mt-3 text-[clamp(1.8rem,3.5vw,3.2rem)] font-bold tracking-tight text-white">Klien Kami</h2>
                        <p class="mt-2 text-xs md:text-sm text-[#dce8ff]">Dipercaya berbagai perusahaan untuk kebutuhan energi dan layanan industri.</p>
                    </div>

                    <div class="mt-7 md:mt-9 grid grid-cols-[auto_1fr_auto] items-center gap-2 md:gap-3">
                        <button type="button" id="homepage-testi-prev" class="inline-flex h-10 w-10 md:h-11 md:w-11 items-center justify-center rounded-full border border-[#b7cdf7] bg-white/95 text-2xl leading-none text-[#355295] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Slide kiri testimoni">‹</button>

                        <div id="homepage-testi-viewport" class="overflow-hidden [--logos-gap:0.75rem] md:[--logos-gap:1rem]">
                            <div id="homepage-testi-track" class="flex items-center gap-(--logos-gap) will-change-transform">
                                @foreach ($testimonialClients as $client)
                                    <article class="homepage-testi-item flex shrink-0 items-center justify-center rounded-2xl border border-[#aac2ef] bg-[linear-gradient(160deg,#f7faff_0%,#e6efff_100%)] px-4 py-5 md:px-5 md:py-6 shadow-[0_10px_18px_rgba(7,26,67,0.16)]">
                                        <img src="{{ $client['logo'] }}" alt="Logo {{ $client['name'] }}" class="homepage-testi-logo max-h-14 md:max-h-16 w-auto max-w-full object-contain" loading="lazy" />
                                    </article>
                                @endforeach
                            </div>
                        </div>

                        <button type="button" id="homepage-testi-next" class="inline-flex h-10 w-10 md:h-11 md:w-11 items-center justify-center rounded-full border border-[#b7cdf7] bg-white/95 text-2xl leading-none text-[#355295] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Slide kanan testimoni">›</button>
                    </div>

                    <div class="mt-7 flex justify-center">
                        <a href="/tentang#testimoni" class="inline-flex items-center gap-2 rounded-full border border-[#f2cd00] bg-[#f2cd00] px-5 py-2 text-xs md:text-sm font-bold text-[#0f1733] transition-all hover:-translate-y-0.5 hover:bg-[#ffd63d]">
                            Selengkapnya <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita" class="scroll-fade-section layanan-showcase-section py-6 md:py-7 bg-[#0C014C] min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
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
                            <div class="relative h-full min-h-28 md:min-h-29.5 overflow-hidden bg-[#efefef]">
                                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="berita-card-image h-full w-full object-cover" />
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

        <section class="scroll-fade-section py-8 md:py-10 bg-white min-h-[calc(102svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f7f9ff 55%, #e5ecff 100%)" data-nav-glow="rgba(120, 144, 255, 0.16)">
            <div class="scroll-fade-content max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="faq-header max-w-4xl mx-auto mb-6 md:mb-8 text-center">
                    <span class="inline-flex items-center rounded-full border border-[#f2cd00] bg-[#fff8d8] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.14em] text-[#d47a00] shadow-[0_6px_14px_rgba(15,23,51,0.06)]">
                        FAQ
                    </span>
                    <h2 class="mt-3 text-[clamp(1.7rem,2.6vw,2.7rem)] font-bold leading-tight tracking-tight text-[#102248]">
                        Pertanyaan yang Sering Diajukan
                    </h2>
                    <p class="mx-auto mt-2 max-w-2xl text-sm md:text-[0.95rem] leading-relaxed text-[#5a6784]">
                        Ringkasan jawaban untuk membantu Anda memahami layanan, proses, dan hal-hal penting yang sering ditanyakan.
                    </p>
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

        <section id="unduhan" class="scroll-fade-section layanan-showcase-section relative overflow-hidden py-14 md:py-16 bg-[#0C014C] min-h-[calc(112svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
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
                    <a href="/layanan" class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] shadow-[0_14px_30px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
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

    <div id="hero-video-modal" class="fixed inset-0 z-70 hidden items-center justify-center bg-black/80 px-4 py-6 backdrop-blur-sm">
        <div class="relative w-full max-w-5xl overflow-hidden rounded-2xl border border-white/15 bg-[#0b1026] shadow-[0_24px_60px_rgba(0,0,0,0.45)]">
            <button type="button" id="hero-video-modal-close" class="absolute right-3 top-3 z-10 inline-flex h-9 w-9 items-center justify-center rounded-full bg-white/12 text-white transition-colors hover:bg-white/20" aria-label="Tutup video">×</button>
            <video id="hero-video-modal-player" class="h-full w-full max-h-[78vh] object-contain bg-black" src="{{ $heroVideo['video'] }}" controls playsinline preload="metadata"></video>
        </div>
    </div>

    <x-footer />

    <a href="/kontak" class="fixed right-4 bottom-4 z-40 h-14 w-14 rounded-full bg-[#f2cd00] shadow-lg grid place-items-center hover:bg-[#e8c200] transition-colors group" title="Hubungi Kami">
        <img src="{{ asset('images/icon/image 28.png') }}" alt="Hubungi Kami" class="h-8 w-8 object-contain group-hover:scale-110 transition-transform" />
    </a>
</body>
</html>
