<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukm;
use App\Models\prestasi;

class UkmController extends Controller
{
    public function index(){
        return view('page.ukm', [
            "title" => "UKM",
            "ukm"=> ukm::all()
        ]);
    }

    public function show(Ukm $detail){
        return view('page.ormawa.detail-ukm',[
            "title"=> "Detail UKM",
            "ukm" => $detail
        ]);
    }
}
