<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PkkmbCotroller extends Controller
{
    public function index(){
        return view('page.2022');
    }

    public function lembaga(){
        $data=DB::table('ormawas')->get();
        return view('page.2022lembaga', compact('data'));
    }
}
