@extends('layouts.main')

@section('title', 'Produk - PT. Multidaya Anugrah Perkasa')

@section('content')
    @php
        $categories = $produks
            ->map(fn ($item) => optional($item->kategori)->nama_kategori ?? 'Uncategorized')
            ->unique()
            ->values();
    @endphp

    <main>
        <section class="reveal-on-scroll bg-[#eceef2] py-6 md:py-9 min-h-[auto] md:min-h-[calc(100svh-var(--navbar-height,0px))]">
            <div class="max-w-400 mx-auto px-4 md:px-8">
                <div class="grid gap-5 lg:grid-cols-[286px_minmax(0,1fr)] xl:grid-cols-[300px_minmax(0,1fr)]">
                    <aside class="space-y-3 lg:sticky lg:top-[calc(var(--navbar-height,0px)+0.8rem)] lg:self-start">
                        <div class="overflow-hidden rounded-2xl border border-[#d8dde8] bg-white shadow-sm">
                            <div class="flex items-center gap-2.5 bg-[#f2cd00] px-3.5 py-3.5 text-[#0f1733]">
                                <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#10215a] text-white text-base font-bold">☰</span>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.14em]">Menu</p>
                                    <h3 class="text-base font-bold leading-tight">Kategori Produk</h3>
                                </div>
                            </div>

                            <div class="space-y-2 px-3.5 py-3">
                                <button type="button" data-category="all" class="category-filter-btn w-full rounded-xl border border-[#bcc8de] bg-[#10215a] px-3 py-2 text-left text-sm font-semibold text-white transition hover:bg-[#1b3278]">
                                    Semua Kategori
                                </button>
                                @foreach ($categories as $category)
                                    <button type="button" data-category="{{ strtolower($category) }}" class="category-filter-btn w-full rounded-xl border border-[#d8dde8] bg-white px-3 py-2 text-left text-sm font-semibold text-[#23385e] transition hover:border-[#9aaed6] hover:bg-[#f6f8fc]">
                                        {{ $category }}
                                    </button>
                                @endforeach
                                <a href="/layanan" class="block px-3.5 py-3 text-sm font-semibold text-[#23385e] hover:bg-[#f6f8fc]">Service & After Sales</a>
                            </div>
                        </div>

                        <div class="rounded-xl bg-linear-to-br from-[#1c3d95] to-[#162c6f] p-3 text-white shadow-lg">
                            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-[#d2dfff]">Bantuan</p>
                            <h4 class="mt-1.5 text-sm font-bold leading-snug">Butuh rekomendasi produk forklift?</h4>
                            <a href="https://wa.me/6281234567890" class="mt-2.5 inline-flex w-full items-center justify-center rounded-lg bg-white px-3 py-1.5 text-xs font-bold text-[#16306f] transition hover:bg-[#f2cd00] hover:text-[#0f1733]">Hubungi Admin</a>
                        </div>
                    </aside>

                    <div>
                        <div class="mb-4 rounded-2xl border border-[#d8dde8] bg-white px-5 py-4 shadow-sm md:px-6 md:py-5">
                            <div class="flex flex-col gap-3">
                                <div>
                                    <h1 id="selected-category-title" class="text-[clamp(1.1rem,1.8vw,1.8rem)] font-bold uppercase tracking-tight text-[#10215a]">Kategori: Semua Produk Forklift</h1>
                                    <p class="mt-1 text-xs md:text-sm font-semibold text-[#7b889f]">Menampilkan <span id="visible-product-count">{{ count($produks) }}</span> produk unggulan untuk kebutuhan operasional Anda.</p>
                                </div>
                            </div>
                        </div>

                        @php
                            $productCardGradients = [
                                'linear-gradient(145deg, #f4f8ff 0%, #e7efff 54%, #dce8ff 100%)',
                                'linear-gradient(145deg, #eef5ff 0%, #e2ecff 52%, #d5e4ff 100%)',
                                'linear-gradient(145deg, #f5f9ff 0%, #e8f0ff 50%, #dce8ff 100%)',
                                'linear-gradient(145deg, #edf4ff 0%, #e0ebff 52%, #d4e3ff 100%)',
                            ];
                        @endphp

                        <div id="produk-grid" class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                            @foreach ($produks as $product)
                                @php
                                    $categoryName = $product->kategori ? $product->kategori->nama_kategori : 'Uncategorized';
                                    $categoryKey = strtolower($categoryName);
                                    $img = asset($product->img ?? 'images/product/tractionhawcker.png');
                                @endphp
                                <article
                                    data-category="{{ $categoryKey }}"
                                    data-detail-url="{{ url('/produk/detail?item=' . urlencode($product->kode_produk)) }}"
                                    tabindex="0"
                                    role="link"
                                    class="product-card group cursor-pointer overflow-hidden rounded-2xl border border-[#c9d8f2] shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                                    style="background-image: {{ $productCardGradients[$loop->index % count($productCardGradients)] }};"
                                >
                                    <div class="relative aspect-[4/3] overflow-hidden bg-[linear-gradient(160deg,#ffffff_0%,#edf4ff_100%)]">
                                        <span class="absolute right-3 top-3 z-10 rounded-full bg-[#1f2e57] px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.08em] text-white">{{ strtoupper($categoryName) }}</span>
                                        <img src="{{ $img }}" alt="{{ $product->nama_produk }}" class="h-full w-full object-contain p-4 transition-transform duration-500 group-hover:scale-105" width="640" height="640" loading="lazy" decoding="async" />
                                    </div>
                                    <div class="space-y-2 p-3.5">
                                        <p class="text-[11px] font-bold uppercase tracking-widest text-[#274fba]">{{ $categoryName }}</p>
                                        <h2 class="text-[1.02rem] font-bold leading-snug text-[#0f1733]">{{ $product->nama_produk }}</h2>
                                        <p class="text-xs font-semibold text-[#5f7091]">{{ $product->kode_produk }}</p>
                                        <p class="text-xs leading-relaxed text-[#4c5f82] line-clamp-2">{{ $product->deskripsi }}</p>
                                        <a href="{{ url('/produk/detail?item=' . urlencode($product->kode_produk)) }}" class="mt-2 inline-flex w-full items-center justify-center rounded-xl bg-white/85 px-3 py-2 text-xs font-bold uppercase tracking-[0.08em] text-[#1d376b] transition hover:bg-[#f2cd00] hover:text-[#0f1733]">Lihat Detail</a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.category-filter-btn');
            const productCards = document.querySelectorAll('.product-card');
            const selectedCategoryTitle = document.getElementById('selected-category-title');
            const visibleProductCount = document.getElementById('visible-product-count');

            function updateActiveButton(activeButton) {
                filterButtons.forEach((button) => {
                    button.classList.remove('bg-[#10215a]', 'text-white', 'border-[#bcc8de]');
                    button.classList.add('bg-white', 'text-[#23385e]', 'border-[#d8dde8]');
                });

                activeButton.classList.remove('bg-white', 'text-[#23385e]', 'border-[#d8dde8]');
                activeButton.classList.add('bg-[#10215a]', 'text-white', 'border-[#bcc8de]');
            }

            function applyCategoryFilter(categoryValue, categoryLabel) {
                let totalVisible = 0;

                productCards.forEach((card) => {
                    const cardCategory = card.getAttribute('data-category');
                    const shouldShow = categoryValue === 'all' || cardCategory === categoryValue;

                    card.style.display = shouldShow ? '' : 'none';
                    if (shouldShow) totalVisible += 1;
                });

                const titleLabel = categoryValue === 'all' ? 'Semua Produk Forklift' : categoryLabel;
                selectedCategoryTitle.textContent = 'Kategori: ' + titleLabel;
                visibleProductCount.textContent = String(totalVisible);
            }

            productCards.forEach((card) => {
                card.addEventListener('click', function (event) {
                    if (event.target.closest('a, button')) {
                        return;
                    }

                    const detailUrl = card.getAttribute('data-detail-url');
                    if (detailUrl) {
                        window.location.href = detailUrl;
                    }
                });

                card.addEventListener('keydown', function (event) {
                    if (event.key !== 'Enter' && event.key !== ' ') {
                        return;
                    }

                    event.preventDefault();
                    const detailUrl = card.getAttribute('data-detail-url');
                    if (detailUrl) {
                        window.location.href = detailUrl;
                    }
                });
            });

            filterButtons.forEach((button) => {
                button.addEventListener('click', function () {
                    const categoryValue = button.getAttribute('data-category');
                    const categoryLabel = button.textContent.trim();

                    updateActiveButton(button);
                    applyCategoryFilter(categoryValue, categoryLabel);
                });
            });

            const params = new URLSearchParams(window.location.search);
            const requestedCategory = (params.get('category') || '').toLowerCase();
            const categoryAliasMap = {
                accessories: ['accessories', 'accesories'],
                accesories: ['accessories', 'accesories'],
            };

            const candidateCategories = categoryAliasMap[requestedCategory] || [requestedCategory];
            const matchedButton = filterButtons.length > 0
                ? Array.from(filterButtons).find((button) => candidateCategories.includes(button.getAttribute('data-category')))
                : null;

            if (matchedButton) {
                matchedButton.click();
            }
        });
    </script>
@endsection
