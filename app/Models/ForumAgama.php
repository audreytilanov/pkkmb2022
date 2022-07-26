<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumAgama extends Model
{
    protected $fillable=[
        'slug', 'nama','keterangan','contact','logo'
    ];
}
