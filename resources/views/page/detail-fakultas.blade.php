<?php
$page="Detail-Fakultas";
?>

@extends('layouts.template')
@section('content')
    <!-- <section id="header-page" class="header-page">
      <div class="container">
        <div class="row">
          <div class="col my-auto">
            <ul>
              <li><a href="/"class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span>Beranda&emsp;| </span></a></li>
              <li><a href="/fakultas"class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span>&emsp;Ormawa</span></a></li>
            </ul>
            <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #000;" class="aos-init aos-animate">
          </div>
        </div>
      </div>
    </section> -->

    <section id="detail-fakultas">
      <div class="container">
        <div class="row">
          <div class=" col-sm-4 my-auto" >
              <img class="logo-detail-fakultas aos-init aos-animate" data-aos="zoom-in-up" src="../asset/fakultas/<?php echo $data->logo?>" alt="">
          </div>
          <div class="col-sm-8 my-auto">
              <h1 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right"><span>{{ $data->nama }}</span></h1>
          </div>
        </div>
        <div class="row mt-5" >
          <div class="col"><?php echo $data->keterangan ?>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
          <h3 class="title title-fakultas mb-0 aos-init aos-animate" data-aos="fade-right" style="text-align: left;"><span>Program Studi</span></h3>
            <?php echo $data->programstudi ?>
          </div>
        </div>
        <?php echo $data->contact ?>
        <a href="{{URL::to('ormawa')}}" style="font-weight:bold;cursor: pointer;">Kembali ke Ormawa</a>   
      </div>
    </section>  
@endsection