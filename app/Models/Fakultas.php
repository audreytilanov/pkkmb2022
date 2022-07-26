<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable=[
        'slug', 'nama', 'singkatan','keterangan','programstudi','contact','logo'
    ];
}
