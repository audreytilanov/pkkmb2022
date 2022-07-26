<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use DB;
use Illuminate\Routing\Controller;

class FakultasController extends Controller
{
    public function index(){
        $data=DB::table('fakultas')->get();
        return view('page.fakultas',compact('data'));
    }

    public function show($id){
        $data=DB::table('fakultas')->where('id', $id)->first();
        return view('page.detail-fakultas',compact('data'));
    }
}
