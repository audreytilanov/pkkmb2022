<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcu extends Model
{
    use HasFactory;

    protected $fillable=[
        'pertanyaan',
            'a',
            'b',
            'c',
            'd',
            'e',
            'jwb1',
            'jwb2',
            'jwb3',
            'jwb4',
            'jwb0',
            'totalsalah',
    ];
}
