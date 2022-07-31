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
          background-image: url('../asset/umum/ukm_pendaftaran.jpg');
          width:400px;
          height:150px;
          border-radius: 100px;
          background-size:cover;
          transition: 0.2s ease;
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
          height:150px;
          border-radius: 100px;
          background-size:cover;
          transition: 0.2s ease;
          cursor: pointer;
          margin-top: 30px;
        }

        .info:hover{
          border:5px solid white;
          z-index: 2;
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
      <section id="desc-fakultas">
        <div class="container">
          <div class="row header-page" style="margin-bottom: 80px;">
            <div class="col my-auto">
              {{-- <ul >
                <li><a href="/"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span class="ormawa">Beranda</span></a>&emsp;</li>
                <li><a href="/"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span>| </span></a></li>
                <li>&emsp;<a href="#"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span class="ormawa">Ormawa</span></a></li>
              </ul> --}}
              {{-- <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate"> --}}
            </div>
          </div>
          <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Fakultas di </span><span>Universitas Udayana</span></h1>
          <div class="row">
            <div class="col-sm-12 col-lg-6 text-center" >
              <img onclick="modalDescFakultas()" src="../asset/fakultas/13fakultas.png" alt="Logo 13 Fakultas" class="img-fluid aos-init aos-animate" style="cursor: pointer; filter:brightness(1.2);margin-top:60px;" data-aos="zoom-in-up" data-aos-delay="200" >
            </div>
            <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;">&emsp;&emsp;&emsp;&emsp;Universitas Udayana memiliki total 13 fakultas yang terdiri dari Fakultas Ilmu Budaya, Fakultas Kedokteran, Fakultas Kedokteran Hewan, Fakultas Pariwisata, Fakultas Pertanian, Fakultas Teknologi Pertanian, Fakultas Peternakan, Fakultas Ekonomi dan Bisnis, Fakultas Hukum, Fakultas Ilmu Sosial dan Ilmu Politik, Fakultas Teknik, Fakultas Matematika dan Ilmu Pengetahuan Alam, dan Fakultas Kelautan dan Perikanan. 
              </p>
              <p></p>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">Untuk info lebih lanjut mengenai <strong onclick="modalDescFakultas()" style="cursor:pointer;color:black!important;">Fakultas di Universitas Udayana</strong>, klik pada gambar logo</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Start Section Paguyuban and Forum Agama -->
      <section id="desc-pnfa">
        <div class="container">
          <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Forum Agama  & Paguyuban </span><span>Universitas Udayana</span></h1>
          <div class="row">
            <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;font-size:20px;">&emsp;&emsp;&emsp;&emsp;Universitas Udayana memiliki 5 Forum Agama yang terdiri dari FPMHD, KMK, KKMK, FPMI, FKMBU dan 8 Paguyuban Daerah yang terdiri dari GAJAYANA, KMOSSAK, IKMM, IKAMI, PMBD, IMMAPA, PAMANAHAN, dan IMSU.
              </p>
              <p></p>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;font-size:20px;">Untuk info lebih lanjut mengenai <strong class="show_info_paguyuban" style="cursor:pointer;">Paguyuban di Universitas Udayana</strong>, klik pada gambar peta berikut</p>
            </div>
            <div class="col-sm-12 col-lg-6 py-2 my-auto text-center" >
              <img style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);" src="{{asset('asset/paguyuban/Peta Paguyuban-01.png')}}" alt="Logo 13 Fakultas" class="img-fluid aos-init aos-animate maps-paguyuban" style="cursor: pointer; filter:brightness(1.2);margin-top:60px;" data-aos="zoom-in-up" data-aos-delay="500" >
              <div class="swiper-container aos-init aos-animate "  data-aos="zoom-in-up" >
                <div class="swiper-wrapper ">
                  @foreach ($data as $list_forumagama)
                  @if ($list_forumagama->jenis_ormawa ==3)
                  <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/<?php echo $list_forumagama->logo ?>');cursor:pointer;" data-title-paguyuban='<strong><?php echo $list_forumagama->singkatan ?></strong>' data-body-paguyuban='<img class="mx-auto d-block" src="../asset/paguyuban/<?php echo $list_forumagama->logo ?>" alt="" style="width: 30%; margin-bottom:30px"><p class="title" style="text-align:center"><?php echo $list_forumagama->nama?></p>
                  <br>
                  <p><?php echo $list_forumagama->keterangan ?></p
                  <p><?php echo $list_forumagama->contact ?></p>'></div>
                  @endif
                  @endforeach
                </div>
                <div class="swiper-pagination"></div>
              </div>
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
                Unit Kegiatan Mahasiswa (UKM) adalah wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian tertentu bagi para anggota-anggotanya. Lembaga ini merupakan partner organisasi kemahasiswaan intra kampus lainnya seperti Senat Mahasiswa dan Badan Eksekutif Mahasiswa, baik yang berada di tingkat program studi, jurusan, maupun universitas. 
              </p>
              <p></p>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
            </div>
            <div class="pi col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <a href="#" onclick="modalcomingsoon2()">
              <div class="pendaftaran">
                
              </div>
            </a>  
            <a onclick="modaldesclogo()" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">
              <strong style="cursor:pointer;">Selengkapnya</strong></span>
            </a>    
            </div>
            
          </div>
        </div>
      </section>




      <!-- MODALLLL COY -->

      <div class="popup" id="list-fakultas">
        <div class="body-popup" style="width: 100%; height:100%;background:rgba(0,0,0,0.2)!impotant;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-white mt-4">Fakultas di <strong>Universitas Udayana</strong></h1>
              </div>
              @foreach ($data as $list_fakultas)
              @if ($list_fakultas->jenis_ormawa == 1)
              <div class="col-4 col-md-3">
                <div class="item-fakultas" style="background-color: #fff; border-radius:20%;margin-bottom:10px;">
                  <a href="{{ URL::to('ormawa/fakultas'.$list_fakultas->id) }}"><img src="../asset/fakultas/{{ $list_fakultas->logo }}" alt="" class="d-block mx-auto img-fluid" width="100%"></a>
                </div>
              </div>
              @endif
              @endforeach
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
            <img src="{{asset('asset/paguyuban/Maps Tanpa Logo-02.png')}}" alt="peta-paguyuban" class="d-block mx-auto img-fluid">
            <?php 
            $a=1;
            ?>
            @foreach ($data as $list_paguyuban)
            @if ($list_paguyuban->jenis_ormawa ==2)
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
        <div class="modal-content" style="border-radius:30px; background-image: url('../asset/umum/latar-popup-1.jpeg'); background-position:center;color:white; background-repeat:no-repeat; background-size:cover">
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