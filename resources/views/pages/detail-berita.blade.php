<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article['title'] }} - PT. Multidaya Anugrah Perkasa</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['IBM_Plex_Sans'] bg-slate-50 text-slate-900 selection:bg-slate-800 selection:text-white">
    <x-navbar />

    <main>
        <section class="relative overflow-hidden min-h-[70svh] md:min-h-[78vh] flex items-end" style="background-image: linear-gradient(180deg, rgba(4, 11, 31, 0.24) 0%, rgba(5, 14, 38, 0.74) 78%, rgba(5, 14, 38, 0.9) 100%), url('{{ asset($article['image']) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="max-w-7xl mx-auto px-4 md:px-8 pb-12 md:pb-16 w-full relative z-10">
                <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 text-xs md:text-sm text-white/90 hover:text-[#f2cd00] transition-colors">
                    <span aria-hidden="true">←</span> Kembali ke Berita
                </a>

                <div class="mt-4 max-w-4xl">
                    <span class="inline-flex items-center rounded-full bg-[#f2cd00] px-4 py-1.5 text-[11px] md:text-xs font-bold uppercase tracking-[0.18em] text-[#0f1733]">
                        {{ $article['category'] }}
                    </span>

                    <h1 class="mt-4 text-[clamp(2rem,4.5vw,4rem)] leading-[1.06] font-bold tracking-tight text-white">
                        {{ $article['title'] }}
                    </h1>

                    <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs md:text-sm text-[#d5e1ff]">
                        <span>{{ $article['published_at'] }}</span>
                        <span class="h-1.5 w-1.5 rounded-full bg-[#f2cd00]"></span>
                        <span>{{ $article['reading_time'] }}</span>
                        <span class="h-1.5 w-1.5 rounded-full bg-[#f2cd00]"></span>
                        <span>PT. Multidaya Anugrah Perkasa</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_340px] gap-10 md:gap-12">
                    <article class="min-w-0">
                        <p class="text-base md:text-lg leading-relaxed text-[#32405f] font-medium">
                            {{ $article['excerpt'] }}
                        </p>

                        <div class="mt-8 space-y-6">
                            @foreach ($article['content'] as $paragraph)
                                <p class="text-[15px] md:text-[17px] leading-relaxed text-[#2b3854]">
                                    {{ $paragraph }}
                                </p>
                            @endforeach
                        </div>

                        <div class="mt-10 rounded-2xl border border-[#d9e5ff] bg-[#f6f9ff] p-5 md:p-6">
                            <h3 class="text-base md:text-lg font-bold text-[#0f1733]">Rangkuman Nilai Utama</h3>
                            <ul class="mt-4 grid gap-3 text-sm md:text-base text-[#33415e]">
                                <li class="flex items-start gap-2"><span class="mt-2 h-2 w-2 rounded-full bg-[#f2cd00]"></span><span>Pendekatan berbasis data lapangan untuk keputusan teknis yang lebih akurat.</span></li>
                                <li class="flex items-start gap-2"><span class="mt-2 h-2 w-2 rounded-full bg-[#f2cd00]"></span><span>Fokus pada kestabilan performa baterai forklift dan efisiensi operasional.</span></li>
                                <li class="flex items-start gap-2"><span class="mt-2 h-2 w-2 rounded-full bg-[#f2cd00]"></span><span>Komitmen layanan jangka panjang melalui pendampingan teknis berkelanjutan.</span></li>
                            </ul>
                        </div>
                    </article>

                    <aside class="lg:sticky lg:top-28 self-start space-y-6">
                        <div class="rounded-2xl border border-[#dbe6ff] bg-white p-5 md:p-6 shadow-[0_10px_28px_rgba(15,23,51,0.08)]">
                            <h3 class="text-base md:text-lg font-bold text-[#0f1733]">Butuh Konsultasi Teknis?</h3>
                            <p class="mt-2 text-sm md:text-[15px] leading-relaxed text-[#566584]">
                                Tim kami siap membantu evaluasi kebutuhan baterai forklift Anda dengan pendekatan yang relevan untuk kondisi operasional lapangan.
                            </p>
                            <a href="{{ url('/layanan') }}" class="mt-4 inline-flex items-center gap-2 rounded-full bg-[#f2cd00] px-5 py-2.5 text-sm font-bold text-[#0f1733] hover:bg-[#ffda2f] transition-colors">
                                Lihat Layanan <span aria-hidden="true">→</span>
                            </a>
                        </div>

                        <div class="rounded-2xl border border-[#dbe6ff] bg-white p-5 md:p-6 shadow-[0_10px_28px_rgba(15,23,51,0.08)]">
                            <h3 class="text-base md:text-lg font-bold text-[#0f1733]">Berita Terkait</h3>
                            <div class="mt-4 space-y-4">
                                @forelse ($relatedArticles as $related)
                                    <a href="{{ url('/berita/' . $related['slug']) }}" class="group block rounded-xl border border-[#e6eeff] p-3 hover:border-[#bfd3ff] hover:bg-[#f7faff] transition-colors">
                                        <p class="text-[11px] font-bold uppercase tracking-[0.12em] text-[#2f4a99]">{{ $related['category'] }}</p>
                                        <p class="mt-1 text-sm font-semibold leading-snug text-[#0f1733] group-hover:text-[#2f4a99]">{{ $related['title'] }}</p>
                                    </a>
                                @empty
                                    <p class="text-sm text-[#66728c]">Belum ada berita terkait.</p>
                                @endforelse
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="py-12 md:py-16" style="background: linear-gradient(135deg, #0f1733 0%, #1a2548 50%, #2f4a99 100%);">
            <div class="max-w-5xl mx-auto px-4 md:px-8 text-center">
                <h2 class="text-[clamp(1.8rem,3.5vw,3rem)] leading-tight font-bold text-white">Ingin Mendapatkan Insight Lainnya?</h2>
                <p class="mt-3 text-sm md:text-base text-[#d6e1ff]">
                    Jelajahi berita dan artikel terbaru kami untuk melihat praktik terbaik layanan baterai forklift di berbagai sektor industri.
                </p>
                <a href="{{ url('/berita') }}" class="mt-6 inline-flex items-center gap-2 rounded-full bg-[#f2cd00] px-6 py-3 text-sm md:text-base font-bold text-[#0f1733] transition-transform hover:-translate-y-0.5 hover:bg-[#ffda2f]">
                    Kembali ke Semua Berita <span aria-hidden="true">→</span>
                </a>
            </div>
        </section>
    </main>

    <x-footer />
</body>
</html>
