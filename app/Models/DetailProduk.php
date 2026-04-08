<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    protected $fillable = ['produk_id', 'kode_produk', 'nama_kategori', 'deskripsi_lengkap_produk', 'tipe', 'voltase', 'kapasitas', 'siklus_hidup'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
