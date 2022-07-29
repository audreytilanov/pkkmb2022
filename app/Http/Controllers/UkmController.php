<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use App\Models\prestasi;

class UkmController extends Controller
{
    public function index(){
        $halaman = "lembaga";
        return view('page.ukm', [
            "title" => "UKM",
            "ukm"=> ukm::all()
        ],compact('halaman'));
    }

    public function show(Ukm $detail){
        $halaman = "lembaga";

        return view('page.ormawa.detail-ukm',[
            "title"=> "Detail UKM",
            "ukm" => $detail
        ], compact('halaman'));
    }
}
