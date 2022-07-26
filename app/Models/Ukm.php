<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function prestasi(){
    //     return $this->belongsTo('App\Models\Prestasi', 'ukm_id');
    // }
}
