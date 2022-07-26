<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('fakultas')->delete();

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-ilmu-budaya',
          'nama' => 'Fakultas Ilmu Budaya',
          'singkatan'=> 'FIB',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Ilmu Budaya merupakan fakultas pertama di Universitas Udayana. Berdiri atas prakarsa Yayasan Fakultas-fakultas Nusa Tenggara yang diketuai oleh Letkol Minggoe dan Wakil Ketua I, Gubernur Sunda Kecil, Teuku Mochammad Daodsjah. Diremiskan oleh Presiden Pertama Negara Repbulik Indonesia yaitu Dr.Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Prijono pada tanggal 29 September 1958.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang terdapat di Fakultas Ilmu Budaya antara lain: Antropologi Budaya, Erkeologi, Ilmu Sejarah, Satra Bali, Sastra Inggris, Sastra Jepang, Sastra Jawa Kuno, dan Sastra Indonesia.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BPM FIB</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Ida Bagus Oka Garga D. <br>
                        Wakil Ketua : Ida Bagus Ratu B.M.B.P. <br>
                        Instagram&emsp;: @bpmfib.unud
                    </p>
                    </div>   
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FIB.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>SM FIB</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : Made Aji Surya Pratama <br>
                        Wakil Ketua 1: I Made Lila Madhava <br>
                        Wakil Ketua 2: Anak Agung Cahaya Trisna<br>
                        Instagram &emsp; : @smfib.unud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FIB.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>',
          'logo' => 'FIB.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-kedokteran',
          'nama' => 'Fakultas Kedokteran',
          'singkatan'=> 'FK',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Kedokteran Universitas Udayana (FK UNUD) tepatnya berdiri pada tahun 1962 dan merupakan salah satu bagian dari 13 Fakultas yang ada di bawah Universitas Udayana. Fakultas ini berlokasi di Denpasar (Pusat Kota Provinsi Bali) dan merupakan salah satu dari institusi pendidikan kedokteran yang memiliki kualitas yang tinggi dan dapat disejajarkan dengan institusi pendidikan kedokteran pada tingkat nasional dan ASEAN.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang terdapat di Fakultas Ilmu Budaya antara lain : Kedokteran Umum, Fisioterapi, Kedokteran Gigi, Psikologi, Ilmu Keperawatan, dan Kesehatan Masyarakat.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FK</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : I Made Dyanta Anwar <br>
                        Wakil Ketua 1: Putu Aprilyanti A. <br>
                        Wakil Ketua 2: Aurelius Filibertus N.V. 
                        <br>
                        Instagram &emsp; : @dpmfkunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FK.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div> 
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FK</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Hillary Sekarningrum O. <br>
                        Wakil Ketua  : Beyan Gervais de Liyis <br>
                        Instagram&emsp;: @bemfkunud
                    </p>
                    </div>   
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FK.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>  
                </div>',
          'logo' => 'FK.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-hukum',
          'nama' => 'Fakultas Hukum',
          'singkatan'=> 'FH',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Lahirnya Fakultas Hukum diawali oleh pemikiran dan usulan Perhimpunan Sarjana Hukum Indonesia (PERSAHI) Cabang Bali dalam rangka melakukan penggalian, pengembangan dan pembinaan nilai-nilai hukum adat Bali dan memperkaya khasanah hukum nasional. Pemikiran ini mendapat sambutan dan dukungan positif dari Presidium Universitas Udayana. Dalam rapatnya pada hari Selasa tanggal 7 Juli 1964, Presidium Universitas Udayana dengan para Dekan Fakultas di lingkungan Universitas Udayana membutuskan untuk membuka Fakultas Hukum dan Pengetahuan Masyarakat dalam lingkungan Universitas Udayana mulai tahun kuliah 1964/1965. Perwujudan hasil rapat ini lalu ditetapkan Panitia Persiapan Pembentukan Fakultas Hukum dan Pengetahuan Masyarakat dalam Surat Keputusan Presidium Universitas Udayana Nomor 933/Sek/X/UNUD/1964 (Lampiran 1) tertanggal 24 Juli 1964.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Hukum hanya memiliki 1 program studi yaitu Ilmu Hukum</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FH</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I Putu Reinaldy <br>
                        Wakil Ketua : Ni Made Intan Marheni <br>
                        Instagram&emsp;: @dpmfhunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FH.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FH</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Gilbert Kurniawan Oja <br>
                        Wakil Ketua : Gede Sudhana Yoga S.P <br>
                        Instagram&emsp;: @bemfhunud
                    </p>
                    </div>  
                    <div class="col-lg-6 mt-3 my-auto">
                        <img  src="../asset/fakultas/FH.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>
                </div>',
          'logo' => 'FH.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-teknik',
          'nama' => 'Fakultas Teknik',
          'singkatan'=> 'FT',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965 yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana adalah dalam rangka pelestarian, pengembangan khususnya pada kebudayaan Daerah Bali dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Teknik memiliki 7 program studi, yaitu Arsitektur, Teknik Elektro, Teknik Mesin, Teknik Sipil, Teknologi Informasi, Teknik Industri dan Teknik Lingkungan.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BPM FT</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Ida Bagus Trisna Windu <br>
                        Wakil Ketua : I G.N Awya Waharika M. <br>
                        Instagram&emsp;: @smft_unud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FT.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>SM FT</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Kadek Rudita Aprilian <br>
                        Wakil Ketua : I G.A. Bagus Diyantha S. <br>
                        Instagram&emsp;: @smft_unud
                    </p>
                    </div>  
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FT.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>   
                </div>',
          'logo' => 'FT.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-pertanian',
          'nama' => 'Fakultas Pertanian',
          'singkatan'=> 'FP',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Pertanian Universitas Udayana berdiri tahun 1965 atas prakarsa Rektor Universitas Udayana Prof. Dr. Ida Bagus Mantra dengan menghubungi Dr. Ir. I Gusti Bagus Teken dan Ir. Putu Djapa Winaya, M.Sc. Keduanya adalah staf dosen Institut Pertanian Bogor. Akhirnya, berdasarkan Keputusan Dirjen Dikti Nomor 102 Tanggal 2 September 1967 secara resmi dinyatakan berdirinya Fakultas Pertanian Universitas Udayana. Dekan pertama Fakultas Pertanian Universitas Udayana adalah Ir. Putu Djapa Winaya M.Sc.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang ada di Fakultas Pertanian antara lain : Agribisnis, Agroteknologi, dan Arsitektur Pertamanan.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : Anak Agung Istri Agung Pramesti <br>
                        Wakil Ketua 1: Krida Laksana Sababalat <br>
                        Wakil Ketua 2: I Gusti Ngurah Wahyu Arsadiarta<br>
                        Instagram &emsp; : @dpmfunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>  
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I Kadek Surya Dwi Merta <br>
                        Wakil Ketua : Ni Made Dwi Yunika <br>
                        Instagram&emsp;: @bemfpunud
                    </p>
                    </div>  
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>',
          'logo' => 'FP.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-ekonomi-bisnis',
          'nama' => 'Fakultas Ekonomi dan Bisnis',
          'singkatan'=> 'FEB',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Ekonomi dan Bisnis Universitas Udayana didirikan tahun 1967. Pada awal berdiri Fakultas FEB UNUD hanya diperkenankan untuk melaksanakan pendidikan Sarjana Muda. Pada tanggal 21 Juni 2013, berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 100A/UN14/HK/2013 tertanggal 21 Juni 2012, Fakultas Ekonomi Bisnis berubah nama menjadi Fakultas Ekonomi dan Bisnis.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang ada di Fakultas Eknomi dan Bisnis antara lain: Akuntansi (D3), Pemasaran (D3), Perpajakan (D3), Akuntansi (S1), Ekonomi Pembangunan (S1), Manajemen (S1).</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FEB</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : I Made Michael Wijana <br>
                        Wakil Ketua 1: I Made Pramana Sidartawan<br>
                        Wakil Ketua 2: I D.G. Agrasamdhani Oki Prameswara<br>
                        Wakil Ketua 3: I Wayan Dirsa Raditia<br>
                        Instagram &emsp; : @dpmfebunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FEB.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>SM FIB</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : Ida Bagus G. Prabawa Putra U.<br>
                        Wakil Ketua 1: I Gusti Ayu Widya Ari C. <br>
                        Wakil Ketua 2: I Made Sudarta <br>
                        Wakil Ketua 3: K. Ayu Trishantika Dewi <br>
                        Instagram &emsp; : @bemfebunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FEB.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>',
          'logo' => 'FEB.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-peternakan',
          'nama' => 'Fakultas Peternakan',
          'singkatan'=> 'FAPET',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Peternakan saat awal berdiri pada tahun 1962 bernama Fakultas Kedokteran Hewan dan Peternakan. Berdasarkan Keputusan Presiden No. 62 tahun 1982 tentang Organisasi Universitas Udayana, nama Fakultas Kedokteran Hewan dan Peternakan diubah menjadi Fakultas Peternakan. Dengan demikian sejak tahun 1982 nama Fakultas Peternakan ditetapkan sebagai pengganti nama Fakultas Kedokteran Hewan dan Peternakan. Fakultas Peternakan telah menjalin kerja sama dengan PT Charoen sejak 2019 sehingga memiliki teknologi close house dalam sistem pendidikannya.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Peternakan memiliki 1 program studi, yakni Ilmu Peternakan.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FAPET</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I Putu Gede Kresna Wirakusuma <br>
                        Wakil Ketua : Ni Kadek Rina Budiani <br>
                        Instagram&emsp;: @dpmkmfapetudayana
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FAPET.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>      
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FAPET</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Komang Trias Sonia Adini <br>
                        Wakil Ketua : I Gusti Ngurah A. Surya Nugraha <br>
                        Instagram&emsp;: @bemkmfapetunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FAPET.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>   
                </div>',
          'logo' => 'FAPET.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-matematika-dan-ilmu-pengetahuan-alam',
          'nama' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
          'singkatan'=> 'FMIPA',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Matematika dan Ilmu Pengetahuan Alam merupakan fakultas ke-8 yang berdiri pada tahun 1984. Fakultas MIPA dibentuk dalam beberapa tahap. Pada 1984 dibentuk Jurusan Kimia dan Fisika. Pada tahun 1985 dibentuk Jurusan Biologi, dilanjutkan dengan jurusan matematika pada tahun 2000 dan terakhir jurusan Farmasi diijinkan 2005. Pada tahun 2006, dibuka program studi baru yaitu program studi ilmu Komputer dimana penerimaan mahasiswa baru dimulai dari Tahun Ajaran 2006/2007.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Matematika dan Ilmu Pengetahuan Alam memiliki 6 program studi, yaitu Matematika, Kimia, Biologi, Fisika, Farmasi dan Ilmu Komputer/Teknik Informatika.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BPM FMIPA</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I Nyoman Bryan Andhika <br>
                        Wakil Ketua : Felisitas Meli Podhi<br>
                        Instagram&emsp;: @bpmfmipaunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FMIPA.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>      
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FMIPA</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Kadek Nanda Banyu Permana<br>
                        Wakil Ketua : Rut Winda Tamariska <br>
                        Instagram&emsp;: @bemfmipaunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FMIPA.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>   
                </div>',
          'logo' => 'FMIPA.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-kedokteran-hewan',
          'nama' => 'Fakultas Kedokteran Hewan',
          'singkatan'=> 'FH',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Pada awal berdirinya Universitas Udayana didukung oleh empat fakultas, yakni Fakultas Sastra (FS). Fakultas Kedokteran (FK), Fakultas Kedokteran Hewan dan Peternakan (FKHP), Fakultas Keguruan dan Ilmu Pendidikan (FKIP). Pada saat itu FKHP UNUD hanya membina bidang ilmu Peternakan saja, dan pada tahun 1978 baru terbentuk Jurusan Kedokteran Hewan. Berdirinya akultas Keodkteran Hewan pada Universitas Udayana dinyakan dalam Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 204/0/1997 pada tanggal 22 Agustus 1997</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Peternakan memiliki 1 program studi, yaitu Profesi Dokter Hewan.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FKH</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I N. Surya Tri Hartaputera <br>
                        Wakil Ketua : Yustina Septi Dyanitha <br>
                        Instagram&emsp;: @dpmfkhunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FKH.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FKH</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: I Wayan Chandra Dharmawan<br>
                        Wakil Ketua : Luh Made Nanda Ayuni S.<br>
                        Instagram&emsp;: @bemfkhunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FKH.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>',
          'logo' => 'FKH.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-teknologi-pertanian',
          'nama' => 'Fakultas Teknologi Pertanian',
          'singkatan'=> 'FTP',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Pengembangan bidang ilmu Teknologi Pertanian di Universitas Udayana dimulai sejak tahun 1962 yang dirintis oleh bagian Teknologi Hasil Ternak, akultas Kedokteran Hewan dan Peternakan (FKHP) yang sekarang bernama Fakultas Peternakan (FAPET). ATas petunjuk dan persetujuan Direktorat Jenderal Pendidikan Tinggi (Ditjen DIKTI), Fakultas Teknologi Pertanian (FTP) dapat didirikan berdasarkan Surat Keputusan Rektor Universitas Udayana tertanggal 7 Oktober 2004 No.271.A/J14/PR.01.10/2004.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Teknologi Pertanian memiliki 3 program studi, yaitu Ilmu dan Teknologi Pangan, Teknologi Industri Pertanian, Teknik Pertanian dan Biosistem</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BPM FTP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Ni Luh Ketut A. Gayatri Pradnya A.<br>
                        Wakil Ketua : I Putu Karisma Yogi <br>
                        Instagram&emsp;: @bpmftpunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FTP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FTP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Oliver Owen <br>
                        Wakil Ketua : Karmando Jaya Kusuma Ginting <br>
                        Instagram&emsp;: @bemftpunud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FTP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>',
          'logo' => 'FTP.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-pariwisata',
          'nama' => 'Fakultas Pariwisata',
          'singkatan'=> 'FPAR',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Pada awalnya Fakultas Pariwisata Universitas Udayana bernama Program Studi Ilmu Kepariwisataan (PSIK) Universitas Udayana berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 326/PT.17/1.01.12/1985 per tanggal 1 Mei 1985. Tanggal ini pula yang kemudian ditetapkan sebagai hari ulang tahun Fakultas Pariwisata. Dalam perkembangannya, PSIK Universitas Udayana mengalami perubahan status hingga pada tanggal 22 Juli 1989 sesuai dengan Surat Keputusan Pendidikan Tinggi Nomor 67/Kep/1989 menetapkan bahwa Program Studi Diploma 4 Pariwisata merupakan program studi antar fakultas di Universitas Udayana</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang terdapat di Fakultas Pariwisata antara lain : D4 Pariwisata, Destinasi Pariwisata, dan Industri Perjalanan Wisata</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BPM FPAR</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : I Kadek Dilam Arnawa <br>
                        Wakil Ketua 1: I Made Wesya Putra Ari Yadnya <br>
                        Wakil Ketua 2: I Gusti Putu Raja Darmadi <br>
                        Instagram &emsp; : @bemfpar_unud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FPAR.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div> 
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FPAR</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : Ketut Indrawan Adiguna <br>
                        Wakil Ketua 1: I Made Dimas Mahendra Widyana <br>
                        Wakil Ketua 2: I Kadek Erik Widyana<br>
                        Instagram &emsp; : @bemfpar_unud
                    </p>
                    </div>    
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FPAR.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div> 
                </div>',
          'logo' => 'FPAR.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-ilmu-sosial-dan-ilmu-politik',
          'nama' => 'Fakultas Ilmu Sosial dan Politik',
          'singkatan'=> 'FISIP',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) Universitas Udayana berdiri pada 28 Juni 2009. FISIP merupakan fakultas ke-12 di lingkungan Universitas Udayana. Penggagas awal dan sekaligus sebagai pendiri Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) di Universitas Udayana adalah Prof. Dr. dr. I Made Bakta, Sp.PD (KHOM). Sebagai lembaga pendidikan tertua dan terbesar di Bali, Universitas Udayana ingin menunjukkan kepedulian yang tinggi atas persoalan-persoalan sosial dan politik yang berkembang dalam masyarakat yang dilakukan dengan mencetak sumber daya manusia yang unggul dalam bidang ilmu sosial dan ilmu politik, yang tidak hanya mampu memahami dan kritis terhadap teori dan konsep semata, namun juga mampu memberikan solusi yang bermanfaat bagi kesejahteraan hidup masyarakat secara luas.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Ilmu Sosial dan Ilmu Politik memiliki program studi antara lain: Sosiologi, Hubungan Internasional, Administrasi Negara, Iimu Komunikasi, Ilmu Politik dan D3 Perpustakaan.</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FISIP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp; &emsp;&emsp; : Ni Kadek Gita Ginanti Mahayani <br>
                        Wakil Ketua : I Wayan Baskara Agastya <br>
                        Instagram&emsp;: @dpmfisipunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FISIP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>     
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FISIP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Komang Gelen Stalin<br>
                        Wakil Ketua : I Dewa Gede Taksusepta Reksa A.<br>
                        Instagram&emsp;: @bemfisipunud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FISIP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>   
                </div>',
          'logo' => 'FISIP.png',
        ]);

        \DB::table('fakultas')->insert([
          'slug' => 'fakultas-kelautan-dan-perikanan',
          'nama' => 'Fakultas Kelautan dan Perikanan',
          'singkatan'=> 'FKP',
          'keterangan' => '<p class="text-detail aos-init aos-animate" data-aos="fade-right">Fakultas Kelautan dan Perikanan (FKP) merupakan fakultas yang berperan dalam pengembangan Ilmu Pengetahuan dan Teknologi (IPTEK) serta menyiapkan sumber daya manusia yang memiliki kemampuan akademik di bidang ilmu kelautan dan perikanan Fakultas yang terletak di jalan Kampus Bukit Jimbaran ini merupakan Fakultas termuda di Universitas Udayana (UNUD) yang berdiri pada tanggal 10 Oktober 2011 sesuai dengan Surat Keputusan (SK) Rektor Nomor: 680/UN.14/HK/2011 tentang pendirian Fakultas Kelautan dan Per ikanan Universitas Udayana.</p>',
          'programstudi'=>' <p class="text-detail aos-init aos-animate" data-aos="fade-right">Program studi yang ada di Fakultas Kelautan dan Perikanan terdiri dari 2 Program Studi antara lain : Manajemen Sumber Daya Perairan dan Ilmu Kelautan</p>',
          'contact' => '<div class="row mt-3">
                    <div class="col-lg-6 mt-3 my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>DPM FKP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Julian Ichsana Argeswara <br>
                        Wakil Ketua : Nabila Lutfatul Hidayat <br>
                        Instagram&emsp;: @dpmfkp_unud
                    </p>
                    </div> 
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FKP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>  
                <div class="row mt-3">
                    <div class="col-lg-6  my-auto">
                    <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>BEM FKP</span></h3>
                    <p class="text-detail aos-init aos-animate" data-aos="fade-right">
                        Ketua &emsp;&emsp;&emsp;: Natasya Caterina <br>
                        Wakil Ketua : Yosua Rivaldo Alexander Sinaga <br>
                        Instagram&emsp;: @bemfkp_unud
                    </p>
                    </div>
                    <div class="col-lg-6 mt-3 my-auto">
                        <img src="../asset/fakultas/FKP.png" alt="Logo bpm" class="logo-bpm img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200" >
                    </div>    
                </div>',
          'logo' => 'FKP.png',
        ]);
    }
}
