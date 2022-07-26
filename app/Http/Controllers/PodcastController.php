<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use App\Models\Podcast2;
use App\Models\Podcast3;
use App\Models\Podcast4;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function store(Request $request)
    {
        if ($request->has('form1')) {
        $kesalahan = 3;
        $request->validate([
            'nama' => 'required|string',
            'nogugus' => 'required',
            // 'klpgugus' => 'required',
            'jwb1' => 'required',
            'jwb2' => 'required',
            'jwb3' => 'required',
        ]);
        $list_jawaban = array('kondisi moodnya tidak baik','KONDISI MOODNYA TIDAK BAIK','Kondisi Moodnya Tidak Baik','Kondisi Moodnya tidak baik');

        $list_jawaban2 = array('Etika Berkomentar','Etika berkomentar','etika Berkomentar','ETIKA BERKOMENTAR');

        $list_jawaban3 = array('berkarya','BERKARYA','Berkarya');

        if(in_array($request->jwb1, $list_jawaban))
        {
            $kesalahan -=1;

        }
        if(in_array($request->jwb2, $list_jawaban2))
        {
            $kesalahan -=1;

        }

        if(in_array($request->jwb3, $list_jawaban3))
        {
            $kesalahan -=1;

        }
        // if(($request->jwb2) != "etika berkomentar"){
        //     // $request->session()->increment('count', $incrementBy = 1);
        //     $kesalahan +=1;
        // }

        // if(($request->jwb3) != "berkarya"){
        //     // $request->session()->increment('count', $incrementBy = 1);
        //     $kesalahan +=1;
        // }
            
            Podcast::create([
                    'nama' => $request->nama,
                    'nogugus' => $request->nogugus,
                    // 'klpgugus' => $request->klpgugus,
                    'jwb1' => $request->jwb1,
                    'jwb2' => $request->jwb2,
                    'jwb3' => $request->jwb3,
                    'totalsalah' => $kesalahan
                ]);
                
                // $request->session()->increment('count', $incrementBy = 2);

                return redirect()->route('podcast.input')->with('success', 'Anda Telah Berhasil Memasukkan Misi Pertama. Jumlah Kesalahan Anda adalah '.$kesalahan);   
        
        }

        if ($request->has('form2')) {
            $kesalahan = 4;
            $request->validate([
                'nama' => 'required|string',
                'nogugus' => 'required',
                // 'klpgugus' => 'required',
                'jwb1' => 'required',
                'jwb2' => 'required',
                'jwb3' => 'required',
                'jwb4' => 'required',
            ]);
            $list_jawaban = array('journey pribadi','Journey pribadi','Journey Pribadi', 'JOURNEY PRIBADI','journey Pribadi');

            $list_jawaban2 = array('enjoy the process',
            'Enjoy the Process','Enjoy the process','enjoy the Process','ENJOY THE PROCESS');

            $list_jawaban3 = array('Mensabotase','MENSABOTASE','mensabotase');

            $list_jawaban4 = array('Datang Sekarang','Datang sekarang','datang Sekarang','datang sekarang','DATANG SEKARANG');
    
            if(in_array($request->jwb1, $list_jawaban))
            {
                $kesalahan -=1;
    
            }
            if(in_array($request->jwb2, $list_jawaban2))
            {
                $kesalahan -=1;
    
            }
    
            if(in_array($request->jwb3, $list_jawaban3))
            {
                $kesalahan -=1;
    
            }

            if(in_array($request->jwb4, $list_jawaban4))
            {
                $kesalahan -=1;
    
            }
            // if(($request->jwb2) != "etika berkomentar"){
            //     // $request->session()->increment('count', $incrementBy = 1);
            //     $kesalahan +=1;
            // }
    
            // if(($request->jwb3) != "berkarya"){
            //     // $request->session()->increment('count', $incrementBy = 1);
            //     $kesalahan +=1;
            // }
                
                Podcast2::create([
                        'nama' => $request->nama,
                        'nogugus' => $request->nogugus,
                        // 'klpgugus' => $request->klpgugus,
                        'jwb1' => $request->jwb1,
                        'jwb2' => $request->jwb2,
                        'jwb3' => $request->jwb3,
                        'jwb4' => $request->jwb4,
                        'totalsalah' => $kesalahan
                    ]);
                    
                    // $request->session()->increment('count', $incrementBy = 2);
    
                    return redirect()->route('podcast.input')->with('success', 'Anda Telah Berhasil Memasukkan Misi Kedua. Jumlah Kesalahan Anda adalah '.$kesalahan);   
            
            }
            if ($request->has('form3')) {
                $kesalahan = 3;
                $request->validate([
                    'nama' => 'required|string',
                    'nogugus' => 'required',
                    // 'klpgugus' => 'required',
                    'jwb1' => 'required',
                    'jwb2' => 'required',
                    'jwb3' => 'required',
                ]);
                $list_jawaban = array('kepemilikan atau kepunyaan','Kepemilikan atau Kepunyaan','Kepemilikan Atau Kepunyaan','KEPEMILIKAN ATAU KEPUNYAAN',
                'kepemilikan atau Kepunyaan','Kepemilikan atau kepunyaan');
        
                $list_jawaban2 = array('kepercayaan yang diberikan','Kepercayaan yang Diberikan','Kepercayaan Yang Diberikan','KEPERCAYAAN YANG DIBERIKAN', 'Kepercayaan yang diberikan','kepercayaan yang Diberikan');
        
                $list_jawaban3 = array('omongan tapi dibuktikan','Omongan tapi Dibuktikan','Omongan Tapi Dibuktikan','OMONGAN TAPI DIBUKTIKAN','omongan tapi Dibuktikan','Omongan tapi dibuktikan');
        
                if(in_array($request->jwb1, $list_jawaban))
                {
                    $kesalahan -=1;
        
                }
                if(in_array($request->jwb2, $list_jawaban2))
                {
                    $kesalahan -=1;
        
                }
        
                if(in_array($request->jwb3, $list_jawaban3))
                {
                    $kesalahan -=1;
        
                }
                // if(($request->jwb2) != "etika berkomentar"){
                //     // $request->session()->increment('count', $incrementBy = 1);
                //     $kesalahan +=1;
                // }
        
                // if(($request->jwb3) != "berkarya"){
                //     // $request->session()->increment('count', $incrementBy = 1);
                //     $kesalahan +=1;
                // }
                    
                    Podcast3::create([
                            'nama' => $request->nama,
                            'nogugus' => $request->nogugus,
                            // 'klpgugus' => $request->klpgugus,
                            'jwb1' => $request->jwb1,
                            'jwb2' => $request->jwb2,
                            'jwb3' => $request->jwb3,
                            'totalsalah' => $kesalahan
                        ]);
                        
                        // $request->session()->increment('count', $incrementBy = 2);
        
                        return redirect()->route('podcast.input')->with('success', 'Anda Telah Berhasil Memasukkan Misi Ketiga. Jumlah Kesalahan Anda adalah '.$kesalahan);   
                
                }

                
                if ($request->has('form4')) {
                    $kesalahan = 6;
                    $request->validate([
                        'nama' => 'required|string',
                        'nogugus' => 'required',
                        // 'klpgugus' => 'required',
                        'jwb1' => 'required',
                        'jwb2' => 'required',
                        'jwb3' => 'required',
                        'jwb4' => 'required',
                        'jwb5' => 'required',
                        'jwb6' => 'required',
                    ]);
                    $list_jawaban = array('mahasiswa','Mahasiswa','MAHASISWA');
            
                    $list_jawaban2 = array('masyarakat','Masyarakat','MASYARAKAT');
            
                    $list_jawaban3 = array('interaktor', 'Interaktor','INTERAKTOR');
    
                    $list_jawaban4 = array('pemerintah dan masyarakat','Pemerintah dan masyarakat','pemerintah dan Masyarakat','Pemerintah dan Masyarakat','Pemerintah Dan Masyarakat','PEMERINTAH DAN MASYARAKAT');
                    
                    $list_jawaban5 = array('masyarakat sosial ini','Masyarakat sosial ini','masyarakat sosial Ini','Masyarakat sosial Ini','Masyarakat Sosial Ini','MASYARAKAT SOSIAL INI');
    
                    $list_jawaban6 = array('keapatisan mahasiswa', 'Keapatisan mahasiswa','keapatisan Mahasiswa','Keapatisan Mahasiswa','KEAPATISAN MAHASISWA');
            
                    if(in_array($request->jwb1, $list_jawaban))
                    {
                        $kesalahan -=1;
            
                    }
                    if(in_array($request->jwb2, $list_jawaban2))
                    {
                        $kesalahan -=1;
            
                    }
            
                    if(in_array($request->jwb3, $list_jawaban3))
                    {
                        $kesalahan -=1;
            
                    }
    
                    if(in_array($request->jwb4, $list_jawaban4))
                    {
                        $kesalahan -=1;
            
                    }
    
                    if(in_array($request->jwb5, $list_jawaban5))
                    {
                        $kesalahan -=1;
            
                    }
    
                    if(in_array($request->jwb6, $list_jawaban6))
                    {
                        $kesalahan -=1;
            
                    }
                    // if(($request->jwb2) != "etika berkomentar"){
                    //     // $request->session()->increment('count', $incrementBy = 1);
                    //     $kesalahan +=1;
                    // }
            
                    // if(($request->jwb3) != "berkarya"){
                    //     // $request->session()->increment('count', $incrementBy = 1);
                    //     $kesalahan +=1;
                    // }
                        
                        Podcast4::create([
                                'nama' => $request->nama,
                                'nogugus' => $request->nogugus,
                                // 'klpgugus' => $request->klpgugus,
                                'jwb1' => $request->jwb1,
                                'jwb2' => $request->jwb2,
                                'jwb3' => $request->jwb3,
                                'jwb4' => $request->jwb4,
                                'jwb5' => $request->jwb5,
                                'jwb6' => $request->jwb6,
                                'totalsalah' => $kesalahan
                            ]);
                            
                            // $request->session()->increment('count', $incrementBy = 2);
            
                            return redirect()->route('podcast.input')->with('success', 'Anda Telah Berhasil Memasukkan Misi Keempat. Jumlah Kesalahan Anda adalah '.$kesalahan);   
                    
                    }
    }
}
