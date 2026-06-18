# PT. Multidaya Anugerah Perkasa - Web Profile

Project ini adalah website profil perusahaan untuk PT. Multidaya Anugerah Perkasa yang berfokus pada penampilan informasi perusahaan, katalog produk, layanan, unduhan, dan berita dalam satu platform yang rapi dan responsif. Website ini dibangun dengan Laravel dan memanfaatkan Blade untuk tampilan halaman, sehingga mudah dikembangkan untuk kebutuhan company profile sekaligus katalog produk.

## Gambaran Project

Website ini dirancang untuk membantu pengunjung mengenal perusahaan, melihat produk yang tersedia, membaca informasi layanan, dan membuka detail produk secara lebih lengkap. Di sisi admin, project ini juga sudah disiapkan dengan resource controller untuk pengelolaan kategori, produk, dan detail produk.

## Fitur Utama

- Halaman beranda untuk menampilkan ringkasan perusahaan dan navigasi utama.
- Halaman tentang kami untuk profil dan informasi perusahaan.
- Halaman produk yang menampilkan daftar produk beserta relasinya ke kategori.
- Halaman detail produk dengan informasi lengkap dan produk serupa.
- Halaman layanan untuk menjelaskan layanan yang tersedia.
- Halaman unduhan untuk file seperti brosur, katalog, atau dokumen pendukung.
- Halaman berita untuk menampilkan artikel dan informasi terbaru.
- Area admin untuk kategori, produk, dan detail produk.

## Struktur Data

Project ini menggunakan tiga model utama:

- Kategori: menyimpan kelompok produk.
- Produk: menyimpan data produk seperti kode, nama, gambar, dan deskripsi.
- DetailProduk: menyimpan spesifikasi teknis dan informasi detail dari produk.

Relasi yang dipakai:

- Satu kategori memiliki banyak produk.
- Satu produk memiliki satu detail produk.

## Teknologi Yang Digunakan

| Komponen | Teknologi |
| --- | --- |
| Backend | Laravel |
| Bahasa | PHP |
| Frontend | Blade + Vite |
| Styling | CSS / Tailwind |
| Database | MySQL |

## Halaman Utama

- `/` - beranda
- `/tentang` - profil perusahaan
- `/produk` - katalog produk
- `/produk/detail?item=KODE_PRODUK` - detail produk
- `/layanan` - daftar layanan
- `/layanan/detail` - detail layanan
- `/unduhan` - halaman file unduhan
- `/berita` - daftar berita
- `/berita/{slug}` - detail artikel berita
- `/admin/kategori` - manajemen kategori
- `/admin/produk` - manajemen produk
- `/admin/detail-produk` - manajemen detail produk

## Cara Menjalankan Project

1. Install dependency PHP dan JavaScript.
2. Copy file environment bila diperlukan dan sesuaikan konfigurasi database.
3. Jalankan migrasi dan seeder jika data awal dibutuhkan.
4. Jalankan server Laravel dan Vite untuk mode development.

Contoh perintah:

```bash
php artisan serve
npm run dev
```

## Catatan

Project ini masih dapat dikembangkan lebih lanjut, terutama pada bagian manajemen konten admin, validasi data, dan integrasi data berita atau unduhan dari database agar seluruh konten dapat dikelola secara penuh melalui dashboard.
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

