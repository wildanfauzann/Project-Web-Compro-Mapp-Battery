<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'kategori_artikel',
        'slug',
        'label',
        'tag',
        'judul',
        'deskripsi',
        'gambar_utama',
        'galeri',
    ];

    protected $casts = [
        'galeri' => 'array',
    ];

    protected $appends = ['title', 'headline', 'excerpt', 'description', 'company', 'image', 'gallery'];

    public function getTitleAttribute() { return $this->judul; }
    public function getHeadlineAttribute() { return $this->judul; }
    public function getExcerptAttribute() { return $this->deskripsi; }
    public function getDescriptionAttribute() { return $this->deskripsi; }
    public function getCompanyAttribute() { return $this->label; }
    public function getImageAttribute() { 
        return asset($this->gambar_utama); 
    }
    
    public function getGalleryAttribute() { 
        if (is_array($this->galeri)) {
            return array_map(function($img) { 
                return asset($img); 
            }, $this->galeri);
        }
        return [];
    }
}
