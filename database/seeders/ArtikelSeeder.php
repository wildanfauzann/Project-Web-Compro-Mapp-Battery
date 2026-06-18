<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            // Editorial Moments
            [
                'kategori_artikel' => 'editorial',
                'tag' => 'Operational Insight',
                'judul' => 'Menerjemahkan Data Lapangan Menjadi Keputusan Cepat',
                'deskripsi' => 'Tim kami tidak hanya mendokumentasikan kegiatan, tetapi mengubah temuan harian menjadi rekomendasi teknis yang bisa langsung dieksekusi di gudang, pabrik, dan area distribusi.',
                'gambar_utama' => 'images/artikel/artikel1.png',
            ],
            [
                'kategori_artikel' => 'editorial',
                'tag' => 'After Sales Program',
                'judul' => 'Pendampingan Berkelanjutan Setelah Implementasi',
                'deskripsi' => 'Setiap instalasi diikuti evaluasi performa berkala untuk memastikan baterai forklift tetap stabil, aman, dan ekonomis dalam jangka panjang.',
                'gambar_utama' => 'images/artikel/artikel2.png',
            ],
            [
                'kategori_artikel' => 'editorial',
                'tag' => 'People & Safety',
                'judul' => 'Membangun Budaya Operasional yang Lebih Aman',
                'deskripsi' => 'Program training kami menekankan keseimbangan antara produktivitas dan keselamatan sehingga tim operasional memiliki SOP yang lebih terstruktur.',
                'gambar_utama' => 'images/artikel/artikel3.png',
            ],

            // Visit Stories
            [
                'kategori_artikel' => 'visit',
                'label' => 'MEGASURYA',
                'judul' => 'Mendalami Kebutuhan Lapangan Secara Langsung',
                'deskripsi' => 'PT Multidaya Anugrah Perkasa melakukan kunjungan ke PT Megasurya untuk memetakan kebutuhan pelanggan, memperkuat komunikasi teknis, dan memastikan solusi baterai forklift yang diberikan benar-benar sesuai ritme operasional.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                ],
            ],
            [
                'kategori_artikel' => 'visit',
                'label' => 'PT.WINGS',
                'judul' => 'Evaluasi Bersama untuk Kualitas Layanan Berkelanjutan',
                'deskripsi' => 'Kunjungan ke PT Wings difokuskan pada evaluasi performa layanan, penyelarasan kebutuhan teknis forklift, dan pembentukan strategi pendampingan yang lebih responsif untuk mendukung stabilitas operasional harian.',
                'galeri' => [
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                ],
            ],
            [
                'kategori_artikel' => 'visit',
                'label' => 'WILMAR',
                'judul' => 'Kolaborasi Strategis untuk Peningkatan Efisiensi',
                'deskripsi' => 'Bersama Wilmar Group, tim kami membahas peningkatan efisiensi pemakaian baterai, pendekatan maintenance berbasis data, serta rencana penguatan layanan purnajual agar performa unit tetap optimal dalam jangka panjang.',
                'galeri' => [
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                ],
            ],

            // Principal Stories
            [
                'kategori_artikel' => 'principal',
                'label' => 'HAWKER 2025',
                'judul' => 'Principal Visit untuk Peningkatan Standar Layanan',
                'deskripsi' => 'PT Multidaya Anugrah Perkasa bersama principal Hawker melakukan evaluasi lapangan, pembaruan insight teknologi, serta penyelarasan standar layanan agar performa baterai pelanggan tetap konsisten dan andal.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                ],
            ],
            [
                'kategori_artikel' => 'principal',
                'label' => 'MICROTEX 2023',
                'judul' => 'Penguatan Kolaborasi Teknis Bersama Principal',
                'deskripsi' => 'Dalam agenda principal visit Microtex, tim kami mendalami pembaruan teknologi baterai forklift, memperkuat koordinasi teknis, dan merumuskan pendekatan implementasi yang lebih presisi sesuai kebutuhan pelanggan di lapangan.',
                'galeri' => [
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                ],
            ],

            // Exhibition Stories
            [
                'kategori_artikel' => 'exhibition',
                'label' => 'FORKLIFT INDONESIA 2023',
                'judul' => 'Komitmen Menampilkan Solusi Industri Terkini',
                'deskripsi' => 'Partisipasi pada Forklift Indonesia 2023 menjadi momentum PT Multidaya Anugrah Perkasa untuk memperkenalkan inovasi produk baterai forklift, memperluas jaringan bisnis, dan menghadirkan solusi energi industri yang relevan bagi kebutuhan pelanggan.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                ],
            ],
            [
                'kategori_artikel' => 'exhibition',
                'label' => 'MANUFACTURING SURABAYA 2025',
                'judul' => 'Memperkenalkan Teknologi Baterai untuk Efisiensi Produksi',
                'deskripsi' => 'Dalam event Manufacturing Surabaya 2025, kami mempresentasikan solusi baterai forklift berperforma tinggi untuk menunjang kelancaran proses produksi, sekaligus membuka kolaborasi baru bersama pelaku manufaktur nasional.',
                'galeri' => [
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                ],
            ],
            [
                'kategori_artikel' => 'exhibition',
                'label' => 'OIL AND GAS INDONESIA 2024',
                'judul' => 'Solusi Energi Andal untuk Operasional Industri Berat',
                'deskripsi' => 'Melalui keikutsertaan di Oil and Gas Indonesia 2024, PT Multidaya Anugrah Perkasa menghadirkan teknologi baterai forklift yang tahan terhadap kebutuhan operasional sektor energi dengan tuntutan keamanan dan keandalan tinggi.',
                'galeri' => [
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                ],
            ],
            [
                'kategori_artikel' => 'exhibition',
                'label' => 'SOLARTECH INDONESIA 2024',
                'judul' => 'Mendorong Operasional Ramah Lingkungan Berbasis Teknologi',
                'deskripsi' => 'Pada Solartech Indonesia 2024, kami memperkenalkan solusi baterai forklift yang efisien, berorientasi pada keberlanjutan, dan mendukung transisi operasional industri menuju sistem energi yang lebih hijau.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel2.png',
                ],
            ],

            // Installation Story
            [
                'kategori_artikel' => 'installation',
                'judul' => 'Instalasi Battery',
                'deskripsi' => 'PT Multidaya Anugrah Perkasa saat ini tengah melakukan proses instalasi baterai forklift sebagai bagian dari komitmen dalam memberikan layanan terbaik kepada pelanggan. Kegiatan ini meliputi pemasangan, pengecekan, serta pengujian performa baterai guna memastikan kinerja yang optimal, aman, dan sesuai dengan kebutuhan operasional di lapangan.',
                'galeri' => [
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel3.png',
                ],
            ],

            // Training Stories
            [
                'kategori_artikel' => 'training',
                'label' => 'KIAT P6',
                'judul' => 'Training Operasional untuk Tim Lapangan',
                'deskripsi' => 'PT Multidaya Anugrah Perkasa menyelenggarakan training baterai forklift kepada tim Kiat P6 sebagai upaya meningkatkan pemahaman teknis, perawatan, serta penggunaan baterai secara optimal guna mendukung operasional yang lebih efisien dan aman.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                ],
            ],
            [
                'kategori_artikel' => 'training',
                'label' => 'KIAT TAMBAK SAWAH DAN KRIAN',
                'judul' => 'Penguatan Kompetensi untuk Performa Lapangan',
                'deskripsi' => 'Training baterai forklift kepada tim Kiat Tambak Sawah dan Krian difokuskan pada praktik penggunaan yang benar, keselamatan kerja, serta perawatan berkala demi menjaga kelancaran operasional di lapangan.',
                'galeri' => [
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                ],
            ],
            [
                'kategori_artikel' => 'training',
                'label' => 'SAT',
                'judul' => 'Pendampingan Teknis Berbasis Kebutuhan Operasional',
                'deskripsi' => 'Kegiatan training untuk SAT menitikberatkan pada peningkatan pemahaman teknis, langkah perawatan harian, serta proses penggunaan baterai forklift yang efisien agar performa operasional tetap stabil.',
                'galeri' => [
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel2.png',
                ],
            ],
            [
                'kategori_artikel' => 'training',
                'label' => 'TFJ',
                'judul' => 'Program Training untuk Keamanan dan Efisiensi',
                'deskripsi' => 'Pada sesi bersama TFJ, tim kami membahas praktik terbaik penggunaan baterai forklift, prosedur pengecekan keamanan, dan strategi perawatan agar unit tetap andal serta mendukung produktivitas harian.',
                'galeri' => [
                    'images/artikel/artikel1.png',
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel2.png',
                ],
            ],

            // Unit Testing Story
            [
                'kategori_artikel' => 'unit_testing',
                'judul' => 'Unit - Unit Testing',
                'deskripsi' => 'PT Multidaya Anugrah Perkasa sedang melaksanakan kegiatan unit testing pada baterai forklift guna memastikan kualitas, performa, serta keandalan produk sebelum digunakan oleh pelanggan. Kegiatan ini dilakukan sebagai bentuk komitmen perusahaan dalam menjaga standar mutu dan keamanan produk.',
                'galeri' => [
                    'images/artikel/artikel3.png',
                    'images/artikel/artikel2.png',
                    'images/artikel/artikel1.png',
                ],
            ],
        ];

        foreach ($articles as $article) {
            if (!isset($article['slug'])) {
                $article['slug'] = \Illuminate\Support\Str::slug($article['judul']);
            }
            Artikel::updateOrCreate(
                ['judul' => $article['judul']],
                $article
            );
        }
    }
}
