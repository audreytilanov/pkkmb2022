<?php
$page="Fakultas";
?>

@extends('layouts.template')
@section('content')
      <!-- Start Header Page -->
      <!-- <section class="header-page">
        <div class="container">
          <div class="row">
            <div class="col my-auto">
              <ul>
                <li><a href="/"class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span>Beranda&emsp;| </span></a></li>
                <li><a href="/ormawa"class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span>&emsp;Ormawa</span></a></li>
              </ul>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
            </div>
          </div>
        </div>
      </section> -->
      
      <!-- Start Section Penjelasan Logo -->
      <section id="desc-fakultas">
        <div class="container">
          <div class="row header-page" style="margin-bottom: 80px;">
            <div class="col my-auto">
              <ul >
                <li><a href="/"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span class="ormawa">Beranda</span></a>&emsp;</li>
                <li><a href="/"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span>| </span></a></li>
                <li>&emsp;<a href="#"class="title ormawa mb-0 aos-init aos-animate" data-aos="fade-right"><span class="ormawa">Ormawa</span></a></li>
              </ul>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
            </div>
          </div>
          <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">Fakultas di </span><span>Universitas Udayana</span></h1>
          <div class="row">
            <div class="col-sm-12 col-lg-6 py-2 my-auto text-center" >
              <img onclick="modalDescFakultas()" src="../asset/fakultas/13fakultas.png" alt="Logo 13 Fakultas" class="img-fluid aos-init aos-animate" style="cursor: pointer; filter:brightness(1.2);margin-top:60px;" data-aos="zoom-in-up" data-aos-delay="200" >
            </div>
            <div class="col-sm-12 col-lg-6 py-2 my-auto aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:50px;text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aut officiis, voluptate architecto, ducimus expedita placeat error incidunt consequatur suscipit fugiat enim? Obcaecati, pariatur corrupti dolor autem eos et modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, necessitatibus quaerat sed doloremque maiores dolorem autem, itaque commodi, repudiandae molestias facere accusantium aperiam iste accusamus ab non pariatur quam? Placeat!<br>
              <br>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nam ipsam nesciunt, ut a laborum impedit optio quia amet distinctio praesentium nihil, similique quibusdam consectetur aliquid cumque necessitatibus hic.
              </p>
              <p></p>
              <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="aos-init aos-animate">
              <p data-aos="fade-right" data-aos-delay="400" class="aos-init aos-animate" style="margin-top:10px; text-align:justify;">Untuk info lebih lanjut mengenai <strong onclick="modalDescFakultas()" style="cursor:pointer;">Fakultas di Universitas Udayana</strong>, klik pada gambar logo</p>
            </div>
          </div>
        </div>
      </section>






      <div class="popup" id="list-fakultas">
        <div class="body-popup" style="width: 100%; height:100%;background:rgba(0,0,0,0.2)!impotant;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="text-white mt-4 mb-2 py-2">Fakultas di <strong>Universitas Udayana</strong></h1>
              </div>
              @foreach ($data as $list_fakultas)
              <div class="col-4 col-md-3 my-2" style="margin-bottom: 20px!important;">
                <a href="{{ URL::to('fakultas/'.$list_fakultas->id) }}"><img src="../asset/fakultas/{{ $list_fakultas->logo }}" alt="" class="d-block mx-auto img-fluid" width="100%"></a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>


@endsection