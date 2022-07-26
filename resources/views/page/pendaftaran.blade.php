<?php
$page="Pendaftaran";
?>

@extends('layouts.template')
@section('content')
<style>
  #judulmisi{
    margin: 0;
    /* padding: 0; */
    height: 100vh;
    background: url("../asset/umum/bg-penjelasan.jpg");
    background-attachment: fixed;
    text-align:center;
}

.detpodcast h1{
    margin-top: 10%;
    font-size: 20px;
    width: 100%;
    color: #fff!important;
    font-weight:650;
    font-family: Poppins;
}

.detpodcast .h1misi{
    font-size: 40px;
    margin-bottom:10px;
    width: 100%;
    /* color: #fff!important; */
    font-weight:650;
    font-family: Poppins;
}
    #absenquiz input{
    width: 100%;
    background: 
        linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
    background-color: #fcfcfc;
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    background-color: transparent;
    border: none;
    padding: 10px;
  }

  select {
    width: 100%!important;
    background: 
        linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
    background-color: #fcfcfc;
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    background-color: transparent;
    border: none;
    padding: 10px;
    margin-bottom: 15px
  }

  #absenquiz{
    display: grid;
    align-content: center;
    text-align: center;
}
input[type=submit]:hover{
    background-color: #025a0f;
    color: white!important;
    /* border: 4px solid rgb(255, 146, 146); */
    transition: 0.3s ease-in-out;
}
input[type=submit]{
    float: right;
    position: relative;
    display: inline-block;
    width: 30%;
    background: #fff;
    border: 4px solid rgba(255, 255, 255, 0);
    font-weight: bold;
    color: #fff;
    background-color: #31863e;
    text-decoration: none;
    padding: 10px 30px;
    margin-top: 20px;
    text-align: center;
    margin-bottom: -40px;
}

@media only screen and (min-width: 576px) and (max-width:767.98px){ 
  select{
    font-size: 25px;
    width: 100%!important;
  }
  #absenquiz input{
    width: 100%;
    font-size: 25px;
  }

  .detpodcast h1{

    font-size: 17px;

}

.detpodcast .h1misi{
    font-size: 33px;
  }
  
}

@media only screen and (min-width: 0px) and (max-width:575.98px){ 
  select{
    font-size: 20px;
    width: 100%!important;
  }

  #absenquiz input{
    width: 100%;
    font-size: 20px;
  }
  input[type=submit] {
    width: 40%;
  }
  .detpodcast h1{

font-size: 17px;

}

.detpodcast .h1misi{
font-size: 35px;
}
    
}
</style>
<section id="judulmisi">
  <div class="container">
      <div class="detpodcast">
        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{!! \Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <h1 data-aos="zoom-in"><span class="h1misi">Bagi Mahasiswa Baru yang ingin mendaftar UKM, Forum Agama, dan Paguyuban Daerah dapat langsung mendaftar pada contact person sesuai pilihan yang dapat diakses pada <a href="/ormawa">ormawa</a> </span><!--Pendaftaran Unit Kegiatan Mahasiswa, Forum Agama, dan Paguyuban Daerah --></h1>
            <!-- <hr style="color: white;border:3px solid white;">
            <br>Penjelasan selengkapnya tentang UKM, Forum Agama, dan Paguyuban Daerah dapat diakses pada menu <u></u><span style="color:darkorange;"><a href="/ormawa">ormawa</a></span> -->
      </div>
  </div>
</section>
   
<!-- <section class="container">
<form method="POST" action="{{ route('pendaftaran.input') }}">
    @csrf

    
    {{-- @method('PUT') --}}
    <div id="absenquiz">
        <input data-aos="fade-up" type="text" placeholder="Email" name="email" required><br>
        <input data-aos="fade-up" type="text" placeholder="Nama Lengkap" name="nama_lengkap" required><br>
        <input data-aos="fade-up"type="text" placeholder="NIM" name="nim" required><br>        
        <select name="fakultas" data-aos="fade-up" required>
          <option value="" disabled selected>Fakultas</option>
          <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
          <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
          <option value="Fakultas Peternakan">Fakultas Peternakan</option>
          <option value="Fakultas Hukum">Fakultas Hukum</option>

          <option value="Fakultas Teknik">Fakultas Teknik</option>
          <option value="Fakultas Pertanian">Fakultas Pertanian</option>
          <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
          <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>

          <option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
          <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
          <option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
          <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
          <option value="Fakultas Kelautan dan Perikanan">Fakultas Kelautan dan Perikanan</option>
        </select>
        <input data-aos="fade-up" type="text" placeholder="Program Studi" name="prodi" required><br>
        <input data-aos="fade-up" type="text" placeholder="Agama" name="agama" required><br>
        <input data-aos="fade-up" type="text" placeholder="Alamat Asal" name="alamat" required><br>
        <input data-aos="fade-up" type="text" placeholder="Alamat Domisili" name="alamat_domisili" required><br>
        <input data-aos="fade-up" type="text" placeholder="Nomor Whatsapp" name="hp" required><br>
        <input data-aos="fade-up" type="text" placeholder="ID Line" name="line" required><br>


        <select name="ukm" required data-aos="fade-up" required>
          <option value="" disabled selected>Pilihan UKM Ke-1 <span>*</span></option>
          <option value="PPS BETAKO MERPATI PUTIH">PPS BETAKO MERPATI PUTIH</option>
          <option value="BOLA BASKET">BOLA BASKET</option>
          <option value="PERISAI DIRI (PD)">PERISAI DIRI (PD)</option>
          <option value="SEPAK BOLA/FUTSAL">SEPAK BOLA/FUTSAL</option>
          <option value="KKI">KKI</option>
          <option value="GATE BALL">GATE BALL</option>
          <option value="WUSHU">WUSHU</option>
          <option value="TAEKWONDO">TAEKWONDO</option>
          <option value="BADMINTON">BADMINTON</option>
          <option value="CATUR">CATUR</option>
          <option value="MARCHING BAND UNIVERSITAS UDAYANA (MBU)">MARCHING BAND UNIVERSITAS UDAYANA (MBU)</option>
          <option value="KESENIAN">KESENIAN</option>
          <option value="TEATER OROK NOCENG">TEATER OROK NOCENG</option>
          <option value="UDAYANA FOCUS">UDAYANA FOCUS</option> 
          <option value="KOPERASI MAHASISWA (KOPMA)">KOPERASI MAHASISWA (KOPMA)</option>
          <option value="KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)">KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)</option>
          <option value="PERS MAHASISWA (PERSMA) 'AKADEMIKA'">PERS MAHASISWA (PERSMA) "AKADEMIKA"</option>
          <option value="RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana">RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana</option>
          <option value="MAHASISWA PENCINTA ALAM (MAPALA) 'WANAPRASTHA DHARMA'">MAHASISWA PENCINTA ALAM (MAPALA) "WANAPRASTHA DHARMA"</option>
          <option value="PRAMUKA">PRAMUKA</option>
          <option value="UYEC">UYEC (Udayana Young Entrepreneur Community)</option> 
          <option value="Weimana">Weimana</option> 
          <option value="ROBOTIC OF TECHNOLOGY (ROBOTEC)">ROBOTIC OF TECHNOLOGY (ROBOTEC)</option>
          <option value="FORUM GENERASI BIDIKMISI UDAYANA (GBU)">FORUM GENERASI BIDIKMISI UDAYANA (GBU)</option>
          <option value="UDS (Udayana Debating Society)">UDS (Udayana Debating Society)</option>
          <option value="(USC) Udayana Secience Club">(USC) Udayana Secience Club</option>
          <option value="Udayana JEGEG BAGUS">Udayana JEGEG BAGUS</option>
          <option value="PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT">PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT</option>
          <option value="IAAS LC">IAAS LC</option>
        </select>


        <select name="ukm2" data-aos="fade-up">
          <option value="" disabled selected>Pilihan UKM Ke-2</option>
          <option value="PPS BETAKO MERPATI PUTIH">PPS BETAKO MERPATI PUTIH</option>
          <option value="BOLA BASKET">BOLA BASKET</option>
          <option value="PERISAI DIRI (PD)">PERISAI DIRI (PD)</option>
          <option value="SEPAK BOLA/FUTSAL">SEPAK BOLA/FUTSAL</option>
          <option value="KKI">KKI</option>
          <option value="GATE BALL">GATE BALL</option>
          <option value="WUSHU">WUSHU</option>
          <option value="TAEKWONDO">TAEKWONDO</option>
          <option value="BADMINTON">BADMINTON</option>
          <option value="CATUR">CATUR</option>
          <option value="MARCHING BAND UNIVERSITAS UDAYANA (MBU)">MARCHING BAND UNIVERSITAS UDAYANA (MBU)</option>
          <option value="KESENIAN">KESENIAN</option>
          <option value="TEATER OROK NOCENG">TEATER OROK NOCENG</option>
          <option value="UDAYANA FOCUS">UDAYANA FOCUS</option> 
          <option value="KOPERASI MAHASISWA (KOPMA)">KOPERASI MAHASISWA (KOPMA)</option>
          <option value="KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)">KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)</option>
          <option value="PERS MAHASISWA (PERSMA) 'AKADEMIKA'">PERS MAHASISWA (PERSMA) "AKADEMIKA"</option>
          <option value="RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana">RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana</option>
          <option value="MAHASISWA PENCINTA ALAM (MAPALA) 'WANAPRASTHA DHARMA'">MAHASISWA PENCINTA ALAM (MAPALA) "WANAPRASTHA DHARMA"</option>
          <option value="PRAMUKA">PRAMUKA</option>
          <option value="UYEC">UYEC (Udayana Young Entrepreneur Community)</option> 
          <option value="Weimana">Weimana</option> 
          <option value="ROBOTIC OF TECHNOLOGY (ROBOTEC)">ROBOTIC OF TECHNOLOGY (ROBOTEC)</option>
          <option value="FORUM GENERASI BIDIKMISI UDAYANA (GBU)">FORUM GENERASI BIDIKMISI UDAYANA (GBU)</option>
          <option value="UDS (Udayana Debating Society)">UDS (Udayana Debating Society)</option>
          <option value="(USC) Udayana Secience Club">(USC) Udayana Secience Club</option>
          <option value="Udayana JEGEG BAGUS">Udayana JEGEG BAGUS</option>
          <option value="PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT">PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT</option>
          <option value="IAAS LC">IAAS LC</option>
        </select>
        
        
        <select name="ukm3" data-aos="fade-up">
          <option value="" disabled selected>Pilihan UKM Ke-3</option>
          <option value="PPS BETAKO MERPATI PUTIH">PPS BETAKO MERPATI PUTIH</option>
          <option value="BOLA BASKET">BOLA BASKET</option>
          <option value="PERISAI DIRI (PD)">PERISAI DIRI (PD)</option>
          <option value="SEPAK BOLA/FUTSAL">SEPAK BOLA/FUTSAL</option>
          <option value="KKI">KKI</option>
          <option value="GATE BALL">GATE BALL</option>
          <option value="WUSHU">WUSHU</option>
          <option value="TAEKWONDO">TAEKWONDO</option>
          <option value="BADMINTON">BADMINTON</option>
          <option value="CATUR">CATUR</option>
          <option value="MARCHING BAND UNIVERSITAS UDAYANA (MBU)">MARCHING BAND UNIVERSITAS UDAYANA (MBU)</option>
          <option value="KESENIAN">KESENIAN</option>
          <option value="TEATER OROK NOCENG">TEATER OROK NOCENG</option>
          <option value="UDAYANA FOCUS">UDAYANA FOCUS</option> 
          <option value="KOPERASI MAHASISWA (KOPMA)">KOPERASI MAHASISWA (KOPMA)</option>
          <option value="KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)">KORPS SUKARELA PALANG MERAH INDONESIA (KSR PMI)</option>
          <option value="PERS MAHASISWA (PERSMA) 'AKADEMIKA'">PERS MAHASISWA (PERSMA) "AKADEMIKA"</option>
          <option value="RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana">RESIMEN MAHASISWA (MENWA) Yon A-901/Mayurajana</option>
          <option value="MAHASISWA PENCINTA ALAM (MAPALA) 'WANAPRASTHA DHARMA'">MAHASISWA PENCINTA ALAM (MAPALA) "WANAPRASTHA DHARMA"</option>
          <option value="PRAMUKA">PRAMUKA</option>
          <option value="UYEC">UYEC (Udayana Young Entrepreneur Community)</option> 
          <option value="Weimana">Weimana</option> 
          <option value="ROBOTIC OF TECHNOLOGY (ROBOTEC)">ROBOTIC OF TECHNOLOGY (ROBOTEC)</option>
          <option value="FORUM GENERASI BIDIKMISI UDAYANA (GBU)">FORUM GENERASI BIDIKMISI UDAYANA (GBU)</option>
          <option value="UDS (Udayana Debating Society)">UDS (Udayana Debating Society)</option>
          <option value="(USC) Udayana Secience Club">(USC) Udayana Secience Club</option>
          <option value="Udayana JEGEG BAGUS">Udayana JEGEG BAGUS</option>
          <option value="PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT">PENCAK SILAT PERSAUDARAAN SETIA HATI KOMISARIAT</option>
          <option value="IAAS LC">IAAS LC</option>
 
        </select>



        <select name="forum_agama" required data-aos="fade-up">
          <option value="" disabled selected>Pilihan Forum Agama</option>
          <option value="FPMHD (FORUM PERSAUDARAAN MAHASISWA HINDU DHARMA UNIVERSITAS UDAYANA)">FPMHD (FORUM PERSAUDARAAN MAHASISWA HINDU DHARMA UNIVERSITAS UDAYANA)</option>
          <option value="KBMK (KELUARGA BESAR MAHASISWA KRISTEN UNIVERSITAS UDAYANA)">KBMK (KELUARGA BESAR MAHASISWA KRISTEN UNIVERSITAS UDAYANA)</option>
          <option value="FPMI (FORUM PERSATUAN MAHASISWA ISLAM)">FPMI (FORUM PERSATUAN MAHASISWA ISLAM)</option>
          <option value="KMK (KELUARGA MAHASISWA KATOLIK ST.ALBERTUS AGUNG UNIVERSITAS UDAYANA)">KMK (KELUARGA MAHASISWA KATOLIK ST.ALBERTUS AGUNG UNIVERSITAS UDAYANA)</option>
          <option value="FKMBU (FORUM KELUARGA MAHASISWA BUDDHIS UNIVERSITAS UDAYANA)">FKMBU (FORUM KELUARGA MAHASISWA BUDDHIS UNIVERSITAS UDAYANA)</option>
          <option value="Lainnya">Lainnya</option>
        </select>

        <select name="paguyuban" required data-aos="fade-up">
          <option value="" disabled selected>Pilihan Paguyuban Daerah</option>
          <option value="IMSU (Ikatan Mahasiswa Sumatera Utara)">IMSU (Ikatan Mahasiswa Sumatera Utara)</option>
          <option value="IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)">IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)</option>
          <option value="PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)">PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)</option>
          <option value="GAYANA (Keluarga Jawa Udayana)">GAYANA (Keluarga Jawa Udayana)</option>
          <option value="KMOSSAK (Komunitas Mahasiswa Sasak)">KMOSSAK (Komunitas Mahasiswa Sasak)</option>
          <option value="PMBD (Perhimpunan Mahasiswa Bima Dompu-Bali)">PMBD (Perhimpunan Mahasiswa Bima Dompu-Bali)</option>
          <option value="IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)">IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)</option>
          <option value="IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)">IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)</option>
          <option value="Lainnya">Lainnya</option>
        </select>
    </div>
    <input type="submit" name="form1" data-aos="zoom-in-up">
</form>

<p data-aos="fade-up" class="my-2 mx-2" style="color: red;">*Diwajibkan memilih salah satu</p>
</section> -->
      
@endsection