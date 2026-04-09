<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'image',
        'description',
        'detail_intro',
        'detail_points',
        'side_image',
        'gallery',
        'recommendations',
    ];

    protected $casts = [
        'detail_points' => 'array',
        'gallery' => 'array',
        'recommendations' => 'array',
    ];
}
