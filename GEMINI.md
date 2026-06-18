# GEMINI.md

# PT MAP Web Profile

Dokumen ini berisi aturan kerja AI Assistant (Gemini, Copilot, Claude, ChatGPT, dan AI lainnya) saat membantu pengembangan project.

---

# PROJECT OVERVIEW

Project Name:
PT MAP Web Profile

Technology Stack:
- Laravel 12
- PHP 8.2+
- Blade Template Engine
- Tailwind CSS
- Vite
- JavaScript
- MySQL (jika digunakan)
- Laravel Routing

Project Type:
- Company Profile Website
- Product Catalog Website

---

# PRIMARY OBJECTIVE

Fokus utama pengembangan saat ini adalah:

- FrontEnd Development
- UI Improvement
- UX Improvement
- Responsive Design
- Performance Optimization
- Accessibility Improvement
- Visual Consistency

Backend dianggap stabil dan tidak menjadi fokus pengembangan.

---

# VERY IMPORTANT RULES

AI HARUS MEMATUHI SELURUH ATURAN BERIKUT.

## RULE #1

JANGAN MENGUBAH BACKEND.

Jangan mengubah:

- Routes
- Controllers
- Models
- Middleware
- Service Classes
- Repositories
- Events
- Jobs
- Policies
- Requests
- Providers

Kecuali diminta secara eksplisit oleh developer.

---

## RULE #2

JANGAN MENGUBAH DATABASE.

Jangan membuat:

- Migration baru
- Seeder baru
- Factory baru
- Perubahan tabel
- Perubahan relasi

Kecuali diminta secara eksplisit.

---

## RULE #3

JANGAN MENGUBAH API.

Jangan:

- Membuat endpoint baru
- Mengubah endpoint lama
- Mengubah response structure
- Mengubah request structure

Kecuali diminta secara eksplisit.

---

## RULE #4

PERTAHANKAN KOMPATIBILITAS.

Setiap perubahan harus:

- Backward Compatible
- Tidak merusak halaman lain
- Tidak merusak backend yang ada
- Tidak merusak struktur data

---

## RULE #5

JANGAN MENGHAPUS FITUR YANG SUDAH ADA.

Jika ingin melakukan refactor:

- Jelaskan terlebih dahulu
- Minta persetujuan developer

---

# ALLOWED FILES

AI BOLEH MEMODIFIKASI:

resources/views/**

resources/css/**

resources/js/**

public/assets/**

public/images/**

public/icons/**

tailwind.config.js

vite.config.js

---

# RESTRICTED FILES

AI TIDAK BOLEH MEMODIFIKASI:

routes/**

app/**

database/**

config/**

bootstrap/**

storage/**

vendor/**

composer.json

composer.lock

.env

---

# UI DESIGN PRINCIPLES

Seluruh perubahan UI harus mengikuti prinsip berikut:

## Modern

Gunakan pendekatan modern.

Hindari:

- Desain jadul
- Layout sempit
- Komponen usang

---

## Professional

Website harus terlihat:

- Corporate
- Clean
- Premium
- Professional

---

## Responsive

Wajib mendukung:

- Mobile
- Tablet
- Laptop
- Desktop

Gunakan:

- Flexbox
- CSS Grid
- Responsive spacing

---

## Consistent

Gunakan:

- Konsistensi spacing
- Konsistensi warna
- Konsistensi typography

---

## Accessibility

Perhatikan:

- Alt image
- Contrast ratio
- Semantic HTML
- Keyboard navigation

---

# BLADE RULES

Saat memodifikasi Blade:

Gunakan:

- @foreach
- @if
- @isset
- @php seperlunya

Hindari:

- Business logic kompleks di Blade
- Query database di Blade
- Logic backend di Blade

---

# TAILWIND RULES

Gunakan:

- Utility classes
- Responsive breakpoints
- Reusable components

Hindari:

- Inline style berlebihan
- Hardcoded pixel berlebihan

Prioritaskan:

- md:
- lg:
- xl:

untuk responsive design.

---

# JAVASCRIPT RULES

Gunakan JavaScript seminimal mungkin.

Prioritas:

1. HTML
2. CSS
3. Tailwind
4. JavaScript

Hindari library tambahan kecuali diminta.

---

# PERFORMANCE RULES

Selalu prioritaskan:

- Fast loading
- Optimized image
- Minimal JS
- Minimal DOM complexity

Hindari:

- Library besar yang tidak perlu
- Animasi berat
- Render berlebihan

---

# IMAGE RULES

Gunakan:

- Lazy loading
- Responsive image

Jangan:

- Mengubah path backend
- Mengubah struktur asset tanpa alasan

---

# BEFORE MAKING CHANGES

AI HARUS MENJELASKAN:

1. File yang akan diubah
2. Alasan perubahan
3. Dampak perubahan
4. Risiko perubahan

Baru setelah itu memberikan kode.

---

# WHEN RECEIVING A TASK

AI HARUS:

1. Analisis permintaan.
2. Pastikan tidak melanggar aturan backend.
3. Berikan solusi FrontEnd terlebih dahulu.
4. Jelaskan perubahan.
5. Berikan kode final.

---

# IF BACKEND CHANGE IS REQUIRED

Jika solusi memerlukan perubahan backend:

AI HARUS:

- Menghentikan proses
- Menjelaskan alasan
- Memberikan alternatif FrontEnd-only
- Menunggu persetujuan developer

---

# PROJECT PHILOSOPHY

Prioritas utama:

1. Stabilitas project
2. Menjaga backend tetap aman
3. Menjaga kompatibilitas
4. Meningkatkan UI/UX
5. Menjaga performa
6. Menjaga maintainability

Frontend boleh berkembang.
Backend tidak boleh disentuh tanpa izin.

END OF FILE
