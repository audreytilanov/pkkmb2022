<?php
$page="Forum Agama & Paguyuban";
?>

@extends('layouts.template')
@section('content')
    <section id="desc-pnfa">
      <div class="container">
        <div class="row header-page" style="margin-bottom: 80px;">
          <div class="col my-auto">
            <ul >
              <li><a href="/"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right" style="color:#000!important;"><span class="ormawa">Beranda</span></a>&emsp;</li>
              <li><a class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right" style="color:#000!important;"><span>| </span></a></li>
              <li>&emsp;<a href="#"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right" style="color:#000!important;"><span class="ormawa">Ormawa</span></a></li>
            </ul>
            <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
          </div>
        </div>
        <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Forum Agama  & Paguyuban </span><span>Universitas Udayana</span></h1>
        <div class="row">
          <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
            <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aut officiis, voluptate architecto, ducimus expedita placeat error incidunt consequatur suscipit fugiat enim? Obcaecati, pariatur corrupti dolor autem eos et modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, necessitatibus quaerat sed doloremque maiores dolorem autem, itaque commodi, repudiandae molestias facere accusantium aperiam iste accusamus ab non pariatur quam? Placeat!<br>
            <br>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nam ipsam nesciunt, ut a laborum impedit optio quia amet distinctio praesentium nihil, similique quibusdam consectetur aliquid cumque necessitatibus hic.
            </p>
            <p></p>
            <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
            <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">Untuk info lebih lanjut mengenai <strong onclick="modalDescPaguyuban()" style="cursor:pointer;">Paguyuban di Universitas Udayana</strong>, klik pada gambar peta berikut</p>
          </div>
          <div class="col-sm-12 col-lg-6 py-2 my-auto text-center" >
            <img onclick="modalDescPaguyuban()" src="{{asset('asset/paguyuban/Peta Paguyuban-01.png')}}" alt="Logo 13 Fakultas" class="img-fluid aos-init aos-animate maps-paguyuban" style="cursor: pointer; filter:brightness(1.2);margin-top:60px;" data-aos="zoom-in-up" data-aos-delay="200" >
            <div class="swiper-container">
              <div class="swiper-wrapper">
                @foreach ($data_forumagama as $list_forumagama)
                <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/<?php echo $list_forumagama->logo ?>');cursor:pointer;" paguyuban></div>
                <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/PROTESTAN.png');cursor:pointer"></div>
                <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/KMK.png');cursor:pointer;"></div>
                <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/FPMI.png');cursor:pointer;"></div>
                <div class="swiper-slide paguyuban-popup" style="background-image: url('../asset/paguyuban/FPMHD.png');cursor:pointer;"></div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Modal -->
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
            @foreach ($data_paguyuban as $list_paguyuban)
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
            @endforeach
          </div>
        </div>
      </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="detailPaguyuban" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius:30px;">
          <div class="modal-header">
            <h5 class="modal-title title" id="paguyubanTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container-modal" id="paguyubanBody">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailFA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius:30px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Title Forum Agama</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container-modal" id="exampleModalLongBody">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, quisquam? Ad perferendis, quisquam assumenda hic non expedita provident asperiores corporis tenetur quaerat veritatis praesentium saepe eligendi esse voluptates quibusdam quia?
          </div>
        </div>
      </div>
    </div>
@endsection