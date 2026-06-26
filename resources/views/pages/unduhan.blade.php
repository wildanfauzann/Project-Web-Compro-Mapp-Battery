@extends('layouts.main')

@section('title', 'Unduhan - PT. Multidaya Anugrah Perkasa')

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
                            Pusat Unduhan
                        </h1>
                        <p class="layanan-hero-copy mx-auto mt-5 max-w-3xl text-sm leading-relaxed text-slate-600 md:text-lg md:leading-8">
                            Temukan berbagai dokumen resmi PT. Multidaya Anugrah Perkasa dalam satu halaman. Unduh katalog produk, brosur layanan, materi presentasi, dan dokumen pendukung lainnya untuk membantu Anda mengenal solusi baterai industri kami secara lebih lengkap dan profesional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 1: Download Cards Grid -->
        <section class="py-10 md:py-14 reveal-on-scroll bg-[#0b0556]">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="mx-auto grid max-w-4xl gap-4 sm:grid-cols-2 lg:grid-cols-3 md:gap-6">
                    <article class="border border-[#c8ccdb] bg-[#dfe3ef] p-3 md:p-4 shadow-[0_10px_22px_rgba(0,0,0,0.2)]">
                        <div class="aspect-4/3 w-full overflow-hidden border border-[#b6bccc] bg-[#cfd5e2]">
                            <img src="{{ asset('images/hero/AfterSalesHero.jpg') }}" alt="Layanan" class="h-full w-full object-cover" width="320" height="240" loading="lazy" decoding="async" />
                        </div>
                        <div class="mt-3 flex items-center justify-between gap-3">
                            <p class="text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#141414]">Layanan</p>
                            <a href="#" class="inline-flex items-center gap-1 rounded-[3px] bg-[#f2cd00] px-2 py-1 text-[9px] md:text-[10px] font-bold text-[#131313] transition-colors hover:bg-[#ffd83a]">
                                Unduh
                                <span aria-hidden="true" class="inline-flex h-3 w-3 items-center justify-center rounded-full bg-[#111] text-[8px] text-white">→</span>
                            </a>
                        </div>
                    </article>

                    <article class="border-2 border-[#2aa9ff] bg-[#dfe3ef] p-3 md:p-4 shadow-[0_10px_22px_rgba(0,0,0,0.2)]">
                        <div class="aspect-4/3 w-full overflow-hidden border border-[#b6bccc] bg-[#cfd5e2]">
                            <img src="{{ asset('images/product/battery1.png') }}" alt="Produk" class="h-full w-full object-cover" width="320" height="240" loading="lazy" decoding="async" />
                        </div>
                        <div class="mt-3 flex items-center justify-between gap-3">
                            <p class="text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#141414]">Produk</p>
                            <a href="#" class="inline-flex items-center gap-1 rounded-[3px] bg-[#f2cd00] px-2 py-1 text-[9px] md:text-[10px] font-bold text-[#131313] transition-colors hover:bg-[#ffd83a]">
                                Unduh
                                <span aria-hidden="true" class="inline-flex h-3 w-3 items-center justify-center rounded-full bg-[#111] text-[8px] text-white">→</span>
                            </a>
                        </div>
                    </article>

                    <article class="border border-[#c8ccdb] bg-[#dfe3ef] p-3 md:p-4 shadow-[0_10px_22px_rgba(0,0,0,0.2)] sm:col-span-2 lg:col-span-1">
                        <div class="aspect-4/3 w-full overflow-hidden border border-[#b6bccc] bg-[#cfd5e2]">
                            <img src="{{ asset('images/artikel/artikel2.png') }}" alt="Materi Event" class="h-full w-full object-cover" width="320" height="240" loading="lazy" decoding="async" />
                        </div>
                        <div class="mt-3 flex items-center justify-between gap-3">
                            <p class="text-[10px] md:text-[11px] font-semibold uppercase tracking-wide text-[#141414]">Materi Event</p>
                            <a href="#" class="inline-flex items-center gap-1 rounded-[3px] bg-[#f2cd00] px-2 py-1 text-[9px] md:text-[10px] font-bold text-[#131313] transition-colors hover:bg-[#ffd83a]">
                                Unduh
                                <span aria-hidden="true" class="inline-flex h-3 w-3 items-center justify-center rounded-full bg-[#111] text-[8px] text-white">→</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section 3: CTA -->
        <section class="relative overflow-hidden py-14 md:py-16 min-h-[calc(100svh-var(--navbar-height,0px))] flex items-center reveal-on-scroll" data-nav-gradient="linear-gradient(120deg, #ffffff 0%, #f2f6ff 55%, #e5edff 100%)" data-nav-glow="rgba(120, 144, 255, 0.2)">
            <div class="pointer-events-none absolute inset-0 opacity-70" aria-hidden="true" style="background-image: radial-gradient(rgba(59, 130, 246, 0.08) 1px, transparent 1px); background-size: 24px 24px; background-position: 0 0;"></div>
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.06),transparent_34%),radial-gradient(circle_at_20%_25%,rgba(242,205,0,0.14),transparent_18%),radial-gradient(circle_at_80%_75%,rgba(47,128,237,0.08),transparent_24%)]" aria-hidden="true"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="mx-auto flex max-w-4xl flex-col items-center text-center px-4 md:px-6 py-10 md:py-14">
                    <span class="inline-flex items-center rounded-full border border-[#b9c9e6] bg-white px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.18em] text-[#1d4ed8] shadow-[0_8px_20px_rgba(15,23,42,0.06)]">
                        Konsultasi & Dukungan
                    </span>
                    <h2 class="mt-4 text-[clamp(2rem,4vw,3.9rem)] font-bold leading-[1.05] tracking-tight text-[#0f1733]">
                        Jangan Biarkan Kebutuhan Dokumen
                        <span class="block text-[#1d4ed8]">Menghambat Produktivitas Anda.</span>
                    </h2>
                    <p class="mt-5 max-w-2xl text-sm md:text-lg leading-relaxed text-[#4f5f7e]">
                        Dapatkan akses file yang relevan bersama tim kami. Kami siap membantu dari pencarian dokumen, unduhan katalog, hingga rekomendasi materi yang paling sesuai untuk kebutuhan bisnis Anda.
                    </p>
                    <a href="#" class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] shadow-[0_14px_30px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                        Unduh Sekarang
                        <span aria-hidden="true" class="text-base">→</span>
                    </a>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-[11px] md:text-sm text-[#5f6f8f]">
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>File mudah diakses</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Materi selalu relevan</span>
                        <span class="inline-flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-[#f2cd00]"></span>Respon cepat dan ramah</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
