<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nogugus',
        // 'klpgugus',
        'jwb1',
        'jwb2',
        'jwb3',
        'totalsalah'
    ];
}
