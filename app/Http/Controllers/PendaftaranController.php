<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|unique:App\Models\Pendaftaran,email',
            'nama_lengkap' => 'required',
            'nim' => 'required|unique:App\Models\Pendaftaran,nim',
            'fakultas' => 'required',
            'prodi' => 'required',
            'hp' => 'required|string',
            'ukm' => 'required',
        ]);
            
        $send = Pendaftaran::create([
                'email' => $request->email,
                'nama_lengkap' => $request->nama_lengkap,
                'nim' => $request->nim,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'alamat_domisili' => $request->alamat_domisili,
                'hp' => $request->hp,
                'line' => $request->line,
                'ukm' => $request->ukm,
                'ukm2' => $request->ukm2,
                'ukm3' => $request->ukm3,
                'forum_agama' => $request->forum_agama,
                'paguyuban' => $request->paguyuban
            ]);

            
            // $request->session()->increment('count', $incrementBy = 2);

            if($send){
                return redirect()->back()->with('success', 'Pendaftaran Telah Berhasil :)');   
            }else{
                return redirect()->back()->with('error', 'Terjadi kesalahan, data anda tidak terkirim. Mohon kirim ulang.');  
            }
        }
    
}
