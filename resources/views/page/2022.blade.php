<?php
$page="Home";
?>

@extends('layouts.template')
@section('content')
    <section id="cover">
        <section id="banner">
            <div class="container">
                <div class="img-banner" >
                    <div data-relative-input="true" id="scene">
                        <div data-depth="0.2"><img src="{{ URL::Asset('asset/2022/logo.png') }}" alt="logo-sdu-banner" ></div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#dharma-patni">
            <div class="scroll-down"></div>
        </a>

      <!-- Start Section Dharma Patni -->
        <section id="dharma-patni">
            <img class="dharma aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="300" src="{{ URL::asset('asset/2022/darpat/darma.png') }}" height="300" alt="dharma-masker">
            <img class="patni aos-animate" data-aos="zoom-in-up"  data-aos-delay="700" src="{{ URL::asset('asset/2022/darpat/patni.png') }}" height="300" alt="patni-masker">
        </section>
        

      <!-- Start Section Penjelasan Logo -->
        <section id="desc-logo" style="background-image: url('../asset/umum/bg-penjelasan.jpg');background-size: cover;background-attachment: fixed;color: #fff;">
            <div class="container">
                <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right">
                    <span class="font-weight-normal"></span><span>PKKMB 2022 UNIVERISTAS UDAYANA</span>
                </h1>
                <div class="row">
                    <div class="col-sm-12 col-lg-12 py-2 my-auto text-center">
                        <img onclick="modaldesclogo()" src="{{ URL::Asset('asset/2022/logo.png') }}" alt="Logo SDU" class="img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200">
                    </div>
                    <div class="col-sm-12 col-lg-12 py-2 my-auto text-center aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                        <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;">&emsp;&emsp;&emsp;<b>PKKMB 2022 Universitas Udayana</b> merupakan akronim dari Pengenalan Kehidupan Kampus bagi Mahasiswa Baru khususnya di Universitas Udayana. Berbeda dari tahun sebelumnya yang mengusung nama kegiatan  Student Day Universitas Udayana, tahun ini masa orientasi mahasiswa baru hadir dengan nama yang baru, yaitu PKKMB 2022 Universitas Udayana. Kegiatan ini hadir sebagai wadah untuk menanamkan nilai-nilai positif dalam diri seorang mahasiswa dan merupakan titik awal dalam dunia perkuliahan. Pada titik ini, mahasiswa akan memperoleh berbagai cuplikan mengenai kehidupan di kampus yang harapannya dapat membantu mahasiswa baru dalam mengenali, memahami, dan mengembangkan diri melalui seluruh rangkaian kegiatan yang telah dirancang.<br>
                        <br>
                        &emsp;&emsp;&emsp;Melihat peran penting mahasiswa dalam tatanan masyarakat untuk memajukan bangsa dan negara, maka PKKMB 2022 Universitas Udayana hadir untuk membekali mahasiswa baru agar mampu menghadapi kehidupan kampus serta melakukan penanaman nilai, gagasan, pembentukan karakter, dan pengembangan keterampilan soft skills dan hard skills dengan harapan dapat menjadi penunjang dalam mengembangkan kemampuan mahasiswa dalam menjalani proses perkuliahan dan bahkan dalam kehidupan bermasyarakat dan bernegara. 
                        </p>
                        <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
                        <button onclick="modaldesclogo()" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">
                            <strong style="cursor:pointer;">Selengkapnya</strong></span>
                        </button>
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
              <div class="timeline">
                <div class="outer">
                  <div class="cardtime">
                    <div class="infotime">
                      <h3 class="titletime">MAHASISWA DITERIMA DI UNIVERSITAS UDAYANA</h3>
                    </div>
                  </div>
                  <div class="cardtime">
                    <div class="infotime">
                      <h3 class="titletime">TEMU PANGUS - 25 JULI</h3>
                      <p>Temu Pangus merupakan rangkaian kegiatan pertama 
                        yang dilakukan para mahasiswa baru sebagai ruang
                        adaptasi dengan mahasiswa baru lainnya ditemani
                        kakak-kakak pendamping gugus.</p>
                    </div>
                  </div>
                  <div class="cardtime">
                    <div class="infotime">
                      <h3 class="titletime">MENTORING - 2 AGUSTUS</h3>
                      <p>Mentoring merupakan rangkaian kegiatan kedua yang dihadiri para mentor hebat dengan berbagai materi yang tentunya akan sangat berguna untuk para mahasiswa baru</p>
                    </div>
                  </div>
                  <div class="cardtime">
                    <div class="infotime">
                      <h3 class="titletime">CAPACITY BUILDING - 3 AGUSTUS</h3>
                      <p>Capacity Building merupakan  rangakaian kegiatan ketiga yang bertujuan untuk membentuk karakter mahasiswa baru dengan mendatangkan pembicara yang keren dan seru banget tentunya!</p>
                    </div>
                  </div>
                  <div class="cardtime">
                    <div class="infotime">
                      <h3 class="titletime">HARI-H PKKMB - 8-9 AGUSTUS</h3>
                      <p>PKKMB 2022 merupakan puncak kegiatan para mahasiswa baru dan tahap terakhir sebelum akhirnya resmi menjadi mahasiswa di Universitas Udayana.</p>
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
                <h1 class="title title-animation aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal" ></span>PLAYLIST<br>PKKMB 2022 UNIVERISTAS UDAYANA</h1>
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
                        <div class="buttons row" style="padding: 0 40px 0 40px;">
                            <div class="loop-track" onclick="loopTrack()" style="margin-top: 20px;"><i class="fas fa-redo i-size2" style="cursor: pointer;"></i></div>
                            <div class="prev-track" onclick="prevTrack()" style="margin-top: 20px; cursor:pointer"><i class="fa fa-step-backward i-size2"></i></div>
                            <div class="playpause-track" onclick="playpauseTrack()" style="cursor:pointer;"><i class="fa fa-play-circle i-size5"></i></div>
                            <div class="next-track" onclick="nextTrack()" style="margin-top: 20px; cursor:pointer;"><i class="fa fa-step-forward i-size2"></i></div>
                            <div class="pl-3" style="margin-top: 20px;"><i class="fas fa-bars i-size2" id="accordion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;"></i></div>
                        </div>
                        <br>
                        <div class="card col-12 mx-auto" style="width:92%;">
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
                                        <li onclick="playToTrack(5)" style="cursor: pointer;">Jaya Udayana</li>
                                        <hr>
                                        <li onclick="playToTrack(3)" style="cursor: pointer;">Mars Mahasiswa</li>
                                        <hr>
                                        <li onclick="playToTrack(4)" style="cursor: pointer;">Buruh tani</li>
                                        <hr>
                                        <li onclick="playToTrack(6)" style="cursor: pointer;">Darah juang</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider_container" style="padding: 0 20px 0 20px;">
                            <div class="current-time">00:00</div>
                            <div class="total-duration">00:00</div>
                            <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">             
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
                        <h1 class="title">PKKMB 2022 Universitas Udayana</h1>
                        <img src="{{ URL::asset('asset/2022/logo.png') }}" alt="">
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
                                <p>&emsp;&emsp;&emsp;Selamat datang Ksatria Muda Udayana, selamat datang di Kampus Pewahyu Rakyat.  Kini gerbang pendidikan berikutnya telah terbuka bagi kalian yang akan meneruskan tonggak pendidikan. Melanjutkan tonggak pendidikan tersebut tentunya membutuhkan perjuangan yang besar, dan perjuangan ini datang dari kesadaran akan pentingnya mengaktualisasikan ilmu untuk didedikasikan dalam kehidupan bermasyarakat. Ketahuilah bahwa beragam kesempatan yang akan kalian dapatkan di dunia perkuliahan bukanlah sebuah kesempatan yang dimiliki oleh setiap orang. Kesempatan tersebut menjadi sebuah jembatan peralihan untuk mengenal kata “keistimewaan”. Keistimewaan ini pada akhirnya membawa kita pada tanggung jawab moral sebagai inisiator perubahan dalam masyarakat. Mungkin timbul pertanyaan dalam benak kalian mengenai apa yang menjadi dasar keistimewaan seorang mahasiswa. Mahasiswa merupakan insan yang memiliki segudang wadah untuk terus berakselerasi dalam mengembangkan diri, wadah pengembangan yang jika diaktualisasikan dalam kehidupan bermasyarakat akan menjadi sebuah titik temu untuk mencapai tujuan Pendidikan itu sendiri. Maka dari itu ingat! Bahwa hari ini kita hadir tidak hanya sekedar untuk mencari ilmu saja, melainkan membawa perubahan dalam masyarakat. Kuatkan tekadmu! karena kini kalian telah menjadi bagian dalam perjalanan bangsa ini!
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
                                <p>&emsp;&emsp;&emsp;Dunia perkuliahan merupakan fase istimewa seseorang karena dengan hal tersebut, mahasiswa mendapatkan sebuah kesempatan untuk dapat menggali berbagai hal yang akhirnya menuntutnya untuk mampu memainkan peran dalam tatanan masyarakat. Hal ini yang kemudian membuat PKKMB 2022 membawa spirit utama Keistimewaan. Keistimewaan merupakan beragam variabel yang akan didapatkan oleh mahasiswa dalam fase mengemban gelar mahasiswa. Spirit utama yang dibawa dalam PKKMB 2022 ini menjadi titik dasar untuk memantik kembali spirit yang berada dalam nurani tiap mahasiswa dalam menciptakan empati untuk menyalurkan tiap keistimewaan yang tidak dimiliki oleh semua orang ini. Bahwa pada dasarnya, mahasiswa memiliki hutang moral yang besar pada masyarakat untuk segera dilunaskan. Maka dari itu, spirit utama PKKMB 2022 menjadi sebuah harapan baru agar tiap mahasiswa sadar untuk mengemban tugasnya dalam masyarakat.</p>
                            </div>
                        </div>
                        <div class="faq">
                            <div class="question">
                                <h2 class="title" style="text-align:left;cursor:pointer;">Jargon dan Logo</h2>
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
                                <p>&emsp;&emsp;&emsp;PKKMB 2022 memiliki makna yang harus disadari oleh setiap mahasiswa baru Universitas Udayana. Ksatria Bhavana Cittaning Dharma, memiliki arti bahwa Seorang mahasiswa seharusnya melakukan pengembangan diri dan ketenangan batin yang baik serta mampu menerapkan ilmu pengetahuan dan akal budi pekerti yang cakap dengan berlandaskan kebenaran dan kemakmuran. Maka dari itu, seorang mahasiswa diharapkan untuk mampu membawa perubahan bagi sesamanya, kampus, masyarkat, bangsa, dan negara. Dengan begitu, PKKMB 2022 mampu menghadirkan mahasiswa baru yang bertintelektual dalam mengemban tanggung jawab dalam menerapkan Tri Dharma Perguruan Tinggi. Hal ini tentunya beririsan dengan logo PKKMB 2022 yang berbentuk Keris dengan beragam elemen esensialnya. Elemen-elemen dalam logo tersebut menjadi sebuah titik terang yang kemudian memunculkan harapan bahwa PKKMB 2022 dapat menjadi akselerator dalam menghasilkan mahasiswa yang mampu membawa perubahan sesuai dengan minat dan bidang ilmunya masing-masing</p>
                            </div>  
                        </div>
                        <a onclick="nmodaldesclogo()" style="font-weight:bold;cursor: pointer;">Kembali</a>
                    </div>
                </div>
            </div>
    </section>
@endsection