<?php

namespace App\Http\Controllers;

use App\Models\pcu;
use App\Models\pcuUser;
use Illuminate\Http\Request;

class PcuController extends Controller
{
    public function index(){
        $halaman = "eksplorasi";
        return view('page.newmisi', compact('halaman'));
    }

    public function pcu(){
        $data = Pcu::all();
        $halaman = "eksplorasi";
        return view('page.podcast',compact('halaman', 'data'));
    }

    public function pcuPost(Request $request){
        $request->validate([
            'nama' => 'required',
            'gugus' => 'required',
            'nourut' => 'required',
            'fakultas' => 'required',
            'angkatan' => 'required',
            'box1' => 'required',
            'box2' => 'required',
            'box3' => 'required',
            'box4' => 'required',
            'box5' => 'required',
            'box6' => 'required',
            'box7' => 'required',
            'box8' => 'required',
            'box9' => 'required',
            'box10' => 'required',
        ]);

        $request->only(
            'nama',
            'gugus',
            'nourut',
            'fakultas',
            'angkatan',
            'box1',
            'box2',
            'box3',
            'box4',
            'box5',
            'box6',
            'box7',
            'box8',
            'box9',
            'box10',
        );
        $kesalahan = 10;
        // ,,,,,,,5,4,
        if($request->box1 == 3){
            $kesalahan = $kesalahan -1;
        }
        if($request->box2 == 2){
            $kesalahan = $kesalahan -1;
        }
        if($request->box3 == 3){
            $kesalahan = $kesalahan -1;
        }
        if($request->box4 == 1){
            $kesalahan = $kesalahan -1;
        }
        if($request->box5 == 3){
            $kesalahan = $kesalahan -1;
        }
        if($request->box6 == 2){
            $kesalahan = $kesalahan -1;
        }
        if($request->box7 == 1){
            $kesalahan = $kesalahan -1;
        }
        if($request->box8 == 5){
            $kesalahan = $kesalahan -1;
        }
        if($request->box9 == 4){
            $kesalahan = $kesalahan -1;
        }
        if($request->box10 == 2){
            $kesalahan = $kesalahan -1;
        }

        $send = pcuUser::create([
            'nama' => $request->nama,
            'gugus' => $request->gugus,
            'nourut' => $request->nourut,
            'fakultas' => $request->fakultas,
            'angkatan' => $request->angkatan,
            'jwb1' => $request->box1,
            'jwb2' => $request->box2,
            'jwb3' => $request->box3,
            'jwb4' => $request->box4,
            'jwb5' => $request->box5,
            'jwb6' => $request->box6,
            'jwb7' => $request->box7,
            'jwb8' => $request->box8,
            'jwb9' => $request->box9,
            'jwb10' => $request->box10,
            'totalsalah' => $kesalahan,
        ]);

        if($send){
            return redirect()->back()->with('success', 'Anda Telah Berhasil Melakukan POWER CAPACITY UPS. Jumlah Kesalahan Anda adalah '.$kesalahan);  
        }else{
            return redirect()->back()->with('error', 'Terjadi kesalahan, data anda tidak terkirim. Mohon kirim ulang.'.$kesalahan);  
        }
    }

    public function detektif(){
        $halaman = "eksplorasi";
        return view('page.cp', compact('halaman'));
    }
    

    public function generasi(){
        $halaman = "eksplorasi";
        return view('page.rb', compact('halaman'));
    }
}
