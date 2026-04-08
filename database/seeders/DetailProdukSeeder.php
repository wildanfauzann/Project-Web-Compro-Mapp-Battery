<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\DetailProduk;

class DetailProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailProduk::create([
            'produk_id' => 1,
            'kode_produk' => 'MTX-TB-48V',
            'nama_kategori' => 'Battery',
            'deskripsi_lengkap_produk' => 'Microtex Traction Battery diproduksi dari India dengan standar kualitas Eropa yang ketat. Dirancang khusus untuk operasional forklift industri jangka panjang, baterai ini menawarkan ketahanan siklus tinggi dan performa arus yang stabil. Cocok untuk aplikasi single-shift maupun multi-shift dengan keandalan tinggi dan perawatan minimal.',
            'tipe' => 'Lead-Acid Flooded (Wet Cell)',
            'voltase' => '24V, 36V, 48V, 72V, 80V',
            'kapasitas' => '150Ah - 800Ah',
            'siklus_hidup' => 'Hingga 1500 siklus (80% DoD)',
        ]);

        DetailProduk::create([
            'produk_id' => 2,
            'kode_produk' => 'RPW-LT-24V',
            'nama_kategori' => 'Battery',
            'deskripsi_lengkap_produk' => 'ROYPOW Lithium Battery menggunakan teknologi sel LiFePO4 generasi terbaru yang menawarkan efisiensi energi tinggi, pengisian cepat, dan masa pakai hingga 3 kali lebih panjang dibanding baterai konvensional. Tidak memerlukan perawatan berkala, bebas emisi gas, dan aman digunakan di lingkungan industri tertutup. Dilengkapi BMS (Battery Management System) cerdas untuk proteksi overcharge dan overdischarge.',
            'tipe' => 'Lithium Iron Phosphate (LiFePO4)',
            'voltase' => '24V, 36V, 48V, 80V',
            'kapasitas' => '100Ah - 600Ah',
            'siklus_hidup' => 'Hingga 3000 siklus (80% DoD)',
        ]);

        DetailProduk::create([
            'produk_id' => 3,
            'kode_produk' => 'HOCO-TB-48V',
            'nama_kategori' => 'Battery',
            'deskripsi_lengkap_produk' => 'Hawker Traction Battery merupakan produk unggulan dari EnerSys yang telah terbukti di industri forklift global. Menggunakan teknologi plat positif khusus yang meningkatkan kapasitas dan memperpanjang umur baterai. Ideal untuk operasional intensif dengan waktu pemakaian panjang dan kebutuhan arus tinggi. Tersedia dalam berbagai konfigurasi voltase untuk berbagai jenis forklift.',
            'tipe' => 'Lead-Acid Flooded (Wet Cell), VRLA',
            'voltase' => '24V, 36V, 48V, 72V, 80V',
            'kapasitas' => '200Ah - 1000Ah',
            'siklus_hidup' => 'Hingga 1500 siklus (80% DoD)',
        ]);

        DetailProduk::create([
            'produk_id' => 4,
            'kode_produk' => 'SMT-TB-48V',
            'nama_kategori' => 'Battery',
            'deskripsi_lengkap_produk' => 'Semitrac Battery dirancang khusus untuk forklift kelas menengah yang beroperasi dalam kondisi campuran indoor-outdoor. Teknologi konstruksi plat semi-traksi memastikan ketahanan getaran dan daya tahan terhadap deep discharge yang lebih baik. Solusi ekonomis yang tetap menjaga standar performa tinggi untuk kebutuhan logistik dan pergudangan.',
            'tipe' => 'Lead-Acid Semi-Traction (EFB)',
            'voltase' => '24V, 36V, 48V',
            'kapasitas' => '100Ah - 500Ah',
            'siklus_hidup' => 'Hingga 1200 siklus (80% DoD)',
        ]);

        DetailProduk::create([
            'produk_id' => 5,
            'kode_produk' => 'CHG-HGH-48V',
            'nama_kategori' => 'Charger',
            'deskripsi_lengkap_produk' => 'High Frequency Charger menggunakan teknologi IGBT switching frekuensi tinggi yang menghasilkan pengisian lebih efisien, lebih cepat, dan lebih hemat energi dibanding charger konvensional. Desain kompak dengan sistem pendinginan aktif. Dilengkapi fitur otomatis untuk menyesuaikan profil pengisian sesuai kapasitas baterai, sehingga memperpanjang umur baterai secara signifikan.',
            'tipe' => 'High Frequency IGBT Charger',
            'voltase' => '24V, 36V, 48V, 72V, 80V (output)',
            'kapasitas' => '30A - 120A output',
            'siklus_hidup' => 'Efisiensi hingga 93%, garansi 2 tahun',
        ]);

        DetailProduk::create([
            'produk_id' => 6,
            'kode_produk' => 'CHG-LOW-24V',
            'nama_kategori' => 'Charger',
            'deskripsi_lengkap_produk' => 'Low Frequency Charger menggunakan trafo inti besi konvensional yang dikenal dengan ketahanan jangka panjang dan kemampuan menanggung beban berlebih (overload tolerance) yang tinggi. Cocok untuk lingkungan industri berat dengan kondisi jaringan listrik yang tidak stabil. Perawatan mudah dan suku cadang tersedia luas di pasaran.',
            'tipe' => 'Low Frequency Transformer Charger',
            'voltase' => '24V, 36V, 48V (output)',
            'kapasitas' => '30A - 80A output',
            'siklus_hidup' => 'Efisiensi hingga 85%, ketahanan >10 tahun',
        ]);

        DetailProduk::create([
            'produk_id' => 7,
            'kode_produk' => 'ACC-PLG-001',
            'nama_kategori' => 'Accessories',
            'deskripsi_lengkap_produk' => 'Plug dan Connector baterai forklift tersedia dalam berbagai standar internasional (SBE, Anderson, DIN, REMA). Dibuat dari material tembaga berlapis nikel dengan housing poliamida tahan panas dan kimia. Memastikan koneksi listrik yang aman, efisien, dan bebas korosi. Tersedia dalam berbagai rating arus mulai 80A hingga 350A.',
            'tipe' => 'Anderson SB, SBE, REMA, DIN',
            'voltase' => '24V - 96V (rated)',
            'kapasitas' => '80A, 160A, 320A, 350A',
            'siklus_hidup' => 'Hingga 10.000 kali koneksi',
        ]);

        DetailProduk::create([
            'produk_id' => 8,
            'kode_produk' => 'ACC-WTK-001',
            'nama_kategori' => 'Accessories',
            'deskripsi_lengkap_produk' => 'Water Tank dan sistem Battery Filling System (BFS) dirancang untuk mempermudah proses pengisian air aki pada baterai traksi secara cepat, bersih, dan aman. Mengurangi risiko overfilling yang dapat merusak sel baterai dan memperpanjang umur baterai secara keseluruhan. Tersedia dalam konfigurasi manual maupun semi-otomatis untuk berbagai ukuran baterai forklift.',
            'tipe' => 'Manual Water Tank & Semi-Auto BFS',
            'voltase' => '-',
            'kapasitas' => 'Kapasitas tangki 5L - 20L',
            'siklus_hidup' => 'Material PP/PE tahan kimia, garansi 1 tahun',
        ]);
    }
}
