<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function getImgUrlAttribute(): ?string
    {
        if (! $this->img) {
            return null;
        }

        if (str_starts_with($this->img, 'http://') || str_starts_with($this->img, 'https://')) {
            return $this->img;
        }

        if (str_starts_with($this->img, 'images/') || str_starts_with($this->img, '/images/')) {
            return asset(ltrim($this->img, '/'));
        }

        return Storage::url($this->img);
    }
}
