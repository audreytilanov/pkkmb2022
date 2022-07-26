<?php
$page="Home";
?>

@extends('layouts.template')
@section('content')

      <section id="banner">
        <div class="container">
          <div class="img-banner" >
            <div data-relative-input="true" id="scene">
              <div data-depth="0.2"><img src="asset/logo/LOGO KAYON Stroke.png" alt="logo-sdu-banner" ></div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Start Section Dharma Patni -->
      <section id="dharma-patni" style="background-image: url('../asset/umum/bg-putih.jpg');background-size: cover;">
        <img class="dharma aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="300" src="asset/umum/dharma web-01.png" height="300" alt="dharma-masker">
        <img class="patni aos-animate" data-aos="zoom-in-up"  data-aos-delay="700" src="asset/umum/patni web-02.png" height="300" alt="patni-masker">
        {{-- <img class="note-dharma-patni aos-animate" data-aos="fade-right"  data-aos-delay="1300" src="asset/umum/janlup web-03.png" height="70" alt="patni-masker"> --}}
      </section>


      <!-- Start Section Penjelasan Logo -->
      <section id="desc-logo" style="background-image: url('../asset/umum/bg-penjelasan.jpg');background-size: cover;background-attachment: fixed;color: #fff;">
        <div class="container">
        <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right">
          <span class="font-weight-normal">Apa itu </span><span>Student Day?</span>
        </h1>
        <div class="row">
          <div class="col-sm-12 col-lg-6 py-2 my-auto text-center">
            <img onclick="modaldesclogo()" src="asset/logo/LOGO KAYON Stroke.png" alt="Logo SDU" class="img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200">
          </div>
          <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
            <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;">&emsp;&emsp;&emsp;Student Day 2021 Universitas Udayana adalah kegiatan masa orientasi bagi mahasiswa baru Universitas Udayana di tingkat Universitas. Lebih dari itu, Student Day 2021 Universitas Udayana adalah sebuah momentum penanaman nilai-nilai positif serta akselerator daripada proses perjalanan seseorang dalam menapaki kehidupan kampus. Karena di saat ini lah, mahasiswa akan memperoleh sedikit tidaknya proses berpikir, memahami, belajar, dan mengembangkan diri melalui seluruh rangkaian kegiatan yang telah dirancang<br>
            <br>
            &emsp;&emsp;&emsp;Berangkat dari pentingnya peran mahasiswa untuk kemajuan bangsa dan negara ini, maka dipandang perlu untuk mengadakan Student Day 2021 Universitas Udayana sebagai wadah orientasi mahasiswa baru yang mencakup pemberian nilai, gagasan, pembentukan karakter, serta pemberian bekal keterampilan softskills serta hardskills yang harapannya dapat menunjang kapabilitas diri mahasiswa dalam menjalani kehidupan perkuliahan, lebih jauh lagi dalam kehidupan bermasyarakat dan bernegara
            </p>
            <p></p>
            <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate"
            <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;"><span class="penjelasan-mencolok">Gali lebih dalam tentang <strong onclick="modaldesclogo()" style="cursor:pointer;"><u style="text-decoration-color: darkorange">Student Day 2021 Universitas Udayana</u></strong>, klik pada gambar logo</span></p>
          </div>
          </div>
        </div>
      </section>



      <!-- Start Section Lini Masa -->
      <section id="lini-masa" style="background-image: url('../asset/umum/bg-putih.jpg');background-size: cover;color: #000;">
        <div class="container">
          <div class="row" style="margin-left:-30px;">
              <div class="col-sm-12" >
                <h1 class="title title-animation aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal" >Lini</span> Masa</h1>
              </div>
              <div id="slider" class="owl-carousel aos-init aos-animate" data-aos="zoom-in-up" width: 80%;margin: 100px auto;>
                <!-- Card 1 -->
                <div class="flip-box">
                  <div class="flip-box-front text-center" style="background-image: url('../asset/umum/lini-masa/rb1.jpeg');">
                  </div>
                  <div class="flip-box-back text-center" style="background-image:url('../asset/umum/lini-masa/bg.png');">
                    <div class="inner color-white">
                      <!-- Tulis keterangannya disini-->
                      <h3 class="flip-box-header">Ruang Bercakap 1</h3>
                      <p>Ruang Bercakap 1 adalah sebuah wadah yang mempertemukan antara pendamping gugus dengan adik-adiknya untuk saling mengakrabkan diri dan berbagi informasi seputar dunia perkuliahan di universitas udayana.</p>
                    </div>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="flip-box">
                  <div class="flip-box-front text-center" style="background-image: url('../asset/umum/lini-masa/rb2.jpeg');">
                  </div>
                  <div class="flip-box-back text-center" style="background-image:url('../asset/umum/lini-masa/bg.png');">
                    <div class="inner color-white">
                      <h3 class="flip-box-header">Ruang Bercakap 2</h3>
                      <p>Ruang Bercakap 2 merupakan sebuah suplemen yang bertujuan untuk memberikan pemahaman tentang tugas utama sebagai seorang mahasiswa yakni Tri Dharma Perguruan Tinggi.</p>
                    </div>
                  </div>
                </div>
                <!-- Card 4 -->
                <div class="flip-box">
                  <div class="flip-box-front text-center" style="background-image: url('../asset/umum/lini-masa/cb.jpeg');">
                  </div>
                  <div class="flip-box-back text-center" style="background-image:url('../asset/umum/lini-masa/bg.png');">
                    <div class="inner color-white">
                    <h3 class="flip-box-header">Capacity Building</h3>
                      <p>Capacity Building adalah salah satu suplemen dari Student Day 2021 Universitas Udayana yang bertujuan untuk menanamkan materi dari pembicara dengan fokus untama pada ilmu terapan/aplikatif.</p>
                    </div>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="flip-box">
                  <div class="flip-box-front text-center" style="background-image: url('../asset/umum/lini-masa/card-5.jpeg');"></div>
                  <div class="flip-box-back text-center" style="background-image:url('../asset/umum/lini-masa/bg.png');">
                    <div class="inner color-white">
                      <h3 class="flip-box-header" style="padding-top: 15%;">Hari Puncak</h3>
                      <p>Hari Puncak SDU 2021 merupakan sebuah kegiatan penutup yang bertujuan untuk memberikan sambutan selamat datang kepada mahasiswa baru di dunia perkuliahan dan mengingatkan tujuan awal dari SDU itu sendiri.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <!-- End Section Lini Masa -->


      <!-- Start Section  Music-->
      <section id="musik" style="background-image: url('../asset/umum/bg-putih.jpg');background-size: cover;">
        <div id="musik-teks" class="text-center">
          <h1 class="title title-animation aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal" ></span>Musik</h1>
        </div>
        <div id="musik-main" style="text-align: center;margin:auto;background-color: #fff;border-radius: 70px;">
          <div style="box-shadow: 30px 30px 44px -10px rgba(0, 0, 0, 0.15);border-radius:70px;">
            <div class="player p-4" style="height: 100%;">
              <div class="detail">
                <div class="now-playing">PLAYING x OF y</div>
                <div class="track-art"></div>
                <img id="myImg" src="" alt="">
                <div class="track-name">Track Name</div>
                <div class="track-artist">Track Artist</div>
              </div>
              <div class="buttons row">
                <div class="loop-track" onclick="loopTrack()" style="margin-top: 20px;"><i class="fas fa-redo i-size2" style="cursor: pointer;"></i></div>
                <div class="prev-track" onclick="prevTrack()" style="margin-top: 20px; cursor:pointer"><i class="fa fa-step-backward i-size2"></i></div>
                <div class="playpause-track" onclick="playpauseTrack()" style="cursor:pointer;"><i class="fa fa-play-circle i-size5"></i></div>
                <div class="next-track" onclick="nextTrack()" style="margin-top: 20px; cursor:pointer;"><i class="fa fa-step-forward i-size2"></i></div>
                <div class="pl-3" style="margin-top: 20px;"><i class="fas fa-bars i-size2" id="accordion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;"></i></div>
              </div>
              <div class="card col-12 mx-auto">
                <div id="collapseOne" class="collapse container">
                  <h3 class="pt-3">Daftar Lagu</h3>
                  <hr>
                  <div class="list p-3 text-gray" style="color: black;">
                    <ul style="list-style: none;">
                      <li onclick="playToTrack(0)" style="cursor: pointer;">Bhakti Udayana</li>
                      <hr>
                      <li onclick="playToTrack(1)" style="cursor: pointer;">Mars Udayana</li>
                      <hr>
                      <li onclick="playToTrack(2)" style="cursor: pointer;">Hymne Udayana</li>
                      <hr>
                      <li onclick="playToTrack(3)" style="cursor: pointer;">Mars Mahasiswa</li>
                      <hr>
                      <li onclick="playToTrack(4)" style="cursor: pointer;">Buruh tani</li>
                      <hr>
                      <li onclick="playToTrack(5)" style="cursor: pointer;">Jaya Udayana</li>
                      <hr>
                      <li onclick="playToTrack(6)" style="cursor: pointer;">Darah juang</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="slider_container">
                <div class="current-time">00:00</div>
                <div class="total-duration">00:00</div>
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">             
              </div>
              <div class="slider_container">
                <i class="fa fa-volume-down vol-down"></i><i class="fa fa-volume-up vol-up"></i>
                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">     
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Section Music -->    



      <!-- Modal -->
      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" onclick="nmodaldesclogo()">×</div>
          <div class="content-datail-modal"></div>
          <h1 class="title">STUDENT DAY 2021 UNIVERSITAS UDAYANA</h1>
          <img src="asset/logo/LOGO KAYON Stroke.png" alt="">
          <div class="faq">
            <div class="question">
              <h2 class="title" style="text-align:left; cursor:pointer;">Selayang Pandang</h2>
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
              <p>&emsp;&emsp;&emsp;Selamat datang di tangga pendidikan yang baru, tangga yang akan membawamu menjadi generasi pembelajar yang sesungguhnya. Kamu adalah kebanggaan kami. Namun, Ingatlah! untuk masuk ke dunia perkuliahan tidak bisa diraih dengan mudah. Kesempatan itu juga tidak bisa didapatkan oleh banyak pihak. Maka dari itu, menjadi sebuah hutang yang harus kamu tunaikan kepada mereka yang membayar pajak pada negara namun tak sepat mengenyam dunia perkuliahan, pada mereka yang sudah mengorbankan dirinya untuk tempatmu disini. Tingkatkan kapasitas diri perbanyaklah membaca, meneliti yang nantinya teman-teman harus abdikan pada mereka yang menanti secarik kertas pengetahuanmu, pada sesama yang masih berada di garis berada pada garis berkekurangan. Tanamkan rasa ini agar kita selalu terhubung untuk saling memajukan bangsa ini yang senantiasa menunggu kita sebagai generasi pembaharu. Dengan karya inovatif dan inspiratif bangkitkan kembali semangat kita di kondisi ini. Kuatkan tekad kita untuk saling bergandengan dan memekikkan isi hati rakyat dan meneruskan nafas dan cita- cita bangsa. <br><br>
              <strong>Selamat datang di kampus Pewahyu Rakyat, mari bergerak dari rakyat, untuk rakyat, dan oleh rakyat!</strong>
            </p>
            </div>
          </div>
          <div class="faq">
            <div class="question">
              <h2 class="title" style="text-align:left;cursor:pointer;">Spirit Utama</h2>
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
              <p>&emsp;&emsp;&emsp;Student Day 2021 Universitas Udayana membawa spirit utama kebangkitan dengan harapan di Student Day 2021 Universitas Udayana dapat membangkitkan kembali suasana Student Day yang bergelora dan membangkitkan kembali antusias mahasiswa baru dalam melangkahkan kaki untuk menyambut gerbang kehidupan mahasiswa dengan penuh semangat yang menggebu. Dengan spirit utama kebangkitan juga harapannya seluruh panitia Student Day 2021 Universitas Udayana dapat bersama-sama merealisasikan Student Day 2021 Universitas Udayana dengan penuh antusias dan semangat yang menggelora. Berfokus pada spirit utama kebangkitan, maka Student Day 2021 Universitas Udayana akan mengakulturasikan penanaman nilai-nilai dengan perayaan yang bergelora, sehingga mampu memancing semangat mahasiswa baru untuk mendengarkan dan memahami lebih dalam makna nilai-nilai yang disampaikan</p>
            </div>
          </div>
          <div class="faq">
            <div class="question">
              <h2 class="title" style="text-align:left;cursor:pointer;">Tema dan Logo</h2>
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
              <p>&emsp;&emsp;&emsp;Logo Student Day 2021 Universitas Udayana adalah Kayon. Kayon sebagai lambang kebangkitan dari Student Day 2021 Universitas Udayana, kayon sendiri memiliki pemaknaan sebagai sebuah pembuka atau awal baru, sama halnya dengan Student Day 2021 Universitas Udayana merupakan pembuka/awal baru dari kehidupan mahasiswa di Universitas Udayana, kebangkitan memiliki arti perubahan kearah yang lebih baik, perjuangan, awal mula, berdiri kokoh, serta semangat baru, layaknya sebuah kayon yang juga memiliki makna awal baru yang digunakan sebagai pembuka dan digerakkan dengan dinamis sebagai makna sebuah semangat baru yang digunakan untuk memulai atau membangkitkan antusias dalam membuka perjalanan panjang sebuah petualangan/cerita</p>
            </div>  
          </div>
          <a onclick="nmodaldesclogo()" style="font-weight:bold;cursor: pointer;">Kembali ke Home</a>
        </div>
      </div>
@endsection