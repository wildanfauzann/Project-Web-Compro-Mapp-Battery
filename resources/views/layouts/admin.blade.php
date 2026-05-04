<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'Laravel') }}</title>

    @stack('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 text-slate-900 antialiased">
    @php($currentUser = auth()->user())

    <div class="relative min-h-screen overflow-x-clip bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.12),_transparent_35%),radial-gradient(circle_at_top_right,_rgba(15,23,42,0.08),_transparent_28%),linear-gradient(180deg,_#f8fbff_0%,_#eef3f9_100%)]">
        <aside id="admin-sidebar" class="admin-sidebar fixed inset-y-0 left-0 z-50 w-[18rem] border-r border-slate-800/90 bg-slate-950 text-white shadow-2xl lg:translate-x-0">
            <div class="flex h-full flex-col">
                <div class="flex items-center gap-3 border-b border-white/10 px-5 py-5">
                    <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white/10 text-lg font-bold text-[#ffd84d]">
                        M
                    </div>
                    <div>
                        <p class="text-[11px] uppercase tracking-[0.24em] text-slate-400">Admin Console</p>
                        <p class="text-base font-semibold text-white">PT. Multidaya</p>
                    </div>
                </div>

                <nav class="flex-1 space-y-1 overflow-y-auto px-4 py-5 text-sm" aria-label="Navigasi admin">
                    <a href="{{ route('admin.dashboard') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20 group-[.bg-white]:bg-slate-100">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h18M12 3v18" />
                                </svg>
                            </span>
                            <span>Dashboard</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.produk.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.produk.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" />
                                </svg>
                            </span>
                            <span>Produk</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.layanan.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.layanan.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" />
                                </svg>
                            </span>
                            <span>Layanan</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.berita.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.berita.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 7.5h10M7 11.5h10M7 15.5h6" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 6.5A1.5 1.5 0 016.5 5h11A1.5 1.5 0 0119 6.5v11A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 17.5v-11z" />
                                </svg>
                            </span>
                            <span>Berita</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.unduhan.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.unduhan.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v8m0 0l-3-3m3 3l3-3" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 16.5A1.5 1.5 0 016.5 15h11A1.5 1.5 0 0119 16.5V18A1.5 1.5 0 0117.5 19h-11A1.5 1.5 0 015 18v-1.5z" />
                                </svg>
                            </span>
                            <span>Unduhan</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.testimoni.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.testimoni.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 17l-2.5 2V7.5A2.5 2.5 0 017.5 5h9A2.5 2.5 0 0119 7.5v7A2.5 2.5 0 0116.5 17h-9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6M9 12h4" />
                                </svg>
                            </span>
                            <span>Testimoni</span>
                        </span>
                    </a>

                    <a href="{{ route('admin.kontak-sales.index') }}" class="group flex items-center justify-between rounded-2xl px-4 py-3 transition-all duration-200 {{ request()->routeIs('admin.kontak-sales.*') ? 'bg-white text-slate-950 shadow-lg' : 'text-slate-300 hover:bg-white/8 hover:text-white' }}">
                        <span class="flex items-center gap-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-black/20">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7.5A2.5 2.5 0 016.5 5h11A2.5 2.5 0 0120 7.5v9A2.5 2.5 0 0117.5 19h-11A2.5 2.5 0 014 16.5v-9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 9h8M8 13h5" />
                                </svg>
                            </span>
                            <span>Kontak Sales</span>
                        </span>
                    </a>
                </nav>
            </div>
        </aside>

        <button id="admin-sidebar-backdrop" type="button" class="admin-backdrop fixed inset-0 z-40 hidden bg-slate-950/50 lg:hidden" aria-label="Tutup sidebar admin"></button>

        <div class="lg:pl-[18rem]">
            <header class="sticky top-0 z-30 border-b border-slate-200/80 bg-white/88 backdrop-blur-xl">
                <div class="flex items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
                    <div class="flex min-w-0 items-start gap-3">
                        <button type="button" id="admin-sidebar-toggle" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-slate-700 shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg lg:hidden">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <div class="min-w-0">
                            <p class="text-[11px] uppercase tracking-[0.28em] text-slate-500">Admin Page</p>
                            <h1 class="truncate text-xl font-semibold text-slate-900">@yield('page-title', 'Dashboard')</h1>
                            <p class="mt-1 text-sm text-slate-500">@yield('page-subtitle', 'Kelola konten dan data produk dari satu tempat.') </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 sm:gap-4">
                        <button type="button" class="relative inline-flex h-11 w-11 items-center justify-center rounded-2xl border border-slate-200 bg-white text-slate-600 shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:shadow-lg" aria-label="Notifikasi">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.5 19a2.5 2.5 0 005 0" />
                            </svg>
                            <span class="absolute right-2 top-2 h-2.5 w-2.5 rounded-full bg-rose-500 ring-2 ring-white"></span>
                        </button>

                        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 shadow-sm">
                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-slate-950 text-sm font-semibold text-white">
                                {{ strtoupper(mb_substr((string) ($currentUser?->name ?? 'Administrator'), 0, 2)) }}
                            </div>
                            <div class="hidden sm:block">
                                <p class="text-sm font-semibold text-slate-900">{{ $currentUser?->name ?? 'Administrator' }}</p>
                                <p class="text-xs text-slate-500">Super Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main class="px-4 py-6 sm:px-6 lg:px-8">
                @yield('content')
            </main>
        </div>
    </div>

    <div class="fixed right-4 top-4 z-[60] flex w-[min(24rem,calc(100vw-2rem))] flex-col gap-3" aria-live="polite" aria-atomic="true">
        @if (session('success'))
            <div data-admin-toast class="admin-toast flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-emerald-950 shadow-xl">
                <div class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-emerald-100 text-emerald-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">Berhasil</p>
                    <p class="text-sm text-emerald-800">{{ session('success') }}</p>
                </div>
                <button type="button" class="text-emerald-600 transition hover:text-emerald-900" data-toast-close aria-label="Tutup notifikasi">×</button>
            </div>
        @endif

        @if (session('error'))
            <div data-admin-toast class="admin-toast flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 p-4 text-rose-950 shadow-xl">
                <div class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-rose-100 text-rose-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.3 4.3l-8 14A2 2 0 003.1 21h17.8a2 2 0 001.7-2.7l-8-14a2 2 0 00-3.5 0z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">Terjadi kesalahan</p>
                    <p class="text-sm text-rose-800">{{ session('error') }}</p>
                </div>
                <button type="button" class="text-rose-600 transition hover:text-rose-900" data-toast-close aria-label="Tutup notifikasi">×</button>
            </div>
        @endif

        @if ($errors->any())
            <div data-admin-toast class="admin-toast flex items-start gap-3 rounded-2xl border border-rose-200 bg-rose-50 p-4 text-rose-950 shadow-xl">
                <div class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-full bg-rose-100 text-rose-700">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M10.3 4.3l-8 14A2 2 0 003.1 21h17.8a2 2 0 001.7-2.7l-8-14a2 2 0 00-3.5 0z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold">Validasi gagal</p>
                    <p class="text-sm text-rose-800">{{ $errors->first() }}</p>
                </div>
                <button type="button" class="text-rose-600 transition hover:text-rose-900" data-toast-close aria-label="Tutup notifikasi">×</button>
            </div>
        @endif
    </div>

    @stack('scripts')
</body>
</html>