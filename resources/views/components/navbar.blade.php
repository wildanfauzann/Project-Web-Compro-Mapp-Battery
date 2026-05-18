<nav class="sticky top-0 z-50 dynamic-navbar border-b border-[#cfcfcf] shadow-sm" aria-label="Navigasi utama">
    <!-- Top Row: Logo & Dropdowns -->
    <div class="navbar-surface relative z-90 max-w-7xl mx-auto px-3.5 sm:px-4 md:px-8 py-2 md:py-3">
        <div class="flex flex-col gap-2.5 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center justify-between w-full md:w-auto gap-3">
                <a href="/" class="inline-flex items-center gap-3"
                    ><img src="{{ asset('images/logo/LOGO_MAP-removebg-preview 1.png') }}" alt="Logo PT. Multidaya Anugrah Perkasa" class="h-8 md:h-9 w-auto object-contain hover-lift" width="144" height="48" loading="eager" fetchpriority="high" decoding="async" />
                    <span class="navbar-brand-title text-[14px] md:text-[25px] font-bold leading-none text-[#121212]">PT. Multidaya Anugrah Perkasa</span>
                </a>

                <button
                    type="button"
                    id="mobile-nav-toggle"
                    class="mobile-nav-toggle md:hidden inline-flex h-9 w-9 items-center justify-center rounded-lg border border-[#cbd7ee] bg-white text-[#0c235c] shadow-sm"
                    aria-controls="navbar-menu"
                    aria-expanded="false"
                    aria-label="Buka menu navigasi"
                >
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-col gap-1.5 w-full md:w-auto">
                <!-- Top row: Dropdown buttons -->
                <div class="flex flex-wrap items-center gap-2 md:gap-3 text-[11px] md:text-xs text-[#1f1f1f] font-semibold">
                    <!-- Office Dropdown -->
                    <div class="relative" id="dealer-dropdown-container">
                        <button type="button" id="dealer-toggle" class="navbar-top-btn px-1.5 py-1 text-[#1f1f1f] rounded btn-hover flex items-center gap-1.5 hover:bg-[#efefef]">
                            <img src="{{ asset('images/icon/image 25.png') }}" alt="Icon kantor" class="w-4 h-4 object-contain" width="16" height="16" loading="lazy" decoding="async" />
                            <span>Temukan Kantor Kami</span>
                        </button>
                        <div class="dealer-dropdown absolute right-0 top-full mt-1 bg-white border border-slate-300 rounded shadow-lg w-56 opacity-0 invisible transition-all duration-200">
                            <a href="/tentang?office=bekasi#kantor-kami" class="block px-4 py-2 text-sm hover:bg-slate-100">Bekasi</a>
                            <a href="/tentang?office=sidoarjo#kantor-kami" class="block px-4 py-2 text-sm hover:bg-slate-100">Sidoarjo</a>
                        </div>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="relative" id="language-dropdown-container">
                        <button type="button" id="language-dropdown-toggle" class="navbar-top-btn px-1.5 py-1 text-[#1f1f1f] rounded btn-hover flex items-center gap-1.5 hover:bg-[#efefef]">
                            <img src="{{ asset('images/icon/image 26.png') }}" alt="Icon bahasa" class="w-4 h-4 object-contain" width="16" height="16" loading="lazy" decoding="async" />
                            <span id="language-label">Bahasa</span>
                        </button>
                        <div class="language-dropdown absolute right-0 top-full mt-1 bg-white border border-slate-300 rounded shadow-lg w-32 opacity-0 invisible transition-all duration-200">
                            <button type="button" class="block w-full text-left px-4 py-2 text-sm hover:bg-slate-100" data-lang="id">Indonesia</button>
                            <button type="button" class="block w-full text-left px-4 py-2 text-sm hover:bg-slate-100" data-lang="en">English</button>
                        </div>
                    </div>
                </div>

                <!-- Bottom row: Search input -->
                <div class="relative">
                    <input 
                        type="text" 
                        id="produk-search" 
                        placeholder="Pencarian" 
                        class="navbar-search-input w-full px-3 py-1.5 pr-7 bg-[#f2cd00] border border-[#e2bd00] rounded-full text-[12px] text-[#222222] placeholder:text-[#404040] focus:outline-none focus:ring-2 focus:ring-[#d4b100] transition-all"
                    />
                    <svg class="navbar-search-icon absolute right-2 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-[#1f1f1f] pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Row: Menu Navigation -->
    <div class="dynamic-nav-strip relative z-40 border-t border-[#cfcfcf]">
        <div class="max-w-7xl mx-auto px-4 md:px-8 relative" id="navbar-preview-area">
            <ul id="navbar-menu" class="navbar-menu-list grid grid-cols-3 gap-x-1 gap-y-1 items-stretch justify-between text-[10px] sm:text-[11px] md:flex md:items-center md:justify-between md:text-sm font-semibold text-[#161616]">
                <li class="relative flex-1 text-center navbar-item {{ Request::is('/') ? 'active' : '' }}" data-preview-key="beranda">
                    <span class="navbar-top-indicator"></span>
                    <a href="{{ url('/') }}" data-section="beranda" class="navbar-link block py-2 md:py-3 leading-tight" @if (Request::is('/')) aria-current="page" @endif>Beranda</a>
                </li>
                <li class="relative flex-1 text-center navbar-item {{ Request::is('tentang*') ? 'active' : '' }}" data-preview-key="tentang">
                    <span class="navbar-top-indicator"></span>
                    <a href="{{ url('/tentang') }}" data-section="tentang" class="navbar-link block py-2 md:py-3 leading-tight" @if (Request::is('tentang*')) aria-current="page" @endif>Tentang Kami</a>
                </li>
                <li class="relative flex-1 text-center navbar-item {{ Request::is('produk*') ? 'active' : '' }}" data-preview-key="produk">
                    <span class="navbar-top-indicator"></span>
                    <a href="{{ url('/produk') }}" data-section="produk" class="navbar-link block py-2 md:py-3 leading-tight" @if (Request::is('produk*')) aria-current="page" @endif>Produk</a>
                </li>
                <li class="relative flex-1 text-center navbar-item {{ Request::is('layanan*') ? 'active' : '' }}" data-preview-key="layanan">
                    <span class="navbar-top-indicator"></span>
                    <a href="{{ url('/layanan') }}" data-section="layanan" class="navbar-link block py-2 md:py-3 leading-tight" @if (Request::is('layanan*')) aria-current="page" @endif>Layanan</a>
                </li>
                <li class="relative flex-1 text-center navbar-item {{ Request::is('unduhan*') ? 'active' : '' }}" data-preview-key="unduhan">
                    <span class="navbar-top-indicator"></span>
                    <a href="{{ url('/unduhan') }}" data-section="unduhan" class="navbar-link block py-2 md:py-3 leading-tight" @if (Request::is('unduhan*')) aria-current="page" @endif>Unduhan</a>
                </li>
            </ul>

            <div class="navbar-preview-panel hidden md:block" id="navbar-preview-panel" aria-hidden="true">
                <div class="bg-white border border-slate-300 shadow-xl rounded-lg p-5">
                    <div class="flex items-center gap-4">
                        <button type="button" class="text-2xl text-slate-700 hover:text-slate-900" id="navbar-preview-prev" aria-label="Preview sebelumnya">‹</button>

                        <div class="flex-1 grid grid-cols-3 gap-4" id="navbar-preview-list">
                            <article class="navbar-preview-card bg-slate-100 rounded-lg p-3">
                                <img src="/images/product/tractionhawcker.png" alt="Preview produk" class="h-24 w-full rounded-md object-contain bg-white shimmer mb-2" id="navbar-preview-image-1" width="320" height="240" loading="lazy" decoding="async" />
                                <p class="text-xs leading-5 text-slate-700" id="navbar-preview-text-1">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </article>
                            <article class="navbar-preview-card bg-slate-100 rounded-lg p-3">
                                <img src="/images/product/chargerhigh.png" alt="Preview produk" class="h-24 w-full rounded-md object-contain bg-white shimmer mb-2" id="navbar-preview-image-2" width="320" height="240" loading="lazy" decoding="async" />
                                <p class="text-xs leading-5 text-slate-700" id="navbar-preview-text-2">
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </article>
                            <article class="navbar-preview-card bg-slate-100 rounded-lg p-3">
                                <img src="/images/product/connector.png" alt="Preview produk" class="h-24 w-full rounded-md object-contain bg-white shimmer mb-2" id="navbar-preview-image-3" width="320" height="240" loading="lazy" decoding="async" />
                                <p class="text-xs leading-5 text-slate-700" id="navbar-preview-text-3">
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </p>
                            </article>
                        </div>

                        <button type="button" class="text-2xl text-slate-700 hover:text-slate-900" id="navbar-preview-next" aria-label="Preview berikutnya">›</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="mobile-nav-backdrop" class="mobile-nav-backdrop md:hidden" aria-label="Tutup menu navigasi"></button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('produk-search');
            if (searchInput) {
                searchInput.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        const keyword = this.value.trim();
                        if (keyword) {
                            window.location.href = '/produk?search=' + encodeURIComponent(keyword);
                        } else {
                            window.location.href = '/produk';
                        }
                    }
                });
                
                const params = new URLSearchParams(window.location.search);
                if (params.has('search')) {
                    searchInput.value = params.get('search');
                }
            }
        });
    </script>
</nav>
