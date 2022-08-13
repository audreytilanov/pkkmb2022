<?php
$page="Pendaftaran";
?>

@extends('layouts.template')
@section('content')
<style>
  #judulmisi{
    margin: 0;
    /* padding: 0; */
    height: 20vh;
    /* background: url("../asset/2022/bg/jpg"); */
    background-attachment: fixed;
    text-align:center;
}

#judulmisi h1{
    margin-top: 20px!important;
    padding-bottom: 30px;

}

.detpodcast{
    background: rgba( 255, 255, 255, 0.5 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    margin: auto;
    padding: 20px 50px 32px 50px;
}

.detpodcast h1{
    margin-top: 10%;
    font-size: 20px;
    width: 100%;
    /* color: black!important; */
    font-weight:650;
    font-family: Poppins;
}

.detpodcast p{
    text-align: justify;font-weight:500;font-size:19px;color:black;
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
    background: rgba( 255, 255, 255, 0.1 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    text-shadow: 2px 1px #6d6d6da1;
    border-radius: 10px;
    border: 1px solid rgba(192, 192, 192, 0.18);
    margin: auto;
    color: rgb(0, 0, 0);
    /* background-color: #fcfcfc; */
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    border: none;
    padding: 10px;
  }

  #absenquiz select{
    width: 100%;
    background: rgba( 255, 255, 255, 0.1 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    text-shadow: 2px 1px #000000a1;
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    margin: auto;
    color: rgb(150, 150, 150);
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    border: none;
    padding: 10px;
    margin-bottom: 25px;
  }

  #absenquiz select option{
    color: black
  }

  .text-danger{
    text-shadow: 2px 1px rgb(255, 255, 255)!important;

  }
  #absenquiz input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgb(128, 127, 127);
        opacity: 1; /* Firefox */
}

#absenquiz select::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgb(0, 0, 0);
        opacity: 1; /* Firefox */
}

  #absenquiz{
    display: grid;
    align-content: center;
    text-align: center;
}
input[type=submit]:hover{
    background-color: #133374;
    color: white!important;
    border: 4px solid rgba(255, 255, 255, 0.747);
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
    background-color: #1f54be;
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

  #absenquiz select{
    font-size: 25px;
  }

  .detpodcast p{
    text-align: justify;font-weight:500;font-size:17px;color:black;
}

  .detpodcast h1{

    font-size: 17px;

    }

    .detpodcast .h1misi{
        font-size: 33px;
    }
    #absenquiz{
        margin-top: 100px!important;
    }

    .scroll-down{
        display: none;
    }
  
}
@media only screen and (min-width: 400px) and (max-width:575.98px){ 
    #absenquiz{
        margin-top: 40px!important;
    }
    #absenquiz input{
        font-size: 25px;
     }
  #absenquiz select{
    font-size: 25px;
  }

  .detpodcast p{
    text-align: justify;font-weight:500;font-size:14px;color:black;
}

.detpodcast{
    padding: 20px 20px 32px 20px;
}
}

@media only screen and (min-width: 0px) and (max-width:400px){ 
    select{
        font-size: 20px;
        width: 100%!important;
    }

    #absenquiz input{
        width: 100%;
        font-size: 20px;
    }
    #absenquiz select{
        font-size: 20px;
    }
    input[type=submit] {
        width: 40%;
    }
    .detpodcast h1{

    font-size: 17px;

    }

    .detpodcast{
    padding: 20px 20px 32px 20px;
}

    .detpodcast p{
    text-align: justify;font-weight:500;font-size:13px;color:black;
}

    .detpodcast .h1misi{
    font-size: 35px;
    }
    #absenquiz{
        margin-top: 90px!important;
    }

    .scroll-down{
        display: none;
    }

    #quizsoal h3{
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 30px;
    }

    #quizsoal .subject{
        font-size: 15px;
        font-weight: 500;
    }
    #quizsoal{
    margin-bottom: 40px!important;
    padding: 40px 40px 40px 40px;
}
    
}

@media only screen and (max-width:992.98px){ 
    #absenquiz{
        margin-top: 50px;
    }

    .scroll-down{
        display: none;
    }
    
}
</style>
<section id="cover">
  <section id="judulmisi">
    <div class="container">
      <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"></span><span>PENDAFTARAN</span></h1>

          @if (\Session::has('success'))
          <div class="detpodcast">

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{!! \Session::get('success') !!}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
        </div>

          @endif
    </div>
  </section>
    
  <section class="container">
  <form method="POST" action="{{ route('pendaftaran.input') }}">
      @csrf
      {{-- @method('PUT') --}}
      <div id="absenquiz">
          <input data-aos="fade-up" type="text" placeholder="Email" name="email" required><br>
          @error('email')
              <span class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <br>
          <input data-aos="fade-up" type="text" placeholder="Nama Lengkap" name="nama_lengkap" required><br>
          @error('nama_lengkap')
              <span class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror<br>
          <input data-aos="fade-up"type="text" placeholder="NIM" name="nim" required><br> 
          @error('nim')
              <span class="text-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror<br>       
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
          <input data-aos="fade-up" type="text" placeholder="No WA/ID Line" name="hp" required><br>

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
            <option value="KARATE">KARATE</option>
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
            <option value="KARATE">KARATE</option>
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
            <option value="KARATE">KARATE</option>
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



          <select name="forum_agama" data-aos="fade-up">
            <option value="" disabled selected>Pilihan Forum Agama</option>
            <option value="FPMHD (FORUM PERSAUDARAAN MAHASISWA HINDU DHARMA UNIVERSITAS UDAYANA)">FPMHD (FORUM PERSAUDARAAN MAHASISWA HINDU DHARMA UNIVERSITAS UDAYANA)</option>
            <option value="KBMK (KELUARGA BESAR MAHASISWA KRISTEN UNIVERSITAS UDAYANA)">KBMK (KELUARGA BESAR MAHASISWA KRISTEN UNIVERSITAS UDAYANA)</option>
            <option value="FPMI (FORUM PERSATUAN MAHASISWA ISLAM)">FPMI (FORUM PERSATUAN MAHASISWA ISLAM)</option>
            <option value="KMK (KELUARGA MAHASISWA KATOLIK ST.ALBERTUS AGUNG UNIVERSITAS UDAYANA)">KMK (KELUARGA MAHASISWA KATOLIK ST.ALBERTUS AGUNG UNIVERSITAS UDAYANA)</option>
            <option value="FKMBU (FORUM KELUARGA MAHASISWA BUDDHIS UNIVERSITAS UDAYANA)">FKMBU (FORUM KELUARGA MAHASISWA BUDDHIS UNIVERSITAS UDAYANA)</option>
            <option value="Lainnya">Lainnya</option>
          </select>

          <select name="paguyuban" data-aos="fade-up">
            <option value="" disabled selected>Pilihan Paguyuban Daerah</option>
            <option value="IMSU (Ikatan Mahasiswa Sumatera Utara)">IMSU (Ikatan Mahasiswa Sumatera Utara)</option>
            <option value="IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)">IKMM (Ikatan Keluarga Seluruh Mahasiswa Minang)</option>
            <option value="PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)">PAMANAHAN (Paguyuban Mahasiswa Tanah Pasundan Bali)</option>
            <option value="GAYANA (Keluarga Jawa Udayana)">GAYANA (Keluarga Jawa Udayana)</option>
            <option value="KMOSSAK (Komunitas Mahasiswa Sasak)">KMOSSAK (Komunitas Mahasiswa Sasak)</option>
            <option value="PMBD (Perhimpunan Mahasiswa Bima Dompu-Bali)">PMBD (Perhimpunan Mahasiswa Bima Dompu-Bali)</option>
            <option value="IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)">IKAMI (Ikatan Keluarga Mahasiswa Sulawesi Selatan)</option>
            <option value="IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)">IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)</option>
            <option value="IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)">TONGKONAN (Toraja)</option>
            <option value="IMMAPA (Ikatan Mahasiswa dan Masyarakat Papua Bali)">PMNTT (Perhimpunan Mahasiswa Nusa Tenggara Timur)</option>
            <option value="Lainnya">Lainnya</option>
          </select>
      </div>
      <input type="submit" name="form1" data-aos="zoom-in-up">
  </form>

  <p data-aos="fade-up" class="my-2 mx-2" style="color: red;">*Diwajibkan memilih salah satu</p>
  </section>
</section>
@endsection