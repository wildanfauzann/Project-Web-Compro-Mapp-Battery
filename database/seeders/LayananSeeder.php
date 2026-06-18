<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'slug' => 'after-sales-services',
                'title' => 'After Sales Services',
                'image' => 'images/hero/AfterSalesHero.jpg',
                'description' => 'Program purnajual 3 kali per tahun (setiap 4 bulan) mencakup preventive maintenance, cek level air aki, pembersihan korosi, cek voltase serta BJ, termasuk monitoring data pengisian dan evaluasi umur baterai untuk menekan risiko downtime.',
                'detail_intro' => 'Layanan After Sales Services (ASS) kami dirancang untuk memastikan baterai forklift tetap dalam kondisi prima, aman digunakan, dan memiliki usia pakai yang optimal pada operasional harian gudang.',
                'detail_points' => [
                    'Program preventive maintenance dilakukan secara berkala setiap empat bulan untuk pengecekan kondisi fisik dan performa baterai.',
                    'Pembersihan korosi dan pemeriksaan konektor membantu menjaga aliran listrik tetap stabil saat unit beroperasi.',
                    'Pengukuran voltase, BJ, dan arus pengisian memberikan data akurat untuk evaluasi kesehatan baterai.',
                    'Laporan teknis dan rekomendasi tindakan kami susun agar tim Anda dapat merencanakan perawatan berikutnya dengan lebih tepat.',
                ],
                'side_image' => 'images/layanan/After Sales/1.jpg',
                'gallery' => [
                    'images/hero/AfterSalesHero.jpg',
                    'images/layanan/After Sales/1.jpg',
                    'images/layanan/After Sales/2.jpg',
                    'images/layanan/After Sales/3.jpg',
                ],
                'recommendations' => ['training-battery', 'trade-in'],
            ],
            [
                'slug' => 'training-battery',
                'title' => 'Training Battery',
                'image' => 'images/hero/TrainingHero.jpg',
                'description' => 'Pelatihan teknis dan kebiasaan kerja operator untuk pengisian, perawatan, dan penggunaan baterai yang benar agar umur pakai lebih panjang, performa stabil, dan biaya operasional gudang lebih terkendali.',
                'detail_intro' => 'Program Training Battery membantu operator memahami standar penggunaan baterai forklift yang benar sejak pengisian hingga penyimpanan, sehingga risiko kerusakan dini dapat ditekan.',
                'detail_points' => [
                    'Materi praktik mencakup SOP pengisian baterai, waktu istirahat baterai, dan prosedur keamanan area charging.',
                    'Tim teknis membagikan panduan inspeksi harian yang mudah diterapkan oleh operator lapangan.',
                    'Peserta mendapatkan simulasi kasus umum agar mampu mengambil keputusan cepat saat terjadi indikasi gangguan.',
                    'Hasil pelatihan difokuskan pada efisiensi energi, umur pakai baterai yang lebih panjang, dan biaya operasional yang lebih terkendali.',
                ],
                'side_image' => 'images/layanan/Training/SAT.jpg',
                'gallery' => [
                    'images/hero/TrainingHero.jpg',
                    'images/layanan/Training/Kiat Tambak Sawah & Krian.jpg',
                    'images/layanan/Training/SAT.jpg',
                    'images/layanan/Training/TFJ.jpg',
                ],
                'recommendations' => ['after-sales-services', 'trade-in'],
            ],
            [
                'slug' => 'trade-in',
                'title' => 'Trade In',
                'image' => 'images/hero/Trade.jpeg',
                'description' => 'Solusi tukar tambah baterai lama ke unit yang lebih siap pakai dengan proses evaluasi kondisi yang transparan, sehingga perencanaan anggaran penggantian aset menjadi lebih ringan dan terukur.',
                'detail_intro' => 'Skema Trade In kami memberikan jalur upgrade baterai yang lebih efisien, dengan proses penilaian kondisi unit lama secara transparan dan berbasis kebutuhan operasional Anda.',
                'detail_points' => [
                    'Tim kami melakukan asesmen awal kondisi baterai lama untuk menentukan nilai tukar yang realistis.',
                    'Rekomendasi unit pengganti disesuaikan dengan ritme kerja forklift, durasi shift, dan kapasitas beban operasional.',
                    'Proses administrasi dibuat ringkas agar transisi unit lama ke unit baru berjalan lebih cepat.',
                    'Pendekatan ini membantu perusahaan menjaga cash flow sambil tetap meningkatkan keandalan armada forklift.',
                ],
                'side_image' => 'images/layanan/TradeInFoto.jpeg',
                'gallery' => [
                    'images/hero/Trade.jpeg',
                    'images/layanan/TradeInFoto.jpeg',
                ],
                'recommendations' => ['after-sales-services', 'training-battery'],
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Layanan::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
