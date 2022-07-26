<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'email' => 'required|string',
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'alamat_domisili' => 'required',
            'hp' => 'required|string',
            'line' => 'required',
            'ukm' => 'required',
            'forum_agama' => 'required',
            'paguyuban' => 'required',
            
        ]);
            
        Pendaftaran::create([
                'email' => $request->email,
                'nama_lengkap' => $request->nama_lengkap,
                // 'klpgugus' => $request->klpgugus,
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

            return redirect()->route('pendaftaran.input')->with('success', 'Pendaftaran Telah Berhasil :)');   
        
        }
    
}
