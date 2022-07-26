<?php

$page="Peta Unud";

?>



@extends('layouts.template')

@section('content')

    <section id="detail-peta" class="peta-bukit" style="background-color: #126b61;">

      <div class="container">

        <h1 class="title text-center" style="color:#fff;">Peta Kampus Udayana</h1>

        <p class="text-center" style="color:#fff;">Klik node dari 3 kampus dalam peta untuk melihat maps kampus yang lebih spesifik</p>

        <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="mt-5 aos-init aos-animate">

        <div id="background" class="aos-init aos-animate" data-aos="zoom-in-up">

          <img src="asset/maps kampus/PETA UNUD-03.png" alt="denah-kampus-bukit" class="center-block img-responsive">

          <!-- Start Node Jimbaran -->

          <div class="node node-a">

            <a href="https://app.lapentor.com/sphere/virtual-maps-student-day-universitas-udayana-2021-1628225592?scene=610d34fbf2fb9f165f38aee2" target='_blank'><i class="fas fa-map-marker-alt node-detail" style="color:red;"></i></a>

          </div>

          <!-- End Node Jimbaran --> 

          <!-- Start Node Sanglah -->

          <div class="node node-b">

           <a href="https://app.lapentor.com/sphere/virtual-maps-student-day-universitas-udayana-2021-1628225592?scene=610e214335893175c14166d5" target="_blank"> <i class="fas fa-map-marker-alt node-detail" style="color:green;"></i></a>

          </div>

          <!-- End Node Sanglah -->

          <!-- Start Node Sudirman -->

          <div class="node node-c">

            <a href="https://app.lapentor.com/sphere/virtual-maps-student-day-universitas-udayana-2021-1628225592?scene=610cc1e5b8072f3f30040c75" target="_blank"><i class="fas fa-map-marker-alt node-detail" style="color:blue;"></i></a>

          </div>

          <!-- End Node Sudirman -->

        </div>

      </div>

    </section>

@endsection