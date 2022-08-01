<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eksplorasi extends Model
{
    use HasFactory;

    protected $fillable=[
        'nama',
        'gugus',
        'nourut',
        'fakultas',
        'angkatan',
        'jwb1',
        'jwb2',
        'jwb3',
        'jwb4',
        'jwb5',
        'jwb6',
        'jwb7',
        'jwb8',
        'jwb9',
        'jwb10',
        'totalsalah',
    ];
}
