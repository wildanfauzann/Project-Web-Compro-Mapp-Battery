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
    <!-- Hero Section -->
    <section class="py-12 md:py-16 bg-slate-200">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900">Lorem ipsum.</h1>
            <p class="text-sm md:text-base text-slate-700 mt-2 md:mt-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </p>
        </div>
    </section>

    <!-- Section 1: Berita Items -->
    <section class="py-8 md:py-12 bg-white reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="space-y-6 md:space-y-8">
                @for ($i = 0; $i < 4; $i++)
                    <div class="card-elevated grid gap-6 md:gap-8 md:grid-cols-[280px_1fr_60px] items-start bg-white rounded-lg overflow-hidden">
                        <!-- Image Left -->
                        <div class="h-32 md:h-40 rounded-lg bg-slate-300 shimmer shrink-0"></div>

                        <!-- Content Center -->
                        <div class="space-y-3 py-2">
                            <h3 class="text-base md:text-lg font-bold text-slate-900">Lorem ipsum.</h3>
                            <p class="text-xs md:text-sm leading-6 text-slate-700">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                            </p>
                        </div>

                        <!-- Navigation Arrows Right -->
                        <div class="flex flex-col gap-3 shrink-0 py-2">
                            <button class="w-8 h-8 flex items-center justify-center text-xl hover:bg-slate-200 rounded transition-colors">
                                <span aria-hidden="true">‹</span>
                            </button>
                            <button class="w-8 h-8 flex items-center justify-center text-xl hover:bg-slate-200 rounded transition-colors">
                                <span aria-hidden="true">›</span>
                            </button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Section 2: CTA Box -->
    <section class="py-12 md:py-16 bg-slate-200 flex items-center reveal-on-scroll">
        <div class="max-w-7xl mx-auto px-4 md:px-8 w-full">
            <div class="bg-white rounded-lg p-8 md:p-12 max-w-2xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 text-slate-900">Lorem ipsum.</h2>
                <p class="text-sm md:text-base text-slate-700 mb-6">Lorem ipsum.</p>
                <a href="/berita" class="bg-slate-300 hover:bg-slate-400 text-slate-900 font-semibold px-6 py-2 rounded transition-colors inline-flex items-center gap-2">
                    Baca Selengkapnya <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
</main>

<x-footer />
