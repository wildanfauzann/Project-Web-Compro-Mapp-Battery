# 🔋 PT. Multidaya Anugrah Perkasa - Web Profile

Platform digital profesional untuk **PT. Multidaya Anugrah Perkasa (PT MAP)**, distributor terpercaya solusi energi terbarukan dan peralatan forklift berkualitas. Website ini menampilkan katalog produk lengkap, layanan purna jual, dan informasi perusahaan dengan antarmuka modern dan responsif.

---

## 📋 Ringkasan Teknologi

| Komponen | Teknologi |
|----------|-----------|
| **Framework Backend** | Laravel 12 |
| **PHP Version** | 8.2+ |
| **Frontend Build** | Vite + Tailwind CSS |
| **View Layer** | Blade Template |
| **Database** | MySQL |
| **Styling** | Custom CSS + Tailwind Utilities |
| **Animasi** | CSS Keyframes + Scroll Effects |

---

## 🎯 Daftar Halaman & Fitur

### 1️⃣ **HOMEPAGE (Beranda)** - `/`

#### 📍 Tujuan
Halaman pertama yang menampilkan identitas perusahaan dan produk unggulan dengan visual yang menarik.

#### 🎨 Tampilan & Layout
- **Hero Section** dengan background image full-width (`hero1.png`)
- Overlay semi-transparan hitam untuk kontras teks
- Heading besar "PT. Multidaya Anugrah Perkasa" dengan efek drop shadow
- Tagline: "POWERING MOBILITY ENERGIZING THE FUTURE"

#### ⚡ Fitur Utama
- **Featured Products Carousel**: Menampilkan 9 produk unggulan (Battery, Charger, Accessories) dengan deskripsi singkat
- **Product Category Grid**: 3 kategori utama (Battery, Charger, Accessories) yang dapat diklik
- **Video Hero Section**: Embedded video "Microtex Exhibition March 2024" dengan deskripsi
- **Quick Links**: Navigasi mudah ke halaman produk, layanan, unduhan
- **Responsive Design**: Menyesuaikan tampilan untuk mobile, tablet, dan desktop

#### ✨ Efek Visual
- Scroll fade animations untuk elemen yang muncul saat scroll
- Smooth transitions pada hover di produktcard
- Gradient backgrounds pada section
- Drop shadow pada typography untuk readability
- Image zoom effect pada hover product cards

---

### 2️⃣ **PRODUK (Halaman Katalog)** - `/produk`

#### 📍 Tujuan
Menampilkan daftar lengkap semua produk dengan sistem filter kategori yang intuitif.

#### 🎨 Tampilan & Layout
- **Sidebar Filter** (kiri): Panel dengan kategori produk yang dapat dipilih
- **Main Content** (kanan): Grid produk yang responsif (2-4 kolom tergantung ukuran layar)
- **Header Section**: Judul kategori aktif dan jumlah produk yang ditampilkan
- **Sticky Sidebar**: Filter tetap terlihat saat scroll di desktop

#### ⚡ Fitur Utama
- **Dynamic Filter**: Filter produk berdasarkan kategori (Battery, Charger, Accessories, All)
- **Product Card Grid**: Kartu produk dengan gradient background biru yang berbeda-beda
- **Real-time Count**: Menampilkan jumlah produk yang sesuai filter
- **Call-to-Action Button**: "Hubungi Admin" via WhatsApp
- **Service Link**: Quick link ke halaman layanan dan after-sales
- **Sticky Header**: Navbar tetap di atas saat scroll

#### ✨ Efek Visual
- Category Button Active State: Background berubah dari biru tua ke putih
- Product Card Hover: Border dan background berubah
- Smooth transitions pada filter
- Animated category counters
- Reveal-on-scroll animation saat page load
- Gradient borders pada kategori

---

### 3️⃣ **DETAIL PRODUK** - `/produk/detail?item=KODE_PRODUK`

#### 📍 Tujuan
Menampilkan informasi detail lengkap satu produk dengan spesifikasi teknis.

#### 🎨 Tampilan & Layout
- **Product Gallery**: Gambar utama dengan thumbnail carousel
- **Product Info**: Nama, kode, kategori, deskripsi
- **Specifications Table**: Tabel spesifikasi teknis lengkap
- **Related Products**: 4 produk sejenis untuk cross-selling
- **Back Navigation**: Link kembali ke halaman produk

#### ⚡ Fitur Utama
- **Image Carousel**: Navigasi gambar produk dengan previous/next buttons
- **Specifications Display**: Detail teknis dalam format tabel terstruktur
- **Breadcrumb Navigation**: Jalur navigasi untuk kemudahan user
- **Related Products Sidebar**: Rekomendasi produk kategori sama
- **Download/Share Options**: Tombol untuk download spesifikasi atau berbagi
- **Stock Status**: Indikator ketersediaan produk

#### ✨ Efek Visual
- Fade transition pada image gallery
- Smooth scroll to sections
- Hover effects pada related products
- Floating animation pada product images
- Shadow effects pada product showcase

---

### 4️⃣ **LAYANAN (Services)** - `/layanan`

#### 📍 Tujuan
Menampilkan berbagai layanan purna jual dan dukungan teknis yang ditawarkan.

#### 🎨 Tampilan & Layout
- **Hero Section** dengan animasi orb floating dan grid pattern background
- **Gradient text title** dengan shimmer animation
- **Service Cards** dalam grid layout
- **Service Description**: Text content dengan formatting rapi
- **CTA Buttons**: Link ke detail layanan individual

#### ⚡ Fitur Utama
- **After Sales Services**: Program maintenance berkala 3x setahun
- **Training Battery**: Program pelatihan penggunaan baterai yang benar
- **Trade-In Program**: Program tukar tambah baterai lama dengan baru
- **Technical Support**: Dukungan teknis 24/7
- **Service Cards**: Cards yang dapat diklik untuk melihat detail
- **Accordion Details**: Informasi terurai dalam accordion expandable
- **Service Gallery**: Galeri foto kegiatan servis

#### ✨ Efek Visual
- **Orb Float Animation**: 2 orb decorative yang bergerak naik-turun dengan delay berbeda
- **Title Shimmer**: Efek gradient text yang bergerak seperti cahaya berkilau
- **Grid Pattern Overlay**: Grid pattern yang fade ke bawah
- **Hero Shell**: Glassmorphism effect dengan backdrop blur dan gradient border
- **Floating Animation**: Card-card yang muncul dengan floating motion
- **Hover Expand**: Service cards yang membesar saat hover
- **Gradient Backgrounds**: Radial gradients di background

---

### 5️⃣ **DETAIL LAYANAN** - `/layanan/detail`

#### 📍 Tujuan
Menampilkan penjelasan mendalam tentang setiap jenis layanan.

#### 🎨 Tampilan & Layout
- **Hero Section** dengan thumbnail layanan
- **Service Overview**: Deskripsi komprehensif
- **Details Points**: List keuntungan dan fitur dalam format bullet
- **Gallery Section**: Galeri foto kegiatan servis
- **Recommendations**: Layanan terkait yang direkomendasikan
- **Contact Section**: Form atau link kontak

#### ⚡ Fitur Utama
- **Rich Content Display**: Teks terformat dengan heading dan paragraf
- **Image Gallery**: Multiple images dalam carousel
- **Recommendation Cards**: Link ke layanan terkait
- **Process Steps**: Penjelasan step-by-step proses layanan
- **Pricing Table**: Tabel harga (jika ada)
- **Testimonials**: Review dari klien yang puas
- **FAQ Section**: Pertanyaan umum dan jawaban

#### ✨ Efek Visual
- Fade-in animations saat page load
- Image zoom on hover
- Smooth scroll anchors
- Gradient overlays pada images
- Card transitions pada recommendation
- Staggered animations untuk lists

---

### 6️⃣ **TENTANG KAMI (About)** - `/tentang`

#### 📍 Tujuan
Menampilkan profil perusahaan, visi misi, sejarah, dan alamat kantor.

#### 🎨 Tampilan & Layout
- **Hero Section** dengan background image (`hero2.png`)
- Gradient overlay untuk kontras
- **Carousel Profile**: Slideshow dengan tombol prev/next
- **Company Info**: Deskripsi dan nilai perusahaan
- **History Timeline**: Timeline perkembangan perusahaan
- **Office Locations**: Peta interaktif kantor-kantor
- **Team Section**: Profil tim profesional (jika ada)

#### ⚡ Fitur Utama
- **About Carousel**: Slide carousel dengan 3-5 profil singkat
- **Carousel Navigation**: Tombol prev/next untuk navigasi
- **Slide Content**: Gambar + teks deskripsi setiap slide
- **Map Display**: Peta Leaflet untuk lokasi kantor
- **Timeline**: Timeline visual perkembangan perusahaan
- **Statistics**: Angka-angka pencapaian perusahaan
- **Contact Cards**: Informasi kantor dengan alamat dan kontak

#### ✨ Efek Visual
- **Hero Gradient Overlay**: Gradient linear yang sophisticated
- **Carousel Transitions**: Smooth fade ani untuk slide changes
- **Map Initialization**: Peta yang smooth pan & zoom
- **Timeline Animation**: Animation saat scroll ke timeline
- **Number Counter**: Animasi counting up untuk statistics
- **Parallax Effect**: Background bergerak lebih lambat dari foreground
- **Reveal on Scroll**: Elemen yang muncul sambil scroll

---

### 7️⃣ **UNDUHAN (Download)** - `/unduhan`

#### 📍 Tujuan
Menyediakan file-file yang dapat di-download seperti brosur, katalog, dan datasheet.

#### 🎨 Tampilan & Layout
- **Grid Layout**: Kategori file dengan thumbnail preview
- **Download Cards**: Kartu untuk setiap file yang dapat diunduh
- **Search/Filter**: Search box untuk mencari file tertentu
- **File Info**: Tipe file, ukuran, tanggal upload

#### ⚡ Fitur Utama
- **File Categories**: Organisasi file dalam kategori (Brosur, Katalog, Datasheet, dll)
- **Download Buttons**: Tombol download dengan icon file
- **File Preview**: Preview thumbnail untuk masing-masing file
- **Sort Options**: Pengurutan berdasarkan tanggal, judul, atau kategori
- **Metadata Display**: Menampilkan ukuran dan tipe file

#### ✨ Efek Visual
- Card hover animation dengan shadow increase
- Download button pulse animation
- File icons dengan color coding
- Smooth grid layout transitions
- Loading skeleton saat file preview loading

---

### 8️⃣ **BERITA (News/Blog)** - `/berita`

#### 📍 Tujuan
Menampilkan artikel berita, update perusahaan, dan konten informatif.

#### 🎨 Tampilan & Layout
- **Article Grid**: Artikel dalam grid atau list format
- **Article Cards**: Thumbnail + judul + excerpt + metadata
- **Featured Post**: Artikel terbaru/featured di atas
- **Sidebar**: Kategori, tag cloud, atau recent posts
- **Pagination**: Navigasi untuk halaman artikel

#### ⚡ Fitur Utama
- **Article Display**: Judul, excerpt, tanggal publish, author
- **Thumbnail Images**: Gambar featured untuk setiap artikel
- **Category Tags**: Tags untuk kategorisasi artikel
- **Read More Links**: Link ke full article
- **Search Articles**: Pencarian artikel berdasarkan keyword
- **Sort Options**: Pengurutan berdasarkan tanggal atau popularitas

#### ✨ Efek Visual
- Card flip animation saat hover
- Image fade on hover
- Smooth pagination transitions
- Read time indicator dengan animation
- Badge animations untuk categories

---

## 🎬 EFEK GLOBAL & INTERAKTIF

### Navbar/Header
- **Sticky Navigation**: Navbar tetap di atas saat scroll
- **Dynamic Gradient**: Background navbar berubah warna sesuai section yang sedang dilihat
- **Hover Effects**: Menu items dengan underline animation
- **Mobile Menu**: Toggle menu dengan smooth slide animation

### Scroll Effects
- **Reveal on Scroll**: Elemen muncul dengan fade/slide saat scroll ke viewport
- **Parallax**: Background images bergerak lebih lambat dari konten
- **Scroll Progress**: Indikator progress scrolling halaman
- **Anchor Smooth Scroll**: Smooth scrolling ke section tertentu

### Hover States
- **Button Transforms**: Buttons yang bergerak/membesar saat hover
- **Link Underlines**: Underline animation pada links
- **Card Shadows**: Shadow yang meningkat pada card hover
- **Image Zoom**: Gambar yang zoom saat hover

### Loading & Transitions
- **Fade Transitions**: Animasi fade untuk page transitions
- **Skeleton Loaders**: Placeholder saat loading content
- **Progress Indicators**: Loading bar untuk proses yang lama
- **Lazy Loading**: Images di-load saat mendekati viewport

### Mobile Optimizations
- **Responsive Breakpoints**: Design yang menyesuaikan di sm, md, lg, xl
- **Touch-friendly**: Buttons dan links yang besar di mobile
- **Simplified Navigation**: Menu yang di-optimize untuk mobile
- **Performance**: Image optimization untuk kecepatan loading

---

## 🚀 Cara Menjalankan Project

### 1. Install Dependencies

```bash
# Install composer packages (backend)
composer install

# Install npm packages (frontend)
npm install
```

### 2. Setup Environment

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 3. Setup Database

- Nyalakan **Apache** dan **MySQL** di XAMPP
- Buat database baru di phpMyAdmin: `projectmagang`
- Update `.env` dengan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projectmagang
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrate & Seed Database

```bash
php artisan migrate --seed
```

### 5. Jalankan Development Server

```bash
# Terminal 1: Start Laravel server (port 8000)
php artisan serve --host=127.0.0.1 --port=8000

# Terminal 2: Start Vite dev server (port 5173)
npm run dev
```

### 6. Akses Website

Buka browser dan kunjungi: **http://localhost:8000** atau **http://127.0.0.1:8000**

---

## 📁 Struktur Project

```
projectmagang/
├── app/
│   ├── Http/Controllers/
│   │   ├── KategoriController.php
│   │   ├── ProdukController.php
│   │   └── DetailProdukController.php
│   └── Models/
│       ├── Produk.php
│       ├── Kategori.php
│       ├── DetailProduk.php
│       └── User.php
├── resources/
│   ├── css/
│   │   └── app.css (Custom styles & animations)
│   ├── js/
│   │   ├── app.js (Main JS)
│   │   └── bootstrap.js
│   └── views/
│       ├── pages/
│       │   ├── homepage.blade.php
│       │   ├── produk.blade.php
│       │   ├── detail-produk.blade.php
│       │   ├── layanan.blade.php
│       │   ├── detail-layanan.blade.php
│       │   ├── tentang.blade.php
│       │   ├── unduhan.blade.php
│       │   └── berita.blade.php
│       ├── components/
│       │   └── navbar.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php (Web routes definition)
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── images/ (Product images, heroes, logos)
│   └── videos/ (Hero videos)
└── config/
    └── app.php
```

---

## 🎨 Design System

### Color Palette
- **Primary**: `#f2cd00` (Yellow/Gold)
- **Primary Dark**: `#10215a` (Navy)
- **Secondary**: `#3b82f6` (Blue)
- **Background**: `#f8fbff` (Light Blue)
- **Text**: `#1b1b18` (Dark Gray)
- **Accent**: `#F53003` (Red)

### Typography
- **Font Family**: IBM Plex Sans, Instrument Sans
- **Desktop Heading**: clamp(2rem, 4vw, 3.75rem)
- **Mobile Heading**: clamp(1.5rem, 3vw, 2.5rem)
- **Body**: 14px - 16px

### Spacing Scale
- Base unit: 4px
- Common sizes: 4px, 8px, 12px, 16px, 24px, 32px, 48px, 64px

---

## ✅ Build & Production

```bash
# Compile production assets
npm run build

# Run production build
php artisan serve --host=127.0.0.1 --port=8000
```

---

## 🔗 Links Penting

- **Documentation**: [Laravel Docs](https://laravel.com/docs)
- **Tailwind CSS**: [Tailwind Docs](https://tailwindcss.com/docs)
- **Vite**: [Vite Docs](https://vitejs.dev/)
- **Blade Template**: [Blade Docs](https://laravel.com/docs/blade)

---

**Terakhir diupdate**: April 9, 2026  
**Versi Project**: 1.0.0 (Development)

```bash
php artisan serve
npm run dev
```

6. Buka aplikasi di browser.

- Backend Laravel: `http://127.0.0.1:8000`
- Frontend Vite: `http://localhost:5173`

### Quick Start (Tanpa Otak-Atik Manual)

Setelah `.env` database diisi, cukup jalankan urutan ini:

```bash
composer install
npm install
php artisan key:generate
php artisan migrate --seed
php artisan serve
npm run dev
```

## Struktur Backend yang Penting

- Routing web: [routes/web.php](routes/web.php)
- Controller: [app/Http/Controllers](app/Http/Controllers)
- Konfigurasi katalog produk: [config/product_catalog.php](config/product_catalog.php)
- Halaman produk: [resources/views/pages/produk.blade.php](resources/views/pages/produk.blade.php)
- Halaman detail produk: [resources/views/pages/detail-produk.blade.php](resources/views/pages/detail-produk.blade.php)

## Arsitektur Data Produk Saat Ini

Saat ini data katalog produk disentralisasi di file config berikut:

- [config/product_catalog.php](config/product_catalog.php)

Setiap item produk minimal berisi field:

- category
- name
- code
- image
- gallery
- summary
- description

Keuntungan pendekatan ini:

- Satu sumber data untuk beberapa halaman
- Mengurangi duplikasi data antar Blade
- Lebih aman saat nanti migrasi ke database

## Alur Data Produk di View

1. Data mentah diambil dari config product catalog.
2. Path gambar dikonversi menjadi URL asset pada level view.
3. Halaman list produk dan detail produk membaca sumber data yang sama.
4. Detail produk memilih item berdasarkan query item (code produk).

## Panduan Pengembangan Backend Berikutnya

Jika ingin scale ke backend penuh (database + API), langkah yang direkomendasikan:

1. Buat migration tabel products dan product_images.
2. Buat model Product dan ProductImage dengan relasi.
3. Buat ProductRepository atau service layer untuk query data.
4. Pindahkan logic pemilihan produk dari Blade ke controller.
5. Gunakan route model binding berdasarkan slug atau code.
6. Tambahkan caching untuk katalog produk dan detail produk.

## Konvensi Aman Saat Lanjut Development

- Jangan menaruh array data besar langsung di Blade.
- Simpan data domain di config sementara, lalu migrasi ke DB saat siap.
- Pertahankan key field agar kompatibel dengan komponen frontend yang sudah jadi.
- Jika menambah field baru produk, pastikan backward compatible untuk view lama.

## Testing dan Quality Check

Menjalankan test:

```bash
php artisan test
```

Menjalankan formatter backend:

```bash
php vendor/bin/pint
```

## Catatan Penting

- Fokus project saat ini adalah stabilisasi struktur backend tanpa perubahan desain UI.
- Refactor lanjutan disarankan dilakukan bertahap dari config ke controller lalu ke database.

