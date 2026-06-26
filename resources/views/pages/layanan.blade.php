@extends('layouts.main')

@section('title', 'Layanan - PT. Multidaya Anugrah Perkasa')

@push('head')
    <link rel="preload" as="image" href="{{ asset('images/hero/AfterSalesHero.jpg') }}">
@endpush

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="layanan-hero-section reveal-on-scroll min-h-[calc(100vh-140px)] flex items-center justify-center">
            <div class="layanan-hero-orb layanan-hero-orb-left" aria-hidden="true"></div>
            <div class="layanan-hero-orb layanan-hero-orb-right" aria-hidden="true"></div>
            <div class="layanan-hero-grid" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-8 py-14 md:py-20 w-full">
                <div class="layanan-hero-shell relative mx-auto max-w-4xl overflow-hidden rounded-4xl border border-[#d4deef] bg-[#f8fbff]/92 px-5 py-14 md:px-12 md:py-16 shadow-[0_18px_46px_rgba(15,23,42,0.10)] backdrop-blur-md">
                    <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#b9c9e6] to-transparent"></div>
                    <div class="absolute inset-x-12 top-6 h-16 rounded-full bg-[#f2cd00]/6 blur-2xl"></div>

                    <div class="relative text-center">
                        <h1 class="layanan-hero-title text-[clamp(2rem,4vw,3.75rem)] font-bold leading-[1.05] tracking-tight text-slate-900">
                            PT. Multidaya Anugrah Perkasa
                        </h1>
                        <p class="layanan-hero-copy mx-auto mt-5 max-w-3xl text-sm leading-relaxed text-slate-600 md:text-lg md:leading-8">
                            PT. Multidaya Anugrah Perkasa hadir sebagai solusi terpercaya untuk kebutuhan forklift, dengan menghadirkan layanan terbaik seperti penyediaan barang baru maupun bekas berkualitas, dukungan teknisi profesional, serta berbagai solusi servis yang andal. Semua layanan ini dirancang untuk menjaga performa tetap optimal dan memastikan operasional berjalan lancar.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section 2: Layanan Showcase -->
        <section id="layanan" class="scroll-fade-section layanan-showcase-section py-8 md:py-10 min-h-[calc(110svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #1e3a8a 0%, #0C014C 45%, #1565c0 100%)" data-nav-glow="rgba(59, 130, 246, 0.34)">
            <div class="scroll-fade-content produk-showcase-wrap max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="text-center max-w-4xl mx-auto mb-5 md:mb-6">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] text-[#0f1733] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.16em]">Layanan Unggulan</span>
                    <h2 class="mt-2.5 text-[clamp(1.4rem,2.7vw,2.25rem)] leading-tight font-bold text-white">Tiga Layanan Utama untuk Operasional Gudang</h2>
                    <p class="mt-1.5 text-[clamp(0.78rem,0.95vw,0.92rem)] leading-relaxed text-[#cfd9ff]">
                        Fokus pada keberlanjutan performa baterai forklift melalui layanan purnajual terjadwal, edukasi operator, dan skema trade in yang lebih efisien.
                    </p>
                </div>

                <div class="grid gap-3 md:gap-4 lg:grid-cols-3">
                    @foreach ($services as $service)
                        <article class="layanan-card-trigger produk-showcase-card group relative overflow-hidden rounded-[1.6rem] border border-[#31479a] bg-[#0d173b] min-h-60 md:min-h-72 shadow-[0_16px_34px_rgba(0,0,0,0.22)] cursor-pointer" data-service-slug="{{ $service['slug'] }}" role="button" tabindex="0" aria-label="Buka detail {{ $service['title'] }}">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="produk-showcase-image absolute inset-0 h-full w-full object-cover" width="640" height="480" loading="lazy" decoding="async" />
                            <div class="absolute inset-0 bg-linear-to-t from-[#081027f7] via-[#0d1a45b2] to-[#0f17331f]"></div>

                            <div class="produk-showcase-content relative z-10 h-full flex flex-col justify-end p-4 md:p-5">
                                <span class="produk-showcase-line mb-1.5 inline-block h-1.5 w-8 rounded-full bg-[#f2cd00]"></span>
                                <h3 class="produk-showcase-title text-[1.32rem] md:text-[1.68rem] leading-none font-bold text-white">{{ $service['title'] }}</h3>
                                <p class="produk-showcase-desc mt-1.5 text-[11px] md:text-[13px] leading-5 md:leading-6 text-[#d7e0ff] line-clamp-3">
                                    {{ $service['description'] }}
                                </p>
                                <button type="button" class="layanan-detail-trigger produk-showcase-btn mt-3 inline-flex w-fit items-center rounded-full border border-[#f2cd00] px-3.5 py-1 text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#f2cd00]" data-service-slug="{{ $service['slug'] }}">
                                    Selengkapnya
                                </button>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="layanan-detail-section" class="py-8 md:py-12 bg-[linear-gradient(180deg,#f5f8ff_0%,#e9f0ff_100%)]">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div id="layanan-detail-card" class="layanan-detail-card relative overflow-hidden rounded-4xl border border-[#3555ac] bg-[linear-gradient(145deg,#081a5a_0%,#0c014c_52%,#114aa8_100%)] shadow-[0_24px_52px_rgba(8,18,48,0.32)]">
                    <div class="pointer-events-none absolute inset-x-4 top-4 z-20 flex items-center justify-between md:inset-x-8 md:top-5">
                        <button type="button" id="layanan-service-prev" class="pointer-events-auto inline-flex items-center gap-1 rounded-full border border-[#b7cdf7] bg-white/90 px-3 py-1.5 text-[10px] md:text-xs font-semibold uppercase tracking-wide text-[#16306f] transition-colors hover:bg-white" aria-label="Layanan sebelumnya">‹ Sebelumnya</button>
                        <button type="button" id="layanan-service-next" class="pointer-events-auto inline-flex items-center gap-1 rounded-full border border-[#b7cdf7] bg-white/90 px-3 py-1.5 text-[10px] md:text-xs font-semibold uppercase tracking-wide text-[#16306f] transition-colors hover:bg-white" aria-label="Layanan berikutnya">Berikutnya ›</button>
                    </div>
                    <div class="px-5 pt-12 pb-8 md:px-10 md:pt-12 md:pb-10 text-center">
                        <h3 id="layanan-detail-title" class="text-2xl md:text-4xl font-bold tracking-tight text-white"></h3>
                        <p id="layanan-detail-intro" class="mx-auto mt-3 max-w-3xl text-sm md:text-base leading-relaxed text-[#d8e5ff]"></p>
                        <p id="layanan-detail-counter" class="mt-5 text-[10px] md:text-xs font-semibold uppercase tracking-[0.14em] text-[#c7d6f8]"></p>
                    </div>

                    <div class="px-5 py-7 md:px-10 md:py-10">
                        <div class="grid gap-6 md:gap-8 md:grid-cols-[1.08fr_0.92fr] items-stretch">
                            <div class="layanan-detail-carousel relative rounded-2xl bg-[linear-gradient(145deg,#081a5a_0%,#0c014c_55%,#114aa8_100%)] px-4 py-8 md:px-6 md:py-9">
                                <button type="button" id="layanan-detail-prev" class="layanan-detail-nav absolute left-3 top-1/2 -translate-y-1/2 inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#b7cdf7] bg-white/95 text-2xl leading-none text-[#355295] transition-all hover:-translate-y-[52%] hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Gambar sebelumnya">‹</button>
                                <div class="mx-auto w-full max-w-2xl overflow-hidden rounded-2xl border border-[#3450a5] bg-[#0d173b] shadow-[0_14px_30px_rgba(0,0,0,0.32)]">
                                    <img id="layanan-detail-carousel-image" src="" alt="Galeri layanan" class="h-56 w-full object-cover md:h-88" />
                                </div>
                                <button type="button" id="layanan-detail-next" class="layanan-detail-nav absolute right-3 top-1/2 -translate-y-1/2 inline-flex h-11 w-11 items-center justify-center rounded-full border border-[#b7cdf7] bg-white/95 text-2xl leading-none text-[#355295] transition-all hover:-translate-y-[52%] hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Gambar berikutnya">›</button>
                            </div>

                            <div>
                                <p class="layanan-detail-label text-[11px] md:text-xs font-bold uppercase tracking-[0.16em] text-[#8eb9ff]">Detail Layanan</p>
                                <p id="layanan-detail-body" class="mt-2 text-sm md:text-base leading-relaxed text-[#e5eeff]"></p>
                                <p class="layanan-detail-assist mt-4 text-sm leading-relaxed text-[#c7d6f8]">
                                    Tim kami siap membantu proses evaluasi kebutuhan, perencanaan perawatan, hingga implementasi teknis agar layanan berjalan efektif di lapangan.
                                </p>
                            </div>
                        </div>

                        <div class="mt-7 grid gap-6 md:gap-8 md:grid-cols-[1.35fr_0.95fr] items-start">
                            <div>
                                <ul id="layanan-detail-points" class="space-y-2.5 text-sm md:text-[15px] leading-relaxed text-[#d8e5ff]"></ul>
                                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="mt-5 inline-flex items-center gap-2 rounded-full bg-[#f2cd00] px-5 py-2.5 text-xs md:text-sm font-bold uppercase tracking-[0.08em] text-[#0f1733] shadow-[0_12px_24px_rgba(242,205,0,0.3)] transition-all hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                                    Chat Sales
                                    <span aria-hidden="true">↗</span>
                                </a>
                            </div>
                            <div class="overflow-hidden rounded-2xl border border-[#3e5caf] bg-[#10245f] shadow-[0_10px_24px_rgba(0,0,0,0.3)]">
                                <img id="layanan-detail-side-image" src="" alt="Gambar pendukung layanan" class="h-56 w-full object-cover md:h-full md:min-h-72" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: CTA -->
        <section id="cta" class="scroll-fade-section layanan-cta-section relative overflow-hidden py-14 md:py-16 min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f6ff 55%, #e5edff 100%)" data-nav-glow="rgba(120, 144, 255, 0.2)">
            <div class="pointer-events-none absolute inset-0 opacity-70" aria-hidden="true" style="background-image: radial-gradient(rgba(59, 130, 246, 0.08) 1px, transparent 1px); background-size: 24px 24px; background-position: 0 0;"></div>
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.06),transparent_34%),radial-gradient(circle_at_20%_25%,rgba(242,205,0,0.14),transparent_18%),radial-gradient(circle_at_80%_75%,rgba(47,128,237,0.08),transparent_24%)]" aria-hidden="true"></div>
            <div class="scroll-fade-content relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="mx-auto flex max-w-4xl flex-col items-center text-center px-4 md:px-6 py-10 md:py-14">
                    <span class="inline-flex items-center rounded-full border border-[#b9c9e6] bg-white px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.18em] text-[#1d4ed8] shadow-[0_8px_20px_rgba(15,23,42,0.06)]">
                        Konsultasi & Dukungan
                    </span>
                    <h2 class="mt-4 text-[clamp(2rem,4vw,3.9rem)] font-bold leading-[1.05] tracking-tight text-[#0f1733]">
                        Jangan Biarkan Kendala Operasional
                        <span class="block text-[#1d4ed8]">Menghambat Produktivitas Anda.</span>
                    </h2>
                    <p class="mt-5 max-w-2xl text-sm md:text-lg leading-relaxed text-[#4f5f7e]">
                        Dapatkan solusi yang sesuai kebutuhan bersama tim kami. Kami siap membantu dari konsultasi awal hingga rekomendasi langkah terbaik untuk bisnis Anda.
                    </p>
                    <a href="#" data-open-contact class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] shadow-[0_14px_30px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                        Konsultasi Lebih Lanjut
                        <span aria-hidden="true" class="text-base">→</span>
                    </a>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-[11px] md:text-sm text-[#5f6f8f]">
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Respon cepat dan ramah</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Konsultasi sesuai kebutuhan</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Solusi yang relevan</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const layananData = @json($services);
            const dataMap = Object.fromEntries(layananData.map((item) => [item.slug, item]));

            const detailSection = document.getElementById('layanan-detail-section');
            const detailCard = document.getElementById('layanan-detail-card');
            const layananSection = document.getElementById('layanan');
            const titleEl = document.getElementById('layanan-detail-title');
            const introEl = document.getElementById('layanan-detail-intro');
            const bodyEl = document.getElementById('layanan-detail-body');
            const pointsEl = document.getElementById('layanan-detail-points');
            const sideImageEl = document.getElementById('layanan-detail-side-image');
            const carouselImageEl = document.getElementById('layanan-detail-carousel-image');
            const detailCounterEl = document.getElementById('layanan-detail-counter');

            const triggerButtons = Array.from(document.querySelectorAll('.layanan-detail-trigger'));
            const cardTriggers = Array.from(document.querySelectorAll('.layanan-card-trigger'));
            const prevButton = document.getElementById('layanan-detail-prev');
            const nextButton = document.getElementById('layanan-detail-next');
            const servicePrevButton = document.getElementById('layanan-service-prev');
            const serviceNextButton = document.getElementById('layanan-service-next');

            let activeServiceSlug = null;
            let activeServiceIndex = 0;
            let activeGallery = [];
            let activeGalleryIndex = 0;
            const serviceOrder = layananData.map((service) => service.slug);

            const getNavbarOffset = () => {
                const cssValue = Number.parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--navbar-height')) || 0;
                const navbarHeight = document.querySelector('nav.sticky.top-0')?.offsetHeight || 0;
                return Math.max(cssValue, navbarHeight);
            };

            const scrollToDetailTop = () => {
                const target = detailCard || detailSection;
                if (!target) {
                    return;
                }

                const top = target.getBoundingClientRect().top + window.scrollY - getNavbarOffset() - 10;
                window.scrollTo({ top: Math.max(top, 0), behavior: 'smooth' });
            };

            const renderGallery = () => {
                if (!carouselImageEl || activeGallery.length === 0) {
                    return;
                }

                carouselImageEl.src = activeGallery[activeGalleryIndex];
            };

            const openDetail = (slug, shouldScroll = true) => {
                const service = dataMap[slug];
                if (!service || !detailSection) {
                    return;
                }

                activeServiceSlug = slug;
                activeServiceIndex = serviceOrder.indexOf(slug);
                activeGallery = Array.isArray(service.gallery) && service.gallery.length > 0 ? service.gallery : [service.image];
                activeGalleryIndex = 0;

                if (titleEl) titleEl.textContent = service.title;
                if (introEl) introEl.textContent = service.detail_intro || '';
                if (bodyEl) bodyEl.textContent = service.description || '';
                if (sideImageEl) sideImageEl.src = service.side_image || service.image;

                if (pointsEl) {
                    pointsEl.innerHTML = (service.detail_points || [])
                        .map((point) => `<li class="flex items-start gap-2.5"><span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#f2cd00]"></span><span>${point}</span></li>`)
                        .join('');
                }

                renderGallery();
                if (detailCounterEl && activeServiceIndex >= 0) {
                    detailCounterEl.textContent = `Layanan ${activeServiceIndex + 1} / ${serviceOrder.length}`;
                }

                if (shouldScroll) {
                    requestAnimationFrame(() => {
                        scrollToDetailTop();
                    });
                }
            };

            const openDetailByIndex = (index, shouldScroll = false) => {
                if (serviceOrder.length === 0) {
                    return;
                }

                const normalizedIndex = (index + serviceOrder.length) % serviceOrder.length;
                const slug = serviceOrder[normalizedIndex];
                if (slug) {
                    openDetail(slug, shouldScroll);
                }
            };

            triggerButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const slug = button.getAttribute('data-service-slug');
                    if (slug) {
                        openDetail(slug);
                    }
                });
            });

            cardTriggers.forEach((card) => {
                card.addEventListener('click', (event) => {
                    if (event.target.closest('.layanan-detail-trigger')) {
                        return;
                    }

                    const slug = card.getAttribute('data-service-slug');
                    if (slug) {
                        openDetail(slug);
                    }
                });

                card.addEventListener('keydown', (event) => {
                    if (event.key !== 'Enter' && event.key !== ' ') {
                        return;
                    }

                    event.preventDefault();
                    const slug = card.getAttribute('data-service-slug');
                    if (slug) {
                        openDetail(slug);
                    }
                });
            });

            servicePrevButton?.addEventListener('click', () => {
                openDetailByIndex(activeServiceIndex - 1, false);
            });

            serviceNextButton?.addEventListener('click', () => {
                openDetailByIndex(activeServiceIndex + 1, false);
            });

            prevButton?.addEventListener('click', () => {
                if (activeGallery.length === 0) {
                    return;
                }

                activeGalleryIndex = (activeGalleryIndex - 1 + activeGallery.length) % activeGallery.length;
                renderGallery();
            });

            nextButton?.addEventListener('click', () => {
                if (activeGallery.length === 0) {
                    return;
                }

                activeGalleryIndex = (activeGalleryIndex + 1) % activeGallery.length;
                renderGallery();
            });

            const searchParams = new URLSearchParams(window.location.search);
            const requestedService = searchParams.get('service');
            const hashTarget = (window.location.hash || '').replace('#', '');

            if (requestedService && dataMap[requestedService]) {
                openDetail(requestedService, true);
            } else if (hashTarget === 'layanan-detail-section' && layananData[0]?.slug) {
                openDetail(layananData[0].slug, true);
            } else if (layananData[0]?.slug) {
                openDetail(layananData[0].slug, false);
            }
        });
    </script>
@endsection
