
<?php
$page="Ormawa";
?>

@extends('layouts.template')
@section('content')
      <style>
        #desc-fakultas{
          background-image: url('../asset/umum/bg-putih.jpg')!important;
          color: #000;
        }
        #desc-fakultas hr{
          /* color: #000!important; */
          border-top: 5px solid #000!important;
        }
        .pi{
          display: grid;
          justify-content: center;
          align-content: center;
        }

        .pendaftaran{
          /* background-image: url('../asset/umum/ukm_pendaftaran.jpg'); */
          width:400px;
          height:150px;
          border-radius: 100px;
          background-size:cover;
          font-weight: 800;
          font-size: 25px;
          text-align: center;
          transition: 0.2s ease;
          margin: auto;
          padding: auto;
          cursor: pointer;
          margin-top: 50px;
        }

        .pendaftaran:hover{
          border:5px solid white;
          z-index: 2;
        }

        .info{
          /* background-image: url('../asset/umum/ukm_info.jpg'); */
          width:400px;
          font-weight: 500;
          text-align: center;
          padding: auto;
          margin: auto;
          font-size: 25px;
          border-radius: 100px;
          background-size:cover;
          transition: 0.2s ease;
          cursor: pointer;
          color: white;
          border: 5px solid white;
          background-color: #1c3a7d;
          margin-top: 30px;
        }

        .info h1{
            padding: 10px 20px 10px 20px;
        }

        .info:hover{
          border:5px solid #395ead;;
          z-index: 2;
          background-color: white;
          color: #1c3a7d;
        }

        @media only screen and (min-width: 0px) and (max-width:500px){ 
            .info,
            .pendaftaran{
              width:300px;
              height:120px;
          }
        }
        #desc-pnfa{
          background-image: url('{{ URL::asset('asset/umum/bg-penjelasan.jpg') }}');
          color:white;
          background-attachment:fixed;
        }
        #desc-pnfa hr{
          /* color: white; */
          border-top: 5px solid #fff!important;
        }
      </style>
      <!-- Start Page Ormawa -->
      <!-- Start Section Fakultas -->
      <section id="coverlembaga">
        <section id="desc-fakultas">
          <div class="container">
            <div class="row header-page" style="margin-bottom: 80px;">
              <div class="col my-auto">
              </div>
            </div>
            <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Fakultas di </span><span>Universitas Udayana</span></h1>
            <div class="base">
              <img class="shield" src="{{ URL::asset('asset/2022/shield/asset/SheldShield.png') }}" alt="Shield Logo" />
              <div class="base_fapet">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FAPET.png') }}" alt="" class="logo" onclick="modaldescfapet()">
              </div>
              <div class="base_fib">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FIB.png') }}" alt="" class="logo" onclick="modaldescfib()">
              </div>
              <div class="base_feb">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FEB.png') }}" alt="" class="logo" onclick="modaldescfeb()">
              </div>
              <div class="base_ftp">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FTP.png') }}" alt="" class="logo" onclick="modaldescftp()">
              </div>
              <div class="base_fmipa">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FMIPA.png') }}" alt="" class="logo" onclick="modaldescfmipa()">
              </div>
              <div class="base_fisip">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FISIP.png') }}" alt="" class="logo" onclick="modaldescfisip()">
              </div>
              <div class="base_fh">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FH.png') }}" alt="" class="logo" onclick="modaldescfh()">
              </div>
              <div class="base_fk">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FK.png') }}" alt="" class="logo" onclick="modaldescfk()">
              </div>
              <div class="base_fkh">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FKH.png') }}" alt="" class="logo" onclick="modaldescfkh()">
              </div>
              <div class="base_fkp">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FKP.png') }}" alt="" class="logo" onclick="modaldescfkp()">
              </div>
              <div class="base_fp">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FP.png') }}" alt="" class="logo" onclick="modaldescfp()">
              </div>
              <div class="base_fpar">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FPAR.png') }}" alt="" class="logo" onclick="modaldescfpar()">
              </div>
              <div class="base_ft">
                  <img src="{{ URL::asset('asset/2022/shield/asset/logo-fakultas/FT.png') }}" alt="" class="logo" onclick="modaldescft()">
              </div>
              <div class="base_unud">
                  <img src="{{ URL::asset('asset/2022/shield/asset/UNUD.png') }}" alt="" class="logo">
              </div>
          </div>
            <div class="row">
              <div class="col-sm-12 col-lg-6 text-center" >
                  
              </div>
              <div id="fk-desc" class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;">&emsp;&emsp;&emsp;&emsp;Universitas Udayana memiliki 13 fakultas yang terdiri dari Fakultas Ilmu Budaya, Fakultas Kedokteran, Fakultas Hukum, Fakultas Teknik, Fakultas Pertanian, Fakultas Ekonomi dan Bisnis, Fakultas Peternakan, Fakultas Matematika dan Ilmu Pengetahuan Alam, Fakultas Kedokteran Hewan, Fakultas Teknologi Pertanian, Fakultas Pariwisata, Fakultas Ilmu Sosial dan Ilmu Politik, dan Fakultas Kelautan dan Perikanan dimana setiap fakultas memiliki lembaga kemahasiswaan yang berfungsi sebagai wadah aspirasi dan pengembangan diri bagi mahasiswa di setiap fakultas, lembaga tersebut adalah Badan Eksekutif Mahasiswa (BEM) dan Dewan Perwakilan Mahasiswa (DPM).
                </p>
                <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">Untuk info lebih lanjut mengenai Fakultas di Universitas Udayana, <strong>klik pada gambar logo</strong></p>
              </div>
            </div>
          </div>
        </section>

        {{-- MODAL FPAR --}}

        <div class="popup" id="modaldescfpar">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfpar()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Pariwisata</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FPAR.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas pariwisata universitas Udayana berdiri diawali dengan melihat Bali sebagai Daerah Tujuan Wisata (DTW) yang dianalogikan sebagai laboratorium hidup kepariwisataan di Indonesia. Maka, dibutuhkan tenaga-tenaga ahli, terampil, profesional dan berpengetahuan luas di bidang pariwisata. 
                              Sebelum adanya fakultas pariwisata, dulunya fakultas ini hanya berdiri sebagai Program Studi Pariwisata yaitu Program Reguler (Kelas Pagi) Diploma IV Pariwisata dengan SK. Dirjen Dikti No. 67/Dikti/Kep./1989 maupun Program Paralel (Kelas Sore) dengan SK. Rektor Unud No. 2442/J14/HK.01.23/1998.<br>
                              Turunnya ijin pendirian Program Studi Sarjana Strata 1 (S1) dengan- SK. Dirjen DIKTI No. 2425/D/T/2008 tanggal 29 Juli 2008 dan SK. Rektor Unud No. 347A/H14/HK/2008 tertanggal 27 September 2008 tentang pendirian Fakultas Pariwisata Unud.                              
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Pengelolaan Perhotelan Jenjang Sarjana Terapan<br>
                                2. Program Studi Pariwisata jenjang Strata 1 (S1)<br>
                                3. Program Studi Industri Perjalanan Wisata jenjang Strata 1 (S1)
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                                <p>
                                    Ketua BEM FPAR Unud	: Dana Arta<br>
                                    IG BEM  FPAR Unud		: @bemfpar_unud
                                  </p>
                                  <img style="width: 20%!important" src="{{ URL::asset('asset/2022/bem/FPAR.png') }}" alt="">
                            </div>
                              
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BPM FPAR Unud		: I Kadek Aditya Nara Kusuma<br>
                                IG BPM				: @bemfpar_unud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FPAR.png') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfpar()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FIB --}}

        <div class="popup" id="modaldescfib">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfib()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Ilmu Budaya</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FIB.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Ilmu Budaya merupakan fakultas pertama di Universitas Udayana. Fakultas Ilmu Budaya berdiri atas prakarsa Yayasan Fakultas-Fakultas Nusa Tenggara yang diketuai oleh Letkol Minggoe dan Wakil Ketua I, Gubernur Sunda Kecil yaitu Teuku Mochammad Daodsjah. Diresmikan oleh Presiden Pertama Negara Republik Indonesia yaitu Dr. Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Prijono pada tanggal 29 September 1958.                      
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Antropologi Budaya<br>
                                2. Arkeologi <br>
                                3. Ilmu Sejarah<br>
                                4. Sastra Bali<br>
                                5. Sastra Inggris<br>
                                6. Sastra Jepang<br>
                                7. Sastra Jawa Kuno<br>
                                8. Sastra Indonesia<br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua		: I Gusti Ngurah Karista Oda Prihandana<br>
                                Instagram	: @smfib.unud	

                              </p>
                              <img style="width:20%!important;" width="250px" src="{{ URL::asset('asset/2022/bem/FIB.jpeg') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua		: Desak Made Tia Kusuma Paramita<br>
                                Instagram	: @bpmfib.unud
                              </p>
                              <img style="width:20%!important;" src="{{ URL::asset('asset/2022/dpm/FIB.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfib()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FK --}}

        <div class="popup" id="modaldescfk">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfk()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Kedokteran</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FK.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Kedokteran Universitas Udayana (FK Unud) berdiri pada tahun 1962 dan berpusat di Denpasar. Aktivitas perkuliahannya sendiri diadakan di beberapa lokasi seperti Kampus Sudirman Denpasar, Rumah Sakit Universitas Udayana Jimbaran, dan RSUP Sanglah. Pada awalnya, Fakultas Kedokteran merupakan fakultas yang melaksanakan program pendidikan dokter sehingga tujuan didirikannya FK Unud adalah mendidik mahasiswa calon dokter. Namun seiring dengan perkembangnya, FK Unud mendirikan program studi lainnya yang masih dalam naungan bidang kesehatan. Sampai saat ini, FK Unud memiliki 6 program studi sarjana (strata-1), 19 program studi pendidikan spesialis-1 (Sp-1), 3 program studi magister (strata-2), dan 1 program studi doktor (strata-3).
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Program Studi Sarjana Kedokteran dan Profesi Dokter (PSSKPD)
                                <br>
                                2. Program Studi Sarjana Ilmu Keperawatan dan Profesi Ners (PSSIKPN) <br>
                                3. Program Studi Sarjana Psikologi <br>
                                4. Program Studi Sarjana Fisioterapi dan Profesi Fisioterapi<br>
                                5. Program Studi Sarjana Kedokteran Gigi dan Profesi Dokter Gigi<br>
                                6. Program Studi Sarjana Kesehatan Masyarakat<br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FK Unud 	: Eduardo Kenjiro<br>
                                IG 			: @bemfkunud 

                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/bem/FK.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua DPM FK Unud 	: Aurelius Filibertus Nong Vito<br>
                                IG			: @dpmfkunud

                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FK.png') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfk()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FH --}}

        <div class="popup" id="modaldescfh">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfh()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Hukum</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FH.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;	Lahirnya Fakultas Hukum diawali oleh pemikiran dan usulan Perhimpunan Sarjana Hukum Indonesia (PERSAHI) Cabang Bali dalam rangka melakukan penggalian, pengembangan dan pembinaan nilai-nilai hukum adat Bali dan memperkaya khasanah hukum nasional. Pemikiran ini mendapat sambutan dan dukungan positif dari Presidium Universitas Udayana. Dalam rapatnya pada hari Selasa tanggal 7 Juli 1964, Presidium Universitas Udayana dengan para Dekan Fakultas di lingkungan Universitas Udayana memutuskan untuk membuka Fakultas Hukum dan Pengetahuan Masyarakat dalam lingkungan Universitas Udayana mulai tahun kuliah 1964/1965. Perwujudan hasil rapat ini lalu ditetapkan Panitia Persiapan Pembentukan Fakultas Hukum dan Pengetahuan Masyarakat dalam Surat Keputusan Presidium Universitas Udayana Nomor 933/Sek/X/UNUD/1964 (Lampiran 1) tertanggal 24 Juli 1964.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Ilmu Hukum
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                BEM<br>
                                Ketua		: I Gusti Agung Arya Suryaningrat<br>
                                Instagram	 : @bemfhunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/bem/FH.jpg') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                DPM<br>
                                Ketua		: I Gusti Nyoman Redi Citragatra<br>
                                Instagram 	: @dpmfhudayana
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FH.jpeg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfh()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FT --}}

        <div class="popup" id="modaldescft">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescft()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Teknik</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FT.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Teknik Universitas Udayana secara resmi berdiri pada tanggal 1 Oktober 1965 dengan Surat Keputusan Menteri PTIP No. 248/Sek/P.U/1965, tanggal 20 Oktober 1965 yang terdiri dari dua jurusan yaitu Jurusan Arsitektur dan Jurusan Seni Rupa. Sebagai latar belakang pendirian Fakultas Teknik Universitas Udayana adalah dalam rangka pelestarian, pengembangan khususnya pada kebudayaan Daerah Bali dan kebudayaan nasional pada umumnya, terutama di dalam menghadapi pembangunan dan perkembangan kepariwisataan.<br>
                              Secara fisik perkembangan itu banyak menyangkut bidang-bidang kearsitekturan dan kesenirupaan, yaitu suatu potensi yang mempunyai nilai tersendiri di dalam kehidupan kebudayaan Bali, selain untuk menampung aspirasi masyarakat khususnya calon-calon mahasiswa dari Bali yang ingin melanjutkan pendidikan seni dan teknologi pada jenjang pendidikan tinggi. Untuk maksud tersebut budayawan di Bali khususnya di kalangan Universitas Udayana merintis jalan untuk mendirikan pendidikan tinggi yang relevan yaitu pendidikan tinggi bidang arsitektur dan seni rupa. 
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Arsitektur<br>
                                2. Teknik Elektro<br>
                                3. Teknik Mesin  <br>
                                4. Teknik Sipil<br>
                                5. Teknologi Informasi<br>
                                6. Teknik Lingkungan<br>
                                7. Teknik Industri<br>
                                
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                BEM<br>
                                Ketua		:I Nyoman Hary Putra Darma<br>
                                Instagram	: @smft_unud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/bem/FT.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                DPM<br>
                                Ketua		:Cokorda Gd Dwipayana<br>
                                Instagram	: @smft_unud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FT.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescft()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FP --}}

        <div class="popup" id="modaldescfp">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfp()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Pertanian</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FP.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Pertanian Universitas Udayana berdiri tahun 1965 atas prakarsa Rektor Universitas Udayana Prof. Dr. Ida Bagus Mantra dengan menghubungi Dr. Ir. I Gusti Bagus Teken dan Ir. Putu Djapa Winaya, M.Sc. Keduanya adalah staf dosen Institut Pertanian Bogor. Akhirnya, berdasarkan Keputusan Dirjen Dikti Nomor 102 Tanggal 2 September 1967 secara resmi dinyatakan berdirinya Fakultas Pertanian Universitas Udayana. Dekan pertama Fakultas Pertanian Universitas Udayana adalah Ir. Putu Djapa Winaya M.Sc.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Agribisnis
                                <br>
                                2. Agroteknologi<br>
                                3. Arsitektur Pertamanan  <br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                BEM<br>
                                Ketua BEM	: Kadek Wira Pradana<br>
                                IG BEM	: @bemfpunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/bem/FP.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                DPM<br>
                                Ketua DPM	: I Gusti Ngurah Wahyu Arsadiarta<br>
                                IG DPM	: @dpmfpunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FP.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfp()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FEB --}}

        <div class="popup" id="modaldescfeb">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfeb()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Ekonomi dan Bisnis</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FEB.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Ekonomi dan Bisnis Universitas Udayana didirikan tahun 1967. Pada awal berdiri Fakultas FEB UNUD hanya diperkenankan untuk melaksanakan pendidikan Sarjana Muda. Pada tanggal 21 Juni 2013, berdasarkan Surat Keputusan Rektor Universitas Udayana Nomor 100A/UN14/HK/2013 tertanggal 21 Juni 2012, Fakultas Ekonomi Bisnis berubah nama menjadi Fakultas Ekonomi dan Bisnis
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. PROGRAM STUDI D3 AKUNTANSI
                                2. PROGRAM STUDI D3 PERPAJAKAN
                                3. PROGRAM STUDI D3 PEMASARAN
                                4. PROGRAM STUDI S1 EKONOMI PEMBANGUNAN
                                5. PROGRAM STUDI S1 MANAJEMEN
                                6. PROGRAM STUDI S1 AKUNTANSI
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                BEM<br>
                                KETUA BEM FEB Unud	: I Putu Diva Khrisna Aditya<br>
                                IG BEM 			: @bemfebunud
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FEB.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                DPM<br>
                                KETUA DPM FEB Unud	:I Wayan Mahesa Putra<br>
                                IG DPM			: @dpmfebunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FEB.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfeb()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FAPET --}}

        <div class="popup" id="modaldescfapet">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfapet()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Peternakan</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FAPET.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Peternakan saat awal berdiri pada tahun 1962 bernama Fakultas Kedokteran Hewan dan Peternakan. Berdasarkan Keputusan Presiden No. 62 tahun 1982 tentang Organisasi Universitas Udayana, nama Fakultas Kedokteran Hewan dan Peternakan diubah menjadi Fakultas Peternakan. Dengan demikian sejak tahun 1982 nama Fakultas Peternakan ditetapkan sebagai pengganti nama Fakultas Kedokteran Hewan dan Peternakan. Fakultas Peternakan telah menjalin kerja sama dengan PT Charoen sejak 2019 sehingga memiliki teknologi close house dalam sistem pendidikannya.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Ilmu Peternakan
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FAPET	Unud	: Ni Kadek Siska Padmara Dewi<br>
                                Ig 				: @bemkmfapetunud

                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FAPET.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua DPM FAPET	Unud	: Ketut Wahyu Prasetya<br>
                                IG				: @dpmkmfapetudayana
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FAPET.jpeg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfk()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FMIPA --}}

        <div class="popup" id="modaldescfmipa">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfmipa()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Matematika dan Ilmu Pengetahuan Alam</h1>
                      <img src="{{ URL::asset('asset/2022/fk/Fmipa.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Matematika dan Ilmu Pengetahuan Alam merupakan fakultas ke-8 yang berdiri pada tahun 1984. Fakultas MIPA dibentuk dalam beberapa tahap. Pada 1984 dibentuk Jurusan Kimia dan Fisika. Pada tahun 1985 dibentuk Jurusan Biologi, dilanjutkan dengan Jurusan Matematika pada tahun 2000 dan terakhir Jurusan Farmasi diijinkan 2005. Pada tahun 2006, dibuka program studi baru yaitu program studi ilmu Komputer dimana penerimaan mahasiswa baru dimulai dari Tahun Ajaran 2006/2007.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Ilmu Peternakan<br>
                                2. Matematika<br>
                                3. Kimia<br>
                                4. Fisika<br>
                                5. Biologi<br>
                                6. Farmasi<br>
                                7. Ilmu Komputer/ Teknik informatika
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FMIPA Unud	: Eka Saputra<br>
                                IG BEM FMIPA Unud	: @bemfmipaunud
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/Fmipa.jpg') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua DPM FMIPA Unud	: Raihan Arandi<br>
                                IG DPM FMIPA Unud	: @dpmfmipaunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/Fmipa.png') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfmipa()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>
        

        {{-- MODAL FKH --}}

        <div class="popup" id="modaldescfkh">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfkh()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Kedokteran Hewan</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FKH.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Pada awal berdirinya Universitas Udayana didukung oleh empat fakultas, yakni Fakultas Sastra (FS). Fakultas Kedokteran (FK), Fakultas Kedokteran Hewan dan Peternakan (FKHP), Fakultas Keguruan dan Ilmu Pendidikan (FKIP). Pada saat itu FKHP UNUD hanya membina bidang ilmu Peternakan saja, dan pada tahun 1978 baru terbentuk Jurusan Kedokteran Hewan. Berdirinya Fakultas Kedokteran Hewan pada Universitas Udayana dinyatakan dalam Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 204/0/1997 pada tanggal 22 Agustus 1997.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Profesi Dokter Hewan
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FKH Unud		: I Dewa Putu Bagus Mertha Anom <br>
                                IG BEM	: @bemfkhunud
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FKH.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua DPM FKH Unud		: Made Gede Adi Surya Saputra<br>
                                Instagram	: @dpmfkhunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FKH.png') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfkh()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FTP --}}

        <div class="popup" id="modaldescftp">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescftp()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Teknologi Pertanian</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FTP.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Pengembangan bidang ilmu Teknologi Pertanian di Universitas Udayana dimulai sejak tahun 1962 yang dirintis oleh bagian Teknologi Hasil Ternak, Fakultas Kedokteran Hewan dan Peternakan (FKHP) yang sekarang bernama Fakultas Peternakan (FAPET). Selanjutnya sejak tahun 1967 dikembangkan bidang studi Teknologi Hasil Pertanian yang dikelola oleh Fakultas Pertanian (FP) Universitas Udayana. Atas petunjuk dan persetujuan Direktorat Jenderal Pendidikan Tinggi (Ditjen DIKTI), Fakultas Teknologi Pertanian (FTP) dapat didirikan berdasarkan Surat Keputusan Rektor Universitas Udayana tertanggal 7 Oktober 2004 No.271.A/J14/PR.01.10/2004.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Ilmu dan Teknologi Pangan<br>
                                2. Teknologi Industri Pertanian<br>
                                3. Teknik Pertanian dan Biosistem
                                <br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FTP Unud: Achmad Gian Akbar Dzulkarnain<br>
                                Instagram	: @bemftpunud
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FTP.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BPM FTP Unud	: I Gusti Ayu Ari Meltrani<br>
                                Instagram	: @bpmftpunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FTP.png') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescftp()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FISIP--}}

        <div class="popup" id="modaldescfisip">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfisip()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Ilmu Sosial dan Ilmu Politik</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FISIP.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) Universitas Udayana berdiri pada 28 Juni 2009. FISIP merupakan fakultas ke-12 di lingkungan Universitas Udayana. Penggagas awal dan sekaligus sebagai pendiri Fakultas Ilmu Sosial dan Ilmu Politik (FISIP) di Universitas Udayana adalah Prof. Dr. dr. I Made Bakta, Sp.PD (KHOM). Sebagai lembaga pendidikan tertua dan terbesar di Bali, Universitas Udayana ingin menunjukkan kepedulian yang tinggi atas persoalan-persoalan sosial dan politik yang berkembang dalam masyarakat yang dilakukan dengan mencetak sumber daya manusia yang unggul dalam bidang ilmu sosial dan ilmu politik, yang tidak hanya mampu memahami dan kritis terhadap teori dan konsep semata, namun juga mampu memberikan solusi yang bermanfaat bagi kesejahteraan hidup masyarakat secara luas.
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Sosiologi<br>
                                2. Hubungan Internasional<br>
                                3. Administrasi Negara<br>
                                4. Ilmu Komunikasi<br>
                                5. Ilmu Politik<br>
                                6. D3 Perpustakaan.<br>
                                <br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua BEM FISIP Unud	: I Ketut Wiratama Arimbawa<br>
                                Instagram			: @bemfisipunud
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FISIP.png') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua DPM FISIP Unud	: Putu Mas Anandania Pradnya Paramita<br>
                                Instagram			: @dpmfisipunud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FISIP.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfisip()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>

        {{-- MODAL FKP--}}

        <div class="popup" id="modaldescfkp">
          <div class="overlay"></div>
          <div class="content">
              <div class="close-btn" onclick="nmodaldescfkp()">×</div>
                  <div class="content-datail-modal"></div>
                      <h1 class="title">Fakultas Kelautan dan Perikanan</h1>
                      <img src="{{ URL::asset('asset/2022/fk/FKP.png') }}" alt="">
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left; cursor:pointer;">Sejarah</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>&emsp;&emsp;&emsp;Fakultas Kelautan dan Perikanan (FKP) merupakan Fakultas termuda di Universitas Udayana (UNUD) yang berdiri pada tanggal 10 Oktober 2011 dengan Surat Keputusan (SK) Rektor Nomor: 680/UN.14/HK/2011 tentang pendirian Fakultas Kelautan dan Perikanan Universitas Udayana. FKP didirikan guna menjamin pemerataan kesempatan pendidikan, peningkatan mutu serta relevansi dan efisiensi manajemen pendidikan untuk menghadapi tantangan lokal, nasional dan global. FKP memiliki peran dalam mengembangkan Ilmu Pengetahuan dan Teknologi (IPTEK) serta menyiapkan sumber daya manusia yang memiliki kemampuan akademik di bidang ilmu kelautan dan perikanan sebagai tindak lanjut pelaksanaan Indonesia sebagai bangsa bahari, serta untuk mendukung pembangunan nasional.FKP Unud merupakan satu-satunya fakultas Kelautan dan Perikanan yang ada di Pulau Bali. 
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">Program Studi</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                              <p>
                                1. Ilmu Kelautan
                                <br>
                                2. Manajemen Sumberdaya Perairan
                                <br>
                              </p>
                          </div>
                      </div>
                      <div class="faq">
                          <div class="question">
                              <h2 class="title" style="text-align:left;cursor:pointer;">BEM & BPM</h2>
                              <svg width="15" height="10" viewBox="0 0 42 25">
                                  <path
                                  d="M3 3L21 21L39 3"
                                  stroke="black"
                                  stroke-width="7"
                                  stroke-linecap="round"
                                  />
                              </svg>
                          </div>
                          <div class="answer">
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua	BEM FKP Unud	:Teofilus Christofan 
                                Instagram			:@bemfkp_unud<br>
                              </p>
                              <img style="width: 20%!important" width="250px" src="{{ URL::asset('asset/2022/bem/FKP.jpg') }}" alt="">
                            </div>
                              <br>
                            <div style="display: flex;justify-content:center;align-items:center;">
                              <p>
                                Ketua	DPM FKP Unud	: Fauzan  Rahmat  S.<br>
                                Instagram			:@dpmfkp_unud
                              </p>
                              <img style="width: 20%!important" src="{{ URL::asset('asset/2022/dpm/FKP.jpg') }}" alt="">
                            </div>
                          </div>  
                          
                      </div>
                      <a onclick="nmodaldescfkp()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                  </div>
              </div>
          </div>
        </div>



        <!-- Start Section Paguyuban and Forum Agama -->
        <section id="desc-pnfa">
          <div class="container">
            <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Forum Agama  & Paguyuban </span><span>Universitas Udayana</span></h1>
            <div class="row">
              <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                <div class="swiper-container aos-init aos-animate "  data-aos="zoom-in-up" >
                  <div class="swiper-wrapper ">
                    @foreach ($data as $list_forumagama)
                    @if ($list_forumagama->jenis_ormawa ==3)
                    {{-- {{ dd($list_forumagama) }} --}}
                    <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/<?php echo $list_forumagama->logo ?>');cursor:pointer;" data-title-paguyuban='<strong><?php echo $list_forumagama->singkatan ?></strong>' data-body-paguyuban='
                        <img class="mx-auto d-block" src="../asset/paguyuban/<?php echo $list_forumagama->logo ?>" alt="" style="width: 30%; margin-bottom:30px"><p class="title" style="text-align:center"><?php echo $list_forumagama->nama?></p>
                    <br>
                    <p style><?php echo $list_forumagama->keterangan ?></p>
                    <p><?php echo $list_forumagama->contact ?></p>'></div>
                    @endif
                    @endforeach
                  </div>
                </div>
                <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"><span>Forum Agama</span></h1>

                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;font-size:20px;">&emsp;&emsp;&emsp;&emsp;Universitas Udayana memiliki 5 Forum Agama  yaitu, Forum Persatuan Mahasiswa Islam (FPMI), Keluarga Mahasiswa Katolik St. Albertus Agung (KMK), Forum Persaudaraan Mahasiswa Hindu Dharma (FPMHD), Keluarga Besar Mahasiswa Kristen Universitas Udayana (KBMK), dan Forum Keluarga Mahasiswa Buddhis Universitas Udayana (FKMBU).
                </p>
              </div>
              <div class="col-sm-12 col-lg-6 py-2 my-auto text-center" >
                <img  src="{{asset('asset/2022/ormawa/paguyuban.png')}}" alt="Logo 13 Fakultas" class="img-fluid aos-init aos-animate maps-paguyuban" style="cursor: pointer; filter:brightness(1.2);margin-top:60px;" data-aos="zoom-in-up" data-aos-delay="500" >
                <h1 style="margin-top: 100px" class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"><span>Paguyuban</span></h1>

                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;font-size:20px;">&emsp;&emsp;&emsp;&emsp;Selain Forum Agama, terdapat Forum Paguyuban yang tersebar di Universitas Udayana yaitu GAJAYANA, KMOSSAK, IKMM, IKAMI, PMBD, IMMAPA, PAMANAHAN, IMSU, TONGKONAN, dan PMNTT. 
                </p>
                <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;font-size:20px;">Untuk info lebih lanjut mengenai <strong class="show_info_paguyuban" style="cursor:pointer;">Paguyuban di Universitas Udayana</strong>, klik pada gambar peta berikut</p>
              </div>
            </div>
          </div>
        </section>



        <!-- Start Section UKM -->
        <section id="desc-ukm">
          <div class="container">
            <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">UKM di </span><span>Universitas Udayana</span></h1>
            <div class="row">
              <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;">&emsp;&emsp;&emsp;&emsp;
                  Unit Kegiatan Mahasiswa (UKM) merupakan ruang kemahasiswaan yang bertujuan untuk mengembangkan minat, bakat, dan keterampilan tertentu bagi anggota-anggotanya. Lembaga ini merupakan mitra organisasi kemahasiswaan di internal kampus seperti, Senat Mahasiswa dan Badan Eksekutif Mahasiswa, baik yang berada di tingkat program studi, jurusan, maupun universitas.
                </p>
                <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
              </div>
              <div class="pi col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate"  data-aos="fade-right" data-aos-delay="300">
                <a href="/ukm">
                  <div class="info">
                    <h1>INFO UKM</h1>
                  </div>
                </a>      
              </div>
              
            </div>
          </div>
        </section>
      </section>




      <!-- MODALLLL COY -->

      <div class="popup" id="list-fakultas">
        <div class="body-popup" style="width: 100%; height:100%;background:rgba(0,0,0,0.2)!impotant;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-white mt-4">Fakultas di <strong>Universitas Udayana</strong></h1>
              </div>
              
            </div>
          </div>
        </div>
      </div>


      <!-- Modal Paguyuban Maps -->
      <div class="modal fade" id="list-paguyuban" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
          <div class="modal-content" style="border-radius:30px;">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center!important;"><strong>Klik Logo Paguyuban Untuk Info Detailnya</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body container-modal" id="exampleModalLongBody">
              <img src="{{asset('asset/2022/ormawa/paguyuban putih.png')}}" alt="peta-paguyuban" class="d-block mx-auto img-fluid">
              <?php 
              $a=1;
              ?>
              @foreach ($data as $list_paguyuban)
              @if ($list_paguyuban->jenis_ormawa == 2)
              {{-- {{ dd($list_paguyuban->keterangan) }} --}}
              <div class="node paguyuban-<?php echo $a ?>">
                <a><img class="logo-paguyuban-node paguyuban-popup" src="../asset/paguyuban/<?php echo $list_paguyuban->logo ?>" alt="logo paguyuban" data-title-paguyuban='<strong><?php echo $list_paguyuban->slug ?></strong>' data-body-paguyuban='<img class="mx-auto d-block" src="../asset/paguyuban/<?php echo $list_paguyuban->logo ?>" alt="" style="width: 30%; margin-bottom:30px">
              <p class="title" style="text-align:center"><?php echo $list_paguyuban->nama?>
              </p><br>
              <p><?php echo $list_paguyuban->keterangan ?>
              </p>
              <p><?php echo $list_paguyuban->contact?>
              </p>'></a>
              </div>
              <?php
              $a++;
              ?>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>

    <!-- Modal Detail Paguyuban -->
    <div class="modal fade" id="detailPaguyuban" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius:30px; background-image: url('../asset/2022/bg/popup.png'); background-position:center;color:black;font-weight:500; background-repeat:no-repeat; background-size:cover">
          <div class="modal-header">
            <h5 class="modal-title title" id="paguyubanTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container-modal" id="paguyubanBody" style="padding:4vw;">
          </div>
        </div>
      </div>
    </div>

    




@endsection