<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KontakSales extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'area',
        'no_whatsapp',
        'email',
        'foto',
    ];
}
