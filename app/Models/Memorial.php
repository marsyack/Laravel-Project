<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    protected $fillable = [
        'nama',
        'hubungan',
        'tanggal_lahir',
        'tanggal_wafat',
        'foto',
        'cerita',
        'doa',
    ];
}