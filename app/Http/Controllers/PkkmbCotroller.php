<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PkkmbCotroller extends Controller
{
    public function index(){
        $halaman = "beranda";
        return view('page.2022',compact('halaman'));
    }

    public function lembaga(){
        $halaman = "lembaga";

        $data=DB::table('ormawas')->get();
        return view('page.2022lembaga', compact('data','halaman'));
    }

    public function faq(){
        $halaman = "faq";

        return view('page.faq', compact('halaman'));
    }
}
