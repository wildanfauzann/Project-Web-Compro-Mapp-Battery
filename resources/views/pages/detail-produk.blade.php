@extends('layouts.main')

@section('title', 'Detail Produk - PT. Multidaya Anugrah Perkasa')

@section('content')
    @php
        $categoryName = $produk->kategori ? $produk->kategori->nama_kategori : 'Ungategorized';
        
        $mainImage = asset($produk->img ?? 'images/product/tractionhawcker.png');
        $galleryPhotos = [$mainImage];

        $longDescription = $produk->detailProduk ? $produk->detailProduk->deskripsi_lengkap_produk : $produk->deskripsi;
        
        $specTable = [];
        if ($produk->detailProduk) {
            $specTable = [
                ['feature' => 'Tipe Produk', 'description' => $produk->detailProduk->tipe ?? '-'],
                ['feature' => 'Voltase', 'description' => $produk->detailProduk->voltase ?? '-'],
                ['feature' => 'Kapasitas', 'description' => $produk->detailProduk->kapasitas ?? '-'],
                ['feature' => 'Siklus Hidup', 'description' => $produk->detailProduk->siklus_hidup ?? '-'],
            ];
        } else {
            // Fallback general specs
            $specTable = [
                ['feature' => 'Info Teknis', 'description' => 'Silakan hubungi kami untuk informasi detail'],
            ];
        }
    @endphp

    <main>
        <section class="reveal-on-scroll bg-[#eceef2] py-3 md:py-4 min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))]">
            <div class="max-w-400 mx-auto px-4 md:px-8">
                <div class="grid gap-4 lg:grid-cols-[286px_minmax(0,1fr)] xl:grid-cols-[300px_minmax(0,1fr)]">
                    <aside class="space-y-3 lg:sticky lg:top-[calc(var(--navbar-height,0px)+0.8rem)] lg:self-start">
                        <div class="overflow-hidden rounded-2xl border border-[#d8dde8] bg-white shadow-sm">
                            <div class="flex items-center gap-2.5 bg-[#f2cd00] px-3.5 py-3.5 text-[#0f1733]">
                                <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#10215a] text-white text-base font-bold">☰</span>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.14em]">Menu</p>
                                    <h3 class="text-base font-bold leading-tight">Kategori Produk</h3>
                                </div>
                            </div>

                            <div class="divide-y divide-[#e6eaf1]">
                                <details open class="group px-3.5 py-3">
                                    <summary class="flex cursor-pointer list-none items-center justify-between text-sm font-semibold text-[#23385e]">Battery <span class="text-[#5a6d8f] group-open:rotate-180 transition-transform">⌄</span></summary>
                                    <ul class="mt-2 space-y-1 text-xs text-[#5a6d8f]">
                                        <li>Traction Hawker</li>
                                        <li>Traction Microtex</li>
                                        <li>Semi Traction</li>
                                        <li>Lithium</li>
                                    </ul>
                                </details>
                                <details class="group px-3.5 py-3">
                                    <summary class="flex cursor-pointer list-none items-center justify-between text-sm font-semibold text-[#23385e]">Charger <span class="text-[#5a6d8f] group-open:rotate-180 transition-transform">⌄</span></summary>
                                    <ul class="mt-2 space-y-1 text-xs text-[#5a6d8f]">
                                        <li>High Frequency</li>
                                        <li>Low Frequency</li>
                                    </ul>
                                </details>
                                <details class="group px-3.5 py-3">
                                    <summary class="flex cursor-pointer list-none items-center justify-between text-sm font-semibold text-[#23385e]">Accessories <span class="text-[#5a6d8f] group-open:rotate-180 transition-transform">⌄</span></summary>
                                    <ul class="mt-2 space-y-1 text-xs text-[#5a6d8f]">
                                        <li>BFS & WaterTank</li>
                                        <li>Connector</li>
                                        <li>Plug / Socket</li>
                                    </ul>
                                </details>
                                <a href="/layanan" class="block px-3.5 py-3 text-sm font-semibold text-[#23385e] hover:bg-[#f6f8fc]">Service & After Sales</a>
                            </div>
                        </div>

                        <div class="rounded-xl bg-linear-to-br from-[#1c3d95] to-[#162c6f] p-3 text-white shadow-lg">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-[#d2dfff]">Bantuan</p>
                            <h4 class="mt-1.5 text-sm font-bold leading-snug">Butuh rekomendasi produk forklift?</h4>
                            <a href="https://wa.me/6281234567890" class="mt-2.5 inline-flex w-full items-center justify-center rounded-lg bg-white px-3 py-1.5 text-xs font-bold text-[#16306f] transition hover:bg-[#f2cd00] hover:text-[#0f1733]">Hubungi Admin</a>
                        </div>
                    </aside>

                    <div id="detail-product-column" class="flex flex-col gap-3">
                        <div class="rounded-2xl border border-[#d8dde8] bg-white px-5 py-3.5 shadow-sm md:px-6 md:py-4">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-[#8a96aa]">Katalog / {{ $categoryName }}</p>
                            <h1 class="mt-1 text-[clamp(1.1rem,1.8vw,1.8rem)] font-bold uppercase tracking-tight text-[#10215a]">{{ $produk->nama_produk }}</h1>
                        </div>

                        <div class="overflow-hidden rounded-3xl border border-[#d7ddea] bg-white shadow-sm">
                            <div class="grid xl:grid-cols-[minmax(0,1.45fr)_minmax(0,0.95fr)]">
                                <div class="bg-[#f3f5fa] p-3 md:p-4 flex flex-col">
                                    <div class="relative rounded-3xl border border-[#dfe4ef] bg-white p-3 md:p-4">
                                        <button type="button" id="detail-prev" class="absolute left-3 top-1/2 -translate-y-1/2 rounded-full border border-[#d0d8e8] bg-white px-3 py-2 text-xl text-[#c62828] shadow-sm hover:bg-[#fff5f5]" aria-label="Gambar sebelumnya">‹</button>
                                        <img id="detail-main-image" src="{{ $galleryPhotos[0] }}" alt="{{ $produk->nama_produk }}" class="mx-auto aspect-square h-full max-h-105 w-full object-contain" width="960" height="960" loading="eager" fetchpriority="high" decoding="async" />
                                        <button type="button" id="detail-next" class="absolute right-3 top-1/2 -translate-y-1/2 rounded-full border border-[#d0d8e8] bg-white px-3 py-2 text-xl text-[#c62828] shadow-sm hover:bg-[#fff5f5]" aria-label="Gambar berikutnya">›</button>
                                    </div>

                                    <div class="mt-3 flex flex-wrap items-center gap-2">
                                        @foreach ($galleryPhotos as $galleryImage)
                                            <button type="button" class="detail-thumb {{ $loop->first ? 'border-[#de2d2d]' : 'border-[#d8dde8]' }} h-14 w-14 overflow-hidden rounded-xl border bg-white p-1.5 transition hover:border-[#de2d2d]" data-image="{{ $galleryImage }}" aria-label="Thumbnail {{ $loop->iteration }}">
                                                <img src="{{ $galleryImage }}" alt="Thumbnail {{ $produk->nama_produk }} {{ $loop->iteration }}" class="h-full w-full object-contain" width="128" height="128" loading="lazy" decoding="async" />
                                            </button>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="p-4 md:p-5 flex flex-col">
                                    <span class="inline-flex items-center rounded-full border border-[#ffd4d4] bg-[#fff1f1] px-3 py-1 text-[10px] font-bold uppercase tracking-[0.14em] text-[#cc2a2a]">{{ $categoryName }}</span>
                                    <h2 class="mt-3 text-[clamp(1.1rem,1.8vw,1.85rem)] font-bold leading-tight text-[#0f1f4f]">{{ $produk->kode_produk }}</h2>
                                    <p class="mt-1 text-sm font-semibold text-[#4a5b7a] line-clamp-1">{{ $produk->nama_produk }}</p>

                                    <div class="mt-3 grid grid-cols-2 gap-3 border-y border-[#e2e7f1] py-3">
                                        <div>
                                            <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#8d98ad]">Satuan Produk</p>
                                            <p class="mt-1 text-base font-bold text-[#0f1f4f]">/ pcs</p>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#8d98ad]">Status Stok</p>
                                            <p class="mt-1 text-base font-bold text-[#0ea85f]">• Ready</p>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <p class="text-[10px] font-semibold uppercase tracking-[0.12em] text-[#8d98ad]">Informasi Teknis</p>
                                        <div id="detail-description" class="mt-2 text-sm leading-7 text-[#52617d] line-clamp-4">
                                            {{ $produk->deskripsi }}
                                        </div>
                                        <button id="toggle-description" type="button" class="mt-2 w-fit text-xs font-bold uppercase tracking-widest text-[#1d4fb3] hover:text-[#163b87]">
                                            Selengkapnya
                                        </button>
                                    </div>

                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center rounded-full bg-[#d7262c] px-4 py-2 text-xs font-bold uppercase tracking-[0.08em] text-white transition hover:bg-[#b81f24]">Tanya Sales</a>
                                        <a href="/produk" class="inline-flex items-center justify-center rounded-full border border-[#0f1f4f] px-4 py-2 text-xs font-bold uppercase tracking-[0.08em] text-[#0f1f4f] transition hover:bg-[#0f1f4f] hover:text-white">Kembali ke Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section id="detail-recommendations-home" class="rounded-2xl border border-[#d8dde8] bg-white p-4 md:p-5 shadow-sm">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <p class="text-[10px] md:text-[11px] font-semibold uppercase tracking-[0.16em] text-[#8a96aa]">Rekomendasi Produk</p>
                                    <h2 class="mt-1 text-sm md:text-base font-bold text-[#10215a]">Produk yang sering dipilih bersama</h2>
                                </div>
                                <a href="/produk" class="text-[11px] md:text-xs font-bold uppercase tracking-widest text-[#1d4fb3] hover:text-[#163b87]">Lihat semua</a>
                            </div>

                            <div class="mt-3 grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
                                @foreach ($lainnya as $recommendedProduct)
                                    @php
                                        $recCatName = $recommendedProduct->kategori ? $recommendedProduct->kategori->nama_kategori : 'Uncategorized';
                                        $recImg = asset($recommendedProduct->img ?? 'images/product/tractionhawcker.png');
                                    @endphp
                                    <a href="{{ url('/produk/detail?item=' . $recommendedProduct->kode_produk) }}" class="group overflow-hidden rounded-2xl border border-[#d8dde8] bg-[#f8fbff] shadow-[0_8px_18px_rgba(15,23,51,0.08)] transition-transform duration-300 hover:-translate-y-1 hover:shadow-[0_14px_24px_rgba(15,23,51,0.12)]">
                                        <div class="aspect-4/3 overflow-hidden bg-white p-3">
                                            <img src="{{ $recImg }}" alt="{{ $recommendedProduct->nama_produk }}" class="h-full w-full object-contain transition-transform duration-300 group-hover:scale-[1.04]" width="640" height="480" loading="lazy" decoding="async" />
                                        </div>
                                        <div class="border-t border-[#e2e7f1] p-3">
                                            <p class="text-[10px] font-semibold uppercase tracking-[0.14em] text-[#8a96aa]">{{ $recCatName }}</p>
                                            <h3 class="mt-1 text-sm font-bold leading-snug text-[#10215a]">{{ $recommendedProduct->nama_produk }}</h3>
                                            <p class="mt-1.5 text-[11px] leading-5 text-[#52617d] line-clamp-2">{{ $recommendedProduct->deskripsi }}</p>
                                            <span class="mt-3 inline-flex items-center gap-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#1d4fb3]">Lihat detail <span aria-hidden="true">→</span></span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
            </div>        
        </section>

        <section id="full-description-section" class="hidden bg-[#eceef2] pb-6 md:pb-8">
            <div class="max-w-400 mx-auto px-4 md:px-8">
                <div class="rounded-2xl border border-[#d8dde8] bg-white p-5 md:p-6 shadow-sm">
                    <div class="flex items-center justify-between gap-3">
                        <h3 id="full-description-title" class="text-sm md:text-base font-bold uppercase tracking-[0.12em] text-[#1f335f]">Deskripsi Lengkap Produk</h3>
                        <button id="hide-description" type="button" class="text-xs font-bold uppercase tracking-widest text-[#1d4fb3] hover:text-[#163b87]">Tutup</button>
                    </div>
                    <p class="mt-3 text-sm md:text-base leading-8 text-[#52617d]">
                        {{ $longDescription }}
                    </p>

                    <div class="mt-5 overflow-hidden rounded-2xl border-2 border-[#130a6f]">
                        <table class="w-full border-collapse text-left">
                            <thead>
                                <tr class="bg-[#efefef]">
                                    <th class="w-[38%] border-r-2 border-b-2 border-[#130a6f] px-4 py-3 text-center text-sm md:text-[15px] font-bold text-[#111111]">Fitur Utama</th>
                                    <th class="border-b-2 border-[#130a6f] px-4 py-3 text-center text-sm md:text-[15px] font-bold text-[#111111]">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specTable as $spec)
                                    <tr class="bg-[#efefef] even:bg-[#f5f5f5]">
                                        <th scope="row" class="border-r-2 border-b-2 border-[#130a6f] px-4 py-3 text-center text-sm md:text-[15px] font-bold text-[#111111]">{{ $spec['feature'] }}</th>
                                        <td class="border-b-2 border-[#130a6f] px-4 py-3 text-center text-sm md:text-[15px] font-semibold leading-6 text-[#111111]">{{ $spec['description'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div id="detail-recommendations-slot" class="mt-5 md:mt-6"></div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const productColumn = document.getElementById('detail-product-column');
            const recommendationsHome = document.getElementById('detail-recommendations-home');
            const recommendationsSlot = document.getElementById('detail-recommendations-slot');
            const mainImage = document.getElementById('detail-main-image');
            const prevButton = document.getElementById('detail-prev');
            const nextButton = document.getElementById('detail-next');
            const thumbs = Array.from(document.querySelectorAll('.detail-thumb'));

            if (!mainImage || thumbs.length === 0) {
                return;
            }

            const gallery = thumbs.map((thumb) => thumb.dataset.image).filter(Boolean);
            let currentIndex = 0;

            const renderImage = () => {
                mainImage.src = gallery[currentIndex];
                thumbs.forEach((thumb, idx) => {
                    thumb.classList.toggle('border-[#de2d2d]', idx === currentIndex);
                    thumb.classList.toggle('border-[#d8dde8]', idx !== currentIndex);
                });
            };

            prevButton?.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + gallery.length) % gallery.length;
                renderImage();
            });

            nextButton?.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % gallery.length;
                renderImage();
            });

            thumbs.forEach((thumb, index) => {
                thumb.addEventListener('click', () => {
                    currentIndex = index;
                    renderImage();
                });
            });

            const toggleDescription = document.getElementById('toggle-description');
            const fullDescriptionSection = document.getElementById('full-description-section');
            const fullDescriptionTitle = document.getElementById('full-description-title');
            const hideDescription = document.getElementById('hide-description');

            const getNavbarOffset = () => {
                const raw = getComputedStyle(document.documentElement).getPropertyValue('--navbar-height').trim();
                const parsed = Number.parseFloat(raw);
                return Number.isFinite(parsed) ? parsed : 0;
            };

            const scrollToDescriptionTop = () => {
                const anchor = fullDescriptionTitle ?? fullDescriptionSection;
                if (!anchor) {
                    return;
                }

                const top = anchor.getBoundingClientRect().top + window.scrollY - getNavbarOffset() - 10;
                window.scrollTo({ top, behavior: 'smooth' });
            };

            const moveRecommendationsToSlot = () => {
                if (recommendationsHome && recommendationsSlot && recommendationsHome.parentElement !== recommendationsSlot) {
                    recommendationsSlot.replaceChildren(recommendationsHome);
                }
            };

            const moveRecommendationsHome = () => {
                if (recommendationsHome && productColumn && recommendationsHome.parentElement !== productColumn) {
                    productColumn.appendChild(recommendationsHome);
                }
            };

            toggleDescription?.addEventListener('click', () => {
                if (!fullDescriptionSection) {
                    return;
                }

                const wasHidden = fullDescriptionSection.classList.contains('hidden');
                fullDescriptionSection.classList.remove('hidden');

                if (wasHidden) {
                    fullDescriptionSection.animate(
                        [
                            { opacity: 0, transform: 'translateY(12px)' },
                            { opacity: 1, transform: 'translateY(0)' },
                        ],
                        {
                            duration: 360,
                            easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
                        }
                    );
                }

                moveRecommendationsToSlot();

                scrollToDescriptionTop();
            });

            hideDescription?.addEventListener('click', () => {
                if (!fullDescriptionSection) {
                    return;
                }

                const closeAnimation = fullDescriptionSection.animate(
                    [
                        { opacity: 1, transform: 'translateY(0)', clipPath: 'inset(0 0 0 0)' },
                        { opacity: 0, transform: 'translateY(-12px)', clipPath: 'inset(0 0 100% 0)' },
                    ],
                    {
                        duration: 340,
                        easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
                        fill: 'forwards',
                    }
                );

                closeAnimation.onfinish = () => {
                    moveRecommendationsHome();
                    fullDescriptionSection.classList.add('hidden');
                    fullDescriptionSection.style.opacity = '';
                    fullDescriptionSection.style.transform = '';
                    fullDescriptionSection.style.clipPath = '';
                    toggleDescription?.scrollIntoView({ behavior: 'smooth', block: 'center' });
                };
            });

            moveRecommendationsHome();
            renderImage();
        });
    </script>
@endsection
