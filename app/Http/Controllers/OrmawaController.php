<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ormawa;
use DB;

class OrmawaController extends Controller
{
    public function index(){
        $data=DB::table('ormawas')->get();
        return view('page.ormawa',compact('data'));
    }

    public function show($id){
        $data=DB::table('ormawas')->where('id', $id)->first();
        return view('page.detail-fakultas',compact('data'));
    }
}
