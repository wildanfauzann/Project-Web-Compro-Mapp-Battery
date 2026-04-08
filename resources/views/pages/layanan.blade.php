<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan - PT. Multidaya Anugrah Perkasa</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-['IBM_Plex_Sans'] bg-slate-50 text-slate-900 selection:bg-slate-800 selection:text-white">
    <x-navbar />

    <main>
        <!-- Hero Section -->
        <section class="hero-gradient reveal-on-scroll min-h-[calc(100vh-140px)] flex items-center justify-center">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-20 w-full text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 md:mb-6 tracking-tight leading-tight">PT. Multidaya Anugrah Perkasa</h1>
                <p class="text-sm md:text-base max-w-2xl mx-auto leading-relaxed text-slate-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
            </div>
        </section>

        <!-- Section 1: Services Grid -->
        <section class="py-8 md:py-12 section-muted reveal-on-scroll">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="grid gap-4 md:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    @for ($i = 1; $i <= 6; $i++)
                        <a href="/layanan/detail" class="card-elevated group bg-white rounded-xl overflow-hidden {{ $i > 4 ? 'sm:col-span-1' : '' }}">
                            <div class="h-40 md:h-48 bg-slate-200 shimmer"></div>
                            <div class="p-4 md:p-5">
                                <p class="text-xs md:text-sm leading-5 mb-3 text-slate-700">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="w-6 h-6 rounded-full bg-slate-900 ml-auto grid place-items-center text-white text-xs transition-transform group-hover:translate-x-0.5">
                                    →
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
                <div class="mt-6 flex justify-end">
                    <a href="/layanan/detail" class="btn-outline interactive-press text-sm inline-flex items-center gap-2">Lorem ipsum. <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>     
    </main>

    <x-footer />
</body>
</html>
