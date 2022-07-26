<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nama_lengkap',
        'nim',
        'fakultas',
        'prodi',
        'agama', 
        'alamat',
        'alamat_domisili',
        'hp',
        'line',
        'ukm',
        'ukm2',
        'ukm3',
        'forum_agama',
        'paguyuban'
    ];

}
