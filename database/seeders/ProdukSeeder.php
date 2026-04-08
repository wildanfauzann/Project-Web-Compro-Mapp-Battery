<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         Produk::updateOrCreate(
            ['kategori_id' => 1, 
            'kode_produk' => 'MTX-TB-48V'],
            [
                'nama_produk' => 'Traction Battery Microtex',
                'img' => 'images/product/tractionmicrotex.png',
                'deskripsi' => 'Traction Battery Microtex menawarkan kinerja unggul, efisiensi energi, dan masa pakai yang panjang untuk berbagai aplikasi forklift.'
            ]
        );

        Produk::updateOrCreate(
            [
            'kategori_id' => 1,
            'kode_produk' => 'RPW-LT-24V'],
            [
                'nama_produk' => 'Roypow Lithium Battery',
                'img' => 'images/product/lithium.png',
                'deskripsi' => 'Roypow Lithium Battery menawarkan kinerja unggul, efisiensi energi, dan masa pakai yang panjang untuk berbagai aplikasi forklift.'
            ]
        );

        Produk::updateOrCreate(
            [
            'kategori_id' => 1,
            'kode_produk' => 'HWK-TB-48V'],
            [
                'nama_produk' => 'Traction Battery Hawker',
                'img' => 'images/product/tractionhawcker.png',
                'deskripsi' => 'Traction Battery Hawker menawarkan kinerja unggul, efisiensi energi, dan masa pakai yang panjang untuk berbagai aplikasi forklift.'
            ]
        );

        Produk::create([
            'kategori_id' => 1,
            'kode_produk' => 'SMT-TB-48V',
            'nama_produk' => 'Semitrac Battery',
            'img' => 'images/product/semitrac.png',
            'deskripsi' => 'Semitrac Battery dirancang khusus untuk aplikasi industri berat dengan kapasitas tinggi dan ketahanan luar biasa.'
        ]);

        Produk::create([
            'kategori_id' => 2,
            'kode_produk' => 'CHG-HGH-48V',
            'nama_produk' => 'High Frequency Charger',
            'img' => 'images/product/chargerhigh.png',
            'deskripsi' => 'Charger frekuensi tinggi untuk pengisian baterai forklift yang lebih efisien dan cepat.'
        ]);

        Produk::create([
            'kategori_id' => 2,
            'kode_produk' => 'CHG-LOW-24V',
            'nama_produk' => 'Low Frequency Charger',
            'img' => 'images/product/chargerlow.png',
            'deskripsi' => 'Charger frekuensi rendah yang tangguh dan handal untuk pengisian baterai industri secara optimal.'
        ]);

        Produk::create([
            'kategori_id' => 3,
            'kode_produk' => 'ACC-PLG-001',
            'nama_produk' => 'Plug & Connector',
            'img' => 'images/product/connector.png',
            'deskripsi' => 'Plug dan konektor berkualitas tinggi untuk koneksi baterai forklift yang aman dan tahan lama.'
        ]);

        Produk::create([
            'kategori_id' => 3,
            'kode_produk' => 'ACC-WTK-001',
            'nama_produk' => 'Water Tank & Accessories',
            'img' => 'images/product/watertank.png',
            'deskripsi' => 'Tangki air dan aksesori pelengkap untuk perawatan dan pemeliharaan baterai forklift secara rutin.'
        ]);
    }
}
