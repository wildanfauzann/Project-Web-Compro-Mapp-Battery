<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita dan Artikel - PT. Multidaya Anugrah Perkasa</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['IBM_Plex_Sans'] bg-slate-50 text-slate-900 selection:bg-slate-800 selection:text-white">
    <x-navbar />

    <main>

        <section class="berita-hero-section berita-screen-section berita-scroll-stage berita-transition-to-light reveal-on-scroll relative overflow-hidden flex items-end" style="background-image: linear-gradient(180deg, rgba(4, 11, 31, 0.25) 0%, rgba(5, 14, 38, 0.72) 76%, rgba(5, 14, 38, 0.9) 100%), url('{{ asset('images/hero/hero4.png') }}');">
            <div class="berita-hero-pattern" aria-hidden="true"></div>
            <div class="berita-hero-orb berita-hero-orb-left" aria-hidden="true"></div>
            <div class="berita-hero-orb berita-hero-orb-right" aria-hidden="true"></div>
            <div class="max-w-7xl mx-auto px-4 md:px-8 pb-14 md:pb-18 w-full relative z-10">
                <div class="berita-hero-stage grid max-w-6xl gap-6 px-1 py-2 md:grid-cols-[minmax(0,1.2fr)_minmax(0,0.8fr)] md:px-1 md:py-2">
                    <div>
                        <span class="berita-hero-chip inline-flex items-center rounded-full bg-[#f2cd00] px-4 py-1 text-[10px] md:text-xs font-bold uppercase tracking-[0.18em] text-[#0f1733]">Newsroom</span>
                        <h1 class="berita-hero-title mt-4 text-[clamp(1.8rem,3.6vw,3.35rem)] leading-[1.04] font-bold tracking-tight text-white">
                            Berita dan Artikel
                        </h1>
                        <p class="berita-hero-subtitle mt-3 text-sm md:text-lg leading-relaxed text-[#dce7ff] max-w-2xl">
                            Ruang editorial PT. Multidaya Anugrah Perkasa yang merangkum perjalanan lapangan, proses evaluasi teknis, dan pembelajaran operasional agar pelanggan memperoleh keputusan berbasis data, bukan asumsi.
                        </p>
                        <div class="mt-6 flex flex-wrap items-center gap-3">
                            <a href="#berita-list" class="inline-flex items-center gap-2 rounded-full bg-[#f2cd00] px-5 py-2.5 text-xs md:text-sm font-bold text-[#0f1733] shadow-[0_12px_26px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                                Jelajahi Artikel <span aria-hidden="true">→</span>
                            </a>
                            <a href="/layanan" class="inline-flex items-center gap-2 rounded-full border border-[#c6d8ff] bg-white/10 px-5 py-2.5 text-xs md:text-sm font-semibold text-[#e9f1ff] transition-colors hover:bg-white/18">
                                Lihat Layanan
                            </a>
                        </div>
                    </div>
                    <aside class="berita-hero-stats grid gap-3 self-end">
                        <article class="berita-hero-stat px-4 py-3">
                            <p class="text-[10px] uppercase tracking-[0.16em] text-[#c7d9ff]">Fokus Minggu Ini</p>
                            <h3 class="mt-1 text-base font-bold leading-tight text-white">Visit Customer dan Audit Kondisi Nyata di Lapangan</h3>
                        </article>
                        <article class="berita-hero-stat px-4 py-3">
                            <p class="text-[10px] uppercase tracking-[0.16em] text-[#c7d9ff]">Sorotan Utama</p>
                            <h3 class="mt-1 text-base font-bold leading-tight text-white">Peningkatan standar layanan bersama principal dan tim site operation</h3>
                        </article>
                        <article class="berita-hero-stat px-4 py-3">
                            <p class="text-[10px] uppercase tracking-[0.16em] text-[#c7d9ff]">Arah Editorial</p>
                            <h3 class="mt-1 text-base font-bold leading-tight text-white">Artikel lebih mendalam, lebih dekat dengan konteks operasional harian pelanggan</h3>
                        </article>
                    </aside>
                </div>
            </div>
        </section>

        <section class="berita-editorial-section berita-screen-section berita-scroll-stage reveal-on-scroll py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="grid gap-6 md:grid-cols-[minmax(0,1.15fr)_minmax(0,0.85fr)]">
                    <article class="berita-editorial-main p-1 md:p-1">
                        <div class="berita-editorial-main-content px-4 py-5 md:px-6 md:py-7">
                        <span class="inline-flex items-center rounded-full bg-[#0c014c] px-4 py-1 text-[10px] md:text-xs font-bold uppercase tracking-[0.16em] text-white">Editorial Overview</span>
                        <h2 class="mt-4 text-[clamp(1.45rem,2.5vw,2.45rem)] font-bold leading-tight text-[#10245a]">Dari Kunjungan, Pelatihan, hingga Uji Mutu: Membangun Sistem Layanan yang Berkelanjutan</h2>
                        <p class="mt-4 text-sm md:text-base leading-relaxed text-[#455a88]">
                            Sepanjang periode ini, tim PT. Multidaya Anugrah Perkasa menempatkan agenda kunjungan pelanggan sebagai fondasi utama penyusunan strategi layanan. Setiap diskusi lapangan kami terjemahkan menjadi catatan teknis yang lebih terstruktur, mulai dari pola pemakaian baterai per shift, kebiasaan charging, hingga titik kritis yang paling sering menimbulkan downtime.
                        </p>
                        <p class="mt-3 text-sm md:text-base leading-relaxed text-[#455a88]">
                            Pendekatan tersebut dilanjutkan melalui principal visit, sesi training berkala, dan unit testing yang lebih disiplin. Hasilnya bukan sekadar dokumentasi kegiatan, melainkan rangkaian perbaikan berkelanjutan agar pelanggan memperoleh reliabilitas unit yang lebih konsisten, biaya operasional yang lebih terkendali, dan proses kerja yang semakin aman untuk tim lapangan.
                        </p>
                        </div>
                    </article>

                    <div class="grid gap-3 md:gap-4">
                        @foreach ($editorialMoments as $moment)
                            <article class="berita-editorial-card group p-3">
                                <div class="grid grid-cols-[84px_minmax(0,1fr)] items-center gap-3 md:grid-cols-[94px_minmax(0,1fr)]">
                                    <div class="overflow-hidden rounded-xl border border-[#dbe6ff] bg-[#edf3ff]">
                                        <img src="{{ $moment['image'] }}" alt="{{ $moment['title'] }}" class="berita-editorial-image h-18.5 w-full object-cover md:h-20.5" />
                                    </div>
                                    <div class="min-w-0">
                                        <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#0f1733]">{{ $moment['tag'] }}</span>
                                        <h3 class="mt-1 text-sm md:text-base font-bold leading-snug text-[#0f1733]">{{ $moment['title'] }}</h3>
                                    </div>
                                </div>
                                <p class="mt-2 text-xs md:text-sm leading-relaxed text-[#4b5d83]">{{ $moment['excerpt'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="berita-runline-section berita-scroll-stage" aria-label="highlight berjalan">
            <div class="berita-runline-track">
                <div class="berita-runline-group">
                    <span>VISIT CUSTOMER</span>
                    <span>PRINCIPAL INSIGHT</span>
                    <span>TRAINING & SAFETY CULTURE</span>
                    <span>UNIT TESTING QUALITY GATE</span>
                    <span>OPERASIONAL BERBASIS DATA</span>
                    <span>VISIT CUSTOMER</span>
                    <span>PRINCIPAL INSIGHT</span>
                    <span>TRAINING & SAFETY CULTURE</span>
                    <span>UNIT TESTING QUALITY GATE</span>
                    <span>OPERASIONAL BERBASIS DATA</span>
                </div>
                <div class="berita-runline-group" aria-hidden="true">
                    <span>VISIT CUSTOMER</span>
                    <span>PRINCIPAL INSIGHT</span>
                    <span>TRAINING & SAFETY CULTURE</span>
                    <span>UNIT TESTING QUALITY GATE</span>
                    <span>OPERASIONAL BERBASIS DATA</span>
                    <span>VISIT CUSTOMER</span>
                    <span>PRINCIPAL INSIGHT</span>
                    <span>TRAINING & SAFETY CULTURE</span>
                    <span>UNIT TESTING QUALITY GATE</span>
                    <span>OPERASIONAL BERBASIS DATA</span>
                </div>
            </div>
        </section>

        <section id="berita-list" class="berita-screen-section berita-scroll-stage berita-transition-to-dark py-10 md:py-14 bg-white reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="text-center">
                    <span class="berita-visit-chip inline-flex items-center rounded-full bg-[#0c014c] px-5 py-2 text-xs md:text-sm font-bold text-white shadow-[0_10px_24px_rgba(12,1,76,0.28)]">Visit Customer</span>
                    <h2 class="mt-4 text-[clamp(1.5rem,2.3vw,2.5rem)] font-bold leading-tight tracking-tight text-[#10245a]">
                        Dokumentasi Kunjungan & Kolaborasi Lapangan
                    </h2>
                    <p class="mx-auto mt-2 max-w-3xl text-sm md:text-base leading-relaxed text-[#4b5d83]">
                        Rangkaian artikel lapangan ini merangkum proses observasi, diskusi teknis, dan tindak lanjut yang kami lakukan bersama pelanggan untuk memastikan solusi baterai forklift tidak hanya tepat saat implementasi awal, tetapi juga tetap relevan saat skala operasional terus berkembang.
                    </p>
                </div>

                <div class="mt-7 space-y-4 md:space-y-5">
                    @foreach ($visitStories as $story)
                        <article class="berita-visit-row group grid items-center gap-3 border-b border-[#d7e2fb] p-3.5 md:grid-cols-[auto_minmax(0,260px)_auto_minmax(0,1fr)] md:gap-4 md:p-4.5" data-visit-row data-gallery='@json($story['gallery'])'>
                            <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto sebelumnya">‹</button>
                            <div class="overflow-hidden rounded-xl border border-[#d8e4ff] bg-[#e7efff]">
                                <img src="{{ $story['gallery'][0] }}" alt="Kunjungan {{ $story['company'] }}" class="berita-visit-image h-36 w-full object-cover md:h-38" data-visit-image />
                            </div>
                            <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto berikutnya">›</button>

                            <div class="min-w-0">
                                <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#0f1733]">{{ $story['company'] }}</span>
                                <h3 class="mt-1.5 text-base md:text-xl font-bold leading-tight text-[#0f1733] berita-visit-title">{{ $story['headline'] }}</h3>
                                <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#4b5d83]">
                                    {{ $story['description'] }}
                                </p>
                                <p class="mt-2 text-xs md:text-sm leading-relaxed text-[#5a6d96]">
                                    Pada sesi bersama {{ $story['company'] }}, tim kami juga melakukan pemetaan prioritas operasional per area kerja, mengidentifikasi pola penggunaan unit, serta menyusun rekomendasi perawatan bertahap agar kinerja baterai tetap stabil pada jam operasional puncak.
                                </p>
                                <div class="mt-3 flex flex-wrap gap-2 text-[10px] md:text-xs">
                                    <span class="berita-inline-tag">Audit Beban Shift</span>
                                    <span class="berita-inline-tag">Evaluasi Charging Habit</span>
                                    <span class="berita-inline-tag">Rencana Improvement</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="visit-principal" class="berita-principal-section berita-screen-section berita-scroll-stage berita-transition-to-light py-10 md:py-14 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="berita-principal-shell px-1 py-2 md:px-1 md:py-2">
                    <div class="text-center">
                        <span class="berita-visit-chip inline-flex items-center rounded-full bg-white px-5 py-2 text-xs md:text-sm font-bold text-[#0c014c] shadow-[0_10px_24px_rgba(8,14,38,0.26)]">Visit Principal</span>
                        <h2 class="mt-4 text-[clamp(1.45rem,2.2vw,2.35rem)] font-bold leading-tight tracking-tight text-white">
                            Knowledge Transfer dan Evaluasi Teknologi Bersama Principal
                        </h2>
                        <p class="mx-auto mt-2 max-w-3xl text-sm md:text-base leading-relaxed text-[#d4e2ff]">
                            Kunjungan principal menjadi ruang sinkronisasi standar global dan kebutuhan lokal. Melalui pembahasan ini, kami memperkaya prosedur teknis agar setiap proses maintenance, troubleshooting, dan evaluasi performa berjalan lebih konsisten di seluruh site pelanggan.
                        </p>
                    </div>

                    <div class="mt-7 space-y-4 md:space-y-5">
                        @foreach ($principalStories as $story)
                            <article class="berita-visit-row berita-principal-row group grid items-center gap-3 border-b border-[#3f5daf] p-3.5 md:grid-cols-[auto_minmax(0,260px)_auto_minmax(0,1fr)] md:gap-4 md:p-4.5" data-visit-row data-gallery='@json($story['gallery'])'>
                                <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto principal sebelumnya">‹</button>
                                <div class="overflow-hidden rounded-xl border border-[#5f7ec8] bg-[#0f2a70]">
                                    <img src="{{ $story['gallery'][0] }}" alt="Kunjungan {{ $story['company'] }}" class="berita-visit-image h-36 w-full object-cover md:h-38" data-visit-image />
                                </div>
                                <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto principal berikutnya">›</button>

                                <div class="min-w-0">
                                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#0f1733]">{{ $story['company'] }}</span>
                                    <h3 class="mt-1.5 text-base md:text-xl font-bold leading-tight text-white berita-visit-title">{{ $story['headline'] }}</h3>
                                    <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#d6e3ff]">
                                        {{ $story['description'] }}
                                    </p>
                                    <p class="mt-2 text-xs md:text-sm leading-relaxed text-[#c0d3ff]">
                                        Agenda bersama {{ $story['company'] }} difokuskan pada pemutakhiran parameter inspeksi, standar respon terhadap gejala dini penurunan performa, serta alignment proses after-sales agar SLA layanan semakin terukur.
                                    </p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="exhibition" class="berita-exhibition-section berita-screen-section berita-scroll-stage berita-transition-to-dark py-10 md:py-14 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="text-center">
                    <span class="inline-flex items-center rounded-full bg-[#0c014c] px-5 py-2 text-xs md:text-sm font-bold text-white shadow-[0_10px_24px_rgba(12,1,76,0.26)]">Exhibition</span>
                    <h2 class="mt-4 text-[clamp(1.45rem,2.2vw,2.35rem)] font-bold leading-tight tracking-tight text-[#10245a]">
                        Aktivitas Pameran dan Showcase Teknologi Industri
                    </h2>
                    <p class="mx-auto mt-2 max-w-3xl text-sm md:text-base leading-relaxed text-[#4b5d83]">
                        Kehadiran kami di berbagai pameran bukan sekadar partisipasi event, tetapi forum untuk membaca tren industri, menangkap tantangan baru di sektor logistik dan manufaktur, serta memperluas kolaborasi menuju ekosistem operasional yang lebih efisien.
                    </p>
                </div>

                <div class="mt-7 space-y-4 md:space-y-5">
                    @foreach ($exhibitionStories as $story)
                        <article class="berita-visit-row berita-exhibition-row group grid items-center gap-3 border-b border-[#d7e2fb] p-3.5 md:grid-cols-[auto_minmax(0,260px)_auto_minmax(0,1fr)] md:gap-4 md:p-4.5" data-visit-row data-gallery='@json($story['gallery'])'>
                            <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto pameran sebelumnya">‹</button>
                            <div class="overflow-hidden rounded-xl border border-[#d8e4ff] bg-[#e7efff]">
                                <img src="{{ $story['gallery'][0] }}" alt="Exhibition {{ $story['company'] }}" class="berita-visit-image h-36 w-full object-cover md:h-38" data-visit-image />
                            </div>
                            <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto pameran berikutnya">›</button>

                            <div class="min-w-0">
                                <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#0f1733]">{{ $story['company'] }}</span>
                                <h3 class="mt-1.5 text-base md:text-xl font-bold leading-tight text-[#0f1733] berita-visit-title">{{ $story['headline'] }}</h3>
                                <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#4b5d83]">
                                    {{ $story['description'] }}
                                </p>
                                <p class="mt-2 text-xs md:text-sm leading-relaxed text-[#5a6d96]">
                                    Dari pameran {{ $story['company'] }}, kami mencatat tren kebutuhan pelanggan terhadap siklus charging yang lebih singkat, downtime yang lebih rendah, dan model layanan teknis yang lebih proaktif agar target produktivitas tetap tercapai.
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="instalasi-battery" class="berita-installation-section berita-screen-section berita-scroll-stage berita-transition-to-light py-10 md:py-14 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="berita-installation-shell mx-auto max-w-5xl px-2 py-4 md:px-2 md:py-5">
                    <div class="text-center">
                        <span class="inline-flex items-center rounded-md bg-white px-4 py-1.5 text-sm md:text-base font-bold text-[#0c014c] shadow-[0_8px_20px_rgba(8,14,38,0.24)]">
                            {{ $installationStory['title'] }}
                        </span>
                    </div>

                    <article class="mt-6" data-visit-row data-gallery='@json($installationStory['gallery'])'>
                        <div class="grid items-center gap-3 md:grid-cols-[auto_minmax(0,340px)_auto] md:justify-center">
                            <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto instalasi sebelumnya">‹</button>
                            <div class="overflow-hidden rounded-xl border border-[#5f7ec8] bg-[#0f2a70]">
                                <img src="{{ $installationStory['gallery'][0] }}" alt="{{ $installationStory['title'] }}" class="berita-visit-image h-48 w-full object-cover md:h-56" data-visit-image />
                            </div>
                            <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto instalasi berikutnya">›</button>
                        </div>

                        <p class="mx-auto mt-6 max-w-4xl text-center text-xs md:text-sm leading-relaxed text-[#d8e5ff]">
                            {{ $installationStory['description'] }}
                        </p>
                        <p class="mx-auto mt-3 max-w-4xl text-center text-xs md:text-sm leading-relaxed text-[#c4d5ff]">
                            Seluruh tahapan dilakukan secara terukur, mulai dari pemeriksaan kondisi awal unit, validasi konfigurasi baterai, pengujian parameter keamanan, hingga final handover dengan panduan operasional yang mudah diterapkan tim pelanggan.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="training-battery" class="berita-training-section berita-screen-section berita-scroll-stage berita-transition-to-dark py-10 md:py-14 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="text-center">
                    <span class="inline-flex items-center rounded-md bg-[#0c014c] px-4 py-1.5 text-sm md:text-base font-bold text-white shadow-[0_8px_20px_rgba(8,14,38,0.24)]">
                        Training Battery
                    </span>
                    <h2 class="mt-4 text-[clamp(1.45rem,2.2vw,2.35rem)] font-bold leading-tight tracking-tight text-[#10245a]">
                        Peningkatan Kapabilitas Tim Operasional Pelanggan
                    </h2>
                    <p class="mx-auto mt-2 max-w-3xl text-sm md:text-base leading-relaxed text-[#4b5d83]">
                        Program training dirancang sebagai modul praktis yang menyeimbangkan teori dan simulasi lapangan. Fokus utamanya adalah membangun kebiasaan kerja yang aman, disiplin inspeksi harian, serta pemahaman troubleshooting dasar agar tim site lebih percaya diri saat menghadapi dinamika operasional.
                    </p>
                </div>

                <div class="mt-7 space-y-4 md:space-y-5">
                    @foreach ($trainingStories as $story)
                        <article class="berita-visit-row berita-training-row group grid items-center gap-3 border-b border-[#d9e4fb] p-3.5 md:grid-cols-[auto_minmax(0,260px)_auto_minmax(0,1fr)] md:gap-4 md:p-4.5" data-visit-row data-gallery='@json($story['gallery'])'>
                            <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto training sebelumnya">‹</button>
                            <div class="overflow-hidden rounded-xl border border-[#d8e4ff] bg-[#e7efff]">
                                <img src="{{ $story['gallery'][0] }}" alt="Training {{ $story['company'] }}" class="berita-visit-image h-36 w-full object-cover md:h-38" data-visit-image />
                            </div>
                            <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#d1ddf6] bg-white text-xl text-[#1d4ed8] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto training berikutnya">›</button>

                            <div class="min-w-0">
                                <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide text-[#0f1733]">{{ $story['company'] }}</span>
                                <h3 class="mt-1.5 text-base md:text-xl font-bold leading-tight text-[#0f1733] berita-visit-title">{{ $story['headline'] }}</h3>
                                <p class="mt-1.5 text-xs md:text-sm leading-relaxed text-[#4b5d83]">
                                    {{ $story['description'] }}
                                </p>
                                <p class="mt-2 text-xs md:text-sm leading-relaxed text-[#5a6d96]">
                                    Dalam sesi {{ $story['company'] }}, materi juga mencakup teknik identifikasi gejala dini penurunan performa, cara membaca indikator kesehatan baterai, serta langkah mitigasi cepat untuk menjaga kelangsungan aktivitas operasional harian.
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="unit-testing" class="berita-unit-testing-section berita-screen-section berita-scroll-stage py-10 md:py-14 reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="berita-unit-testing-shell mx-auto max-w-5xl px-2 py-4 md:px-2 md:py-5">
                    <div class="text-center">
                        <span class="inline-flex items-center rounded-md bg-white px-4 py-1.5 text-sm md:text-base font-bold text-[#0c014c] shadow-[0_8px_20px_rgba(8,14,38,0.24)]">
                            {{ $unitTestingStory['title'] }}
                        </span>
                    </div>

                    <article class="mt-6" data-visit-row data-gallery='@json($unitTestingStory['gallery'])'>
                        <div class="grid items-center gap-3 md:grid-cols-[auto_minmax(0,340px)_auto] md:justify-center">
                            <button type="button" class="berita-visit-nav berita-visit-prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto unit testing sebelumnya">‹</button>
                            <div class="overflow-hidden rounded-xl border border-[#5f7ec8] bg-[#0f2a70]">
                                <img src="{{ $unitTestingStory['gallery'][0] }}" alt="{{ $unitTestingStory['title'] }}" class="berita-visit-image h-56 w-full object-cover md:h-72" data-visit-image />
                            </div>
                            <button type="button" class="berita-visit-nav berita-visit-next inline-flex h-9 w-9 items-center justify-center rounded-full border border-[#94b3f0] bg-white/90 text-xl text-[#16306f] transition-all hover:-translate-y-0.5 hover:border-[#f2cd00] hover:text-[#0f1733]" aria-label="Foto unit testing berikutnya">›</button>
                        </div>

                        <p class="mx-auto mt-6 max-w-4xl text-center text-xs md:text-sm leading-relaxed text-[#d8e5ff]">
                            {{ $unitTestingStory['description'] }}
                        </p>
                        <p class="mx-auto mt-3 max-w-4xl text-center text-xs md:text-sm leading-relaxed text-[#c4d5ff]">
                            Hasil pengujian kami dokumentasikan untuk memastikan setiap unit memiliki baseline performa yang jelas, sehingga proses monitoring setelah implementasi dapat dilakukan lebih akurat dan keputusan maintenance dapat diambil lebih cepat.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section id="berita-cta" class="berita-cta-section berita-screen-section berita-scroll-stage relative overflow-hidden py-14 md:py-16 flex items-center reveal-on-scroll">
            <div class="berita-cta-noise" aria-hidden="true"></div>
            <div class="berita-cta-glow" aria-hidden="true"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 md:px-8 w-full">
                <div class="berita-cta-flow mx-auto flex max-w-4xl flex-col items-center text-center px-4 md:px-6 py-10 md:py-14">
                    <span class="berita-cta-chip inline-flex items-center rounded-full border border-[#f2cd0040] bg-[#f2cd0015] px-4 py-1 text-[10px] md:text-[11px] font-bold uppercase tracking-[0.18em] text-[#f7d84a]">
                        Konsultasi & Dukungan
                    </span>
                    <h2 class="berita-cta-title mt-4 text-[clamp(2rem,4vw,3.9rem)] font-bold leading-[1.05] tracking-tight text-white">
                        Jangan Biarkan Kendala Operasional
                        <span class="block text-[#f2cd00]">Menghambat Produktivitas Anda.</span>
                    </h2>
                    <p class="mt-5 max-w-2xl text-sm md:text-lg leading-relaxed text-[#d7def6]">
                        Dapatkan solusi yang sesuai kebutuhan bersama tim kami. Kami siap membantu dari konsultasi awal hingga rekomendasi langkah terbaik untuk bisnis Anda.
                    </p>
                    <a href="/layanan" class="berita-cta-button mt-8 inline-flex items-center gap-3 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] shadow-[0_14px_30px_rgba(242,205,0,0.28)] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
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

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const visitRows = Array.from(document.querySelectorAll('[data-visit-row]'));
            const stageSections = Array.from(document.querySelectorAll('.berita-scroll-stage'));

            visitRows.forEach((row) => {
                let gallery = [];
                try {
                    gallery = JSON.parse(row.getAttribute('data-gallery') || '[]');
                } catch {
                    gallery = [];
                }

                if (!Array.isArray(gallery) || gallery.length === 0) {
                    return;
                }

                let index = 0;
                const image = row.querySelector('[data-visit-image]');
                const prevButton = row.querySelector('.berita-visit-prev');
                const nextButton = row.querySelector('.berita-visit-next');

                const render = () => {
                    if (!image) {
                        return;
                    }

                    image.classList.add('is-swapping');
                    window.setTimeout(() => {
                        image.src = gallery[index];
                        image.classList.remove('is-swapping');
                    }, 130);
                };

                prevButton?.addEventListener('click', () => {
                    index = (index - 1 + gallery.length) % gallery.length;
                    render();
                });

                nextButton?.addEventListener('click', () => {
                    index = (index + 1) % gallery.length;
                    render();
                });
            });

            if ('IntersectionObserver' in window && stageSections.length) {
                const stageObserver = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            entry.target.classList.toggle('is-active', entry.intersectionRatio >= 0.42);
                        });
                    },
                    {
                        threshold: [0.2, 0.42, 0.68],
                    }
                );

                stageSections.forEach((section) => stageObserver.observe(section));
            } else {
                stageSections.forEach((section) => section.classList.add('is-active'));
            }
        });
    </script>
</body>
</html>
