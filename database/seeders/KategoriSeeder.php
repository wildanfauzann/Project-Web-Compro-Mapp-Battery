<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $kategoris = [
        ['id' => 1, 'nama_kategori' => 'Battery'],
        ['id' => 2, 'nama_kategori' => 'Charger'],
        ['id' => 3, 'nama_kategori' => 'Accesories'],
    ];

    foreach ($kategoris as $kategori) {
        // Ini memastikan ID 1 pasti 'Battery', ID 2 pasti 'Charger', dst.
        Kategori::updateOrCreate(['id' => $kategori['id']], $kategori);
    }
}
}
