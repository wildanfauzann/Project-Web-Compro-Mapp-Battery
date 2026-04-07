# PT MAP Web Profile - Backend README

Dokumentasi ini dibuat untuk memudahkan tim backend memahami struktur project, alur data saat ini, dan arah pengembangan berikutnya tanpa mengubah tampilan frontend yang sudah final.

## Ringkasan Teknologi

- Framework: Laravel 12
- PHP: 8.2+
- Frontend build: Vite + Tailwind
- View layer: Blade

## Cara Menjalankan Project

1. Install dependency backend dan frontend.

```bash
composer install
npm install
```

2. Siapkan environment.

```bash
cp .env.example .env
php artisan key:generate
```

3. Jalankan project.

```bash
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

