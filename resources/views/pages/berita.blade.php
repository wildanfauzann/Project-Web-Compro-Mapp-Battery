@extends('layouts.main')

@section('title', 'Berita dan Artikel - PT. Multidaya Anugrah Perkasa')

@push('head')
    <link rel="preload" as="image" href="{{ asset('images/hero/hero4.png') }}">
@endpush

@section('content')
    <main>
        <section class="berita-hero-section relative overflow-hidden flex items-end md:items-center min-h-[100svh] md:min-h-[calc(100vh-140px)] pt-24 md:pt-10 pb-12 md:pb-10" style="background-image: linear-gradient(180deg, rgba(4, 11, 31, 0.32) 0%, rgba(5, 14, 38, 0.76) 74%, rgba(5, 14, 38, 0.92) 100%), url('{{ asset('images/hero/hero4.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="max-w-7xl mx-auto px-4 md:px-8 w-full relative z-10">
                <div class="max-w-3xl">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-4 py-1.5 text-[11px] md:text-xs font-bold uppercase tracking-[0.18em] text-[#0f1733]">Newsroom</span>
                    <h1 class="mt-4 text-[clamp(2.2rem,5vw,3.8rem)] leading-[1.08] font-bold tracking-tight text-white">
                        Berita dan Artikel
                    </h1>
                    <p class="mt-3 md:mt-4 text-base md:text-lg leading-relaxed text-[#cbd5e6] max-w-2xl">
                        Ruang editorial PT. Multidaya Anugrah Perkasa yang merangkum perjalanan lapangan, proses evaluasi teknis, dan pembelajaran operasional agar pelanggan memperoleh keputusan berbasis data, bukan asumsi.
                    </p>
                </div>
            </div>
        </section>

        <section id="berita-list" class="berita-articles-section py-12 md:py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="grid gap-6 md:gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($articles as $article)
                        <article class="berita-card group flex flex-col h-full rounded-2xl border border-[#e5edff] bg-white shadow-[0_8px_20px_rgba(15,23,51,0.08)] overflow-hidden transition-all hover:-translate-y-1 hover:shadow-[0_16px_32px_rgba(15,23,51,0.16)]">
                            <div class="relative overflow-hidden bg-[#f0f4ff] h-48 md:h-56">
                                <img src="{{ $article->gambar_utama ? asset($article->gambar_utama) : asset('images/placeholder.jpg') }}" alt="{{ $article->judul }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" width="640" height="400" loading="lazy" decoding="async" />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>

                            <div class="flex flex-col flex-1 p-5 md:p-6">
                                <span class="inline-flex w-fit items-center rounded-full bg-[#f2cd00] px-3 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.12em] text-[#0f1733]">
                                    {{ $article->kategori_artikel }}
                                </span>

                                <h3 class="mt-3.5 text-base md:text-lg font-bold leading-snug text-[#0f1733] line-clamp-2">
                                    {{ $article->judul }}
                                </h3>

                                <p class="mt-3 text-sm leading-relaxed text-[#5a6784] flex-1 line-clamp-3">
                                    {{ Str::limit(strip_tags($article->deskripsi), 120) }}
                                </p>

                                <a href="{{ route('berita.show', $article->slug) }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-[#2f4a99] transition-colors hover:text-[#f2cd00]">
                                    Baca Selengkapnya <span aria-hidden="true">→</span>
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="col-span-full text-center py-16">
                            <p class="text-gray-500">Tidak ada artikel tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>


        <section class="berita-cta-section relative overflow-hidden py-12 md:py-16 flex items-center" style="background: linear-gradient(135deg, #0f1733 0%, #1a2548 45%, #2f4a99 100%);">
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
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
