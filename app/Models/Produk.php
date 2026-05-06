<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['kategori_id', 'kode_produk', 'nama_produk', 'img', 'deskripsi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function detailProduk()
    {
        return $this->hasOne(DetailProduk::class);
    }

    public function getImgUrlAttribute()
    {
        return $this->img ? asset($this->img) : null;
    }
}
