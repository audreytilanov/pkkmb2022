<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Ormawa;

class OrmawaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('ormawas')->delete();

      // Fakultas

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-ilmu-budaya',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-kedokteran',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-hukum',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-teknik',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-pertanian',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-ekonomi-bisnis',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-peternakan',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-matematika-dan-ilmu-pengetahuan-alam',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-kedokteran-hewan',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-teknologi-pertanian',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-pariwisata',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-ilmu-sosial-dan-ilmu-politik',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'fakultas-kelautan-dan-perikanan',
        'jenis_ormawa' => 1,
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

      \DB::table('ormawas')->insert([
        'slug' => 'imsu',
        'jenis_ormawa' => 2,
        'nama' => 'IMSU (Ikatan Mahasiswa Sumatera Utara',
        'singkatan'=> 'IMSU',
        'keterangan' => 'IMSU atau Ikatan Mahasiswa Sumatera Utara merupakan salah satu paguyuban yang menaungi kelompok mahasiswa yang berasal dari Sumatera Utara di lingkungan Universitas Udayana. ',
        'programstudi'=>'',
        'contact' => 'CP : Ketua Imsu (carlos) 081383409981',
        'logo' => 'IMSU.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'ikkm',
        'jenis_ormawa' => 2,
        'nama' => 'IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)',
        'singkatan'=> 'IKMM',
        'keterangan' => 'Ikatan Keluarga Mahasiswa Minang Bali (IKMM Bali) adalah paguyuban yang anggotanya terdiri dari mahasiswa yang tengah menempuh perkuliahan di Bali, yang berasal dari suku minangkabau atau memiliki keturunan darah minang dan juga orang-orang yang tempat tinggalnya berasal dari sumatera barat, riau dan jambi. ',
        'programstudi'=>'',
        'contact' => 'CP IKMM : 082288703169 (WA)/ @614nffuy (Line)<br>Instagram : @ikmm.bali',
        'logo' => 'IKMM.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'pamanahan',
        'jenis_ormawa' => 2,
        'nama' => 'PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)',
        'singkatan'=> 'PAMANAHAN',
        'keterangan' => 'PAMANAHAN atau Paguyuban Mahasiswa Tanah Pasundan Bali merupakan salah satu paguyuban yang menaungi kelompok mahasiswa yang berasal dari Jawa Barat di lingkungan Universitas Udayana.',
        'programstudi'=>'',
        'contact' => 'Instagram: pamanahanbali <br> Email: pamanahan91@gmail.com <br> CP: 08111352724 (felisha)',
        'logo' => 'PMNHN.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'gajayana',
        'jenis_ormawa' => 2,
        'nama' => 'GAJAYANA (Keluarga Jawa Udayana',
        'singkatan' => 'GAJAYANA',
        'keterangan' => 'Paguyuban GAJAYANA adalah perkumpulan mahasiswa yang berasal dari wilayah Provinsi Jawa Timur, Jawa Tengah, dan Yogyakarta.',
        'programstudi'=>'',
        'contact' => 'CP Gajayana : +62 881-0375-7752 (Ike Rahayu) <br>Social Media : Instagram @gajayanabali',
        'logo' => 'GAJAYANA.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'kmossak',
        'jenis_ormawa' => 2,
        'nama' => 'KMOSSAK (Komoenitas Mahasiswa Sasak)',
        'singkatan' => 'KMOSSAK',
        'keterangan' => 'Paguyuban KMOSSAK adalah salah satu paguyuban yang ada di Universitas Udayana yang merupakan perkumpulan mahasiswa khususnya berasal dari Lombok yang berkuliah di Pulau Bali, Paguyuban ini dibuat dengan tujuan saling menyatukan dan membantu sesama mahasiswa Lombok maupun luar daerah yang membutuhkan bantuan terutama yang baru pertama kali ke Bali.',
        'programstudi'=>'',
        'contact' => 'CP Organisasi KMOSSAK: 087755099723 <br>
        Social Media : Instagram @kmossakbali',
        'logo' => 'KMOSSAKA.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'pmbd',
        'jenis_ormawa' => 2,
        'nama' => 'PMBD  (Perhimpunan Mahasiswa Bima Dompu-Bali)',
        'singkatan' => 'PMBD',
        'keterangan' => 'Perhimpunan Mahasiswa Bima Dompu atau biasa di singkat PMBD Bali ialah paguyuban atau organisasi mahasiswa Bima dan Dompu wilayah bali yang berasaskan kekeluargaan, PMBD memiliki Motto "Maja Labo Dahu Nggahi Rawi Pahu".',
        'programstudi'=>'',
        'contact' => 'CP : 08533891769 (Agus) <br>
        Social Media : Instagram @pmbd_bali',
        'logo' => 'PMBD.png',
      ]);



      \DB::table('ormawas')->insert([
        'slug' => 'ikami',
        'jenis_ormawa' => 2,
        'nama' => 'IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)',
        'singkatan' => 'IKAMI',
        'keterangan' => 'IKAMI Sulsel rumah kita, bangunlah dengan cinta. Rumah bagi para mahasiswa pelajar asal maupun keturunan Sulawesi Selatan. Berdiri sejak 1961 lalu tersebar di seluruh Indonesia sehingga menjadikan IKAMI Sulsel adalah organisasi mahasiswa daerah terbesar di Indonesia.',
        'programstudi'=>'',
        'contact' => 'CP IKAMI : 081947626567  (Ridwan) <br>
        Social Media : Instagram @ikamibali',
        'logo' => 'IKAMI.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'IMMAPA',
        'jenis_ormawa' => 2,
        'nama' => 'IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)',
        'singkatan' => 'IMMAPA',
        'keterangan' => 'Paguyuban GAJAYANA adalah perkumpulan mahasiswa yang berasal dari wilayah Provinsi Jawa Timur, Jawa Tengah, dan Yogyakarta.',
        'programstudi'=>'',
        'contact' => 'CP Gajayana : +62 881-0375-7752 (Ike Rahayu) <br>
        Social Media : Instagram @gajayanabali',
        'logo' => 'IMMAPA.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'fpmhd',
        'jenis_ormawa' => 3,
        'nama' => 'FPMHD  (Forum Persaudaraan Mahasiswa Hindu Dharma Universitas Udayana)',
        'singkatan' => 'FPMHD',
        'keterangan' => 'Forum Persaudaraan Mahasiswa Hindu Dharma Universitas Udayana yang disingkat FPMHD-Unud merupakan organisasi mahasiswa Hindu dharma ditingkat Universitas Udayana yang dibentuk pada tanggal 28 Juni 1992.',
        'programstudi'=>'',
        'contact' => 'CP : +62 878-6181-5138 <br>
        Instagram: @fpmhd_unud',
        'logo' => 'FPMHD.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'KBMK',
        'jenis_ormawa' => 3,
        'nama' => 'KBMK (Keluarga Besar Mahasiswa Kristen Universitas Udayana)',
        'singkatan' => 'KBMK',
        'keterangan' => 'KBMK UNUD (Keluarga Besar Mahasiswa Kristen Universitas Udayana) merupakan organisasi Kristen yang didirikan sebagai salah satu wadah pertumbuhan iman yang berasaskan Alkitab. KBMK Unud ada untuk mempersiapkan mahasiswa Kristen Protestan menjadi alumni yang takut akan Tuhan dan dapat menjadi berkat dalam keluarga, gereja, bangsa dan negara, serta dunia',
        'programstudi'=>'',
        'contact' => 'CP : 082399625257 (Friska) <br>
        Instagram: @kbmkunud',
        'logo' => 'Protestan.png',
      ]);
      

      \DB::table('ormawas')->insert([
        'slug' => 'fpmi',
        'jenis_ormawa' => 3,
        'nama' => 'FPMI (Forum Persatuan Mahasiswa Islam)',
        'singkatan' => 'FPMI',
        'keterangan' => 'Sesuai dengan namanya yakni forum persatuan mahasiswa islam universitas udayana FPMI mempunyai tugas sebagai organisasi tempat berkumpulnya mahasiswa muslim yang ada di Udayana untuk bersama-sama mempelajari dan menyebarkan nilai-nilai islam dan menjadi sebuah keluarga besar mahasiswa muslim di Udayana. ',
        'programstudi'=>'',
        'contact' => 'CP : +62 821-4557-1094  (Dimas) <br>
        Instagram: @ukkifpmiunud',
        'logo' => 'FPMI.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'kmk',
        'jenis_ormawa' => 3,
        'nama' => 'KMK (Keluarga Mahasiswa Katolik St.Albertus Agung Universitas Udayana)',
        'singkatan' => 'KMK',
        'keterangan' => 'KMK atau Keluarga Mahasiswa Katolik St. Albertus Agung Universitas Udayana merupakan salah satu forum agama yang menanungi kelompok mahasiswa beragama Katolik di lingkungan Universitas Udayana. ',
        'programstudi'=>'',
        'contact' => 'CP : 081238123746  (Yoseph) <br>
        Instagram: @kmkst.albertusagung',
        'logo' => 'KMK.png',
      ]);

      \DB::table('ormawas')->insert([
        'slug' => 'fkmbu',
        'jenis_ormawa' => 3,
        'nama' => 'FKMBU (Forum Keluarga Mahasiswa Buddhis Universitas Udayana)',
        'singkatan' => 'FKMBU',
        'keterangan' => 'Forum Keluarga Mahasiswa Buddhis Universitas Udayana atau FKMBU merupakan organisasi dibawah naungan Universitas Udayana yang mewadahi seluruh mahasiswa dan civitas akademika Buddhis di lingkungan Universitas Udayana. ',
        'programstudi'=>'',
        'contact' => 'CP : 081246703520  (Dessy Ratna) <br>
        Instagram: @fkmbu_unud',
        'logo' => 'FKMBU.png',
      ]);
    }
}
