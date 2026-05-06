@extends('layouts.main')

@section('title', 'Detail Layanan - PT. Multidaya Anugrah Perkasa')

@section('content')
    <main>
        <!-- Section 1: Hero -->
        <section class="py-8 md:py-12 bg-white reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
                <h1 class="text-2xl md:text-3xl font-bold mb-4 md:mb-6">Lorem ipsum.</h1>
                <p class="text-sm md:text-base max-w-2xl mx-auto leading-relaxed text-slate-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
            </div>
        </section>

        <!-- Section 2: Image Carousel -->
        <section class="py-8 md:py-12 section-muted reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="flex items-center justify-center gap-3 md:gap-6">
                    <button type="button" class="slider-nav text-xl md:text-2xl" id="service-detail-prev" aria-label="Gambar sebelumnya">‹</button>
                    <div class="flex-1 w-full max-w-2xl aspect-[16/9] bg-white rounded-lg shimmer" id="service-detail-image"></div>
                    <button type="button" class="slider-nav text-xl md:text-2xl" id="service-detail-next" aria-label="Gambar berikutnya">›</button>
                </div>
            </div>
        </section>

        <!-- Section 3: Content with Image -->
        <section class="py-8 md:py-12 bg-white reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="grid md:grid-cols-2 gap-6 md:gap-10 items-center">
                    <!-- Left: Text Content -->
                    <div class="space-y-3 md:space-y-4">
                        <p class="text-sm md:text-base leading-relaxed text-slate-800">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="text-sm md:text-base leading-relaxed text-slate-800">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                    </div>

                    <!-- Right: Image -->
                    <div class="aspect-[4/3] w-full bg-slate-300 rounded-lg shimmer"></div>
                </div>
            </div>
        </section>

        <!-- Section 4: Related Services -->
        <section class="py-8 md:py-12 section-muted reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <h2 class="text-xl md:text-2xl font-bold text-center mb-6 md:mb-8">Layanan lainnya</h2>
                
                <div class="grid md:grid-cols-2 gap-4 md:gap-6 max-w-3xl mx-auto">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="bg-white rounded-xl overflow-hidden">
                            <div class="aspect-[4/3] w-full bg-slate-200 shimmer"></div>
                            <div class="p-4 md:p-5">
                                <p class="text-xs md:text-sm leading-5 mb-3 text-slate-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a href="/layanan/detail" class="text-xs md:text-sm font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">
                                    Lorem ipsum. <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="mt-6 text-center">
                    <a href="/layanan" class="btn-outline interactive-press text-sm inline-flex items-center gap-2">Lorem ipsum. <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>  
    </main>

    <script>
        // Service Detail Image Carousel
        document.addEventListener('DOMContentLoaded', () => {
            const serviceDetailImage = document.getElementById('service-detail-image');
            const serviceDetailPrev = document.getElementById('service-detail-prev');
            const serviceDetailNext = document.getElementById('service-detail-next');

            const serviceDetailSlides = [
                { imageClass: 'bg-white' },
                { imageClass: 'bg-slate-100' },
                { imageClass: 'bg-slate-200' },
            ];

            let serviceDetailIndex = 0;

            const renderServiceDetailSlide = () => {
                if (!serviceDetailImage) return;

                const slide = serviceDetailSlides[serviceDetailIndex];
                serviceDetailImage.classList.remove('bg-white', 'bg-slate-100', 'bg-slate-200');
                serviceDetailImage.classList.add(slide.imageClass);
            };

            if (serviceDetailPrev && serviceDetailNext) {
                serviceDetailPrev.addEventListener('click', () => {
                    serviceDetailIndex = (serviceDetailIndex - 1 + serviceDetailSlides.length) % serviceDetailSlides.length;
                    renderServiceDetailSlide();
                });

                serviceDetailNext.addEventListener('click', () => {
                    serviceDetailIndex = (serviceDetailIndex + 1) % serviceDetailSlides.length;
                    renderServiceDetailSlide();
                });

                renderServiceDetailSlide();
            }
        });
    </script>
@endsection
