<?php
$page="Peta - Peta Kamsud";
?>

@extends('layouts.template')
@section('content')
    <section id="detail-peta" class="peta-kamsud" style="background-color: #126b61;">
      <div class="container">
        <h1 class="title text-center" style="color:#fff;">Peta Kampus Kamsud</h1>
        <p class="text-center" style="color:#fff;">Klik gambar building dalam peta untuk mengetahui penjelasan lebih lanjut</p>
        <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="mt-5 aos-init aos-animate">
        <div id="background" class="aos-init aos-animate" data-aos="zoom-in-up" >
          <img src="../asset/maps kampus/KAMSUD-03.png" style="width:70%;display:block; margin-right:auto; margin-left:auto;" alt="denah-kampus-kamsud" class="center-block img-responsive">
          <!-- Start Sektor A -->
          <div id="sektor-a">
            <div class="buildings building1" data-tooltip="Rumah Dinas" >
              <img class="icon-building"   src="../asset/maps kampus/kamsud/rumah dinas.png" alt="rumas dinas" data-title="Rumah Dinas">
            </div>
            <div class="buildings building2" data-tooltip="Gedung AGRO">
              <img class="icon-building" src="../asset/maps kampus/kamsud/AGRO.png" alt="Agro" data-title="Gedung Agro">
            </div>
            <div class="buildings building3" data-tooltip="Fakultas Teknik">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FT.png" alt="FT" data-title="Fakultas Teknik">
            </div>
            <div class="buildings building4" data-tooltip="FPAR">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FPAR.png" alt="FPAR" data-title="Fakultas Pariwisata">
            </div>
          </div>
          <!-- End Sektor A -->
          <!-- Start Sektor B -->
          <div id="sektor-b">
            <div class="buildings building1" data-tooltip="Lab Bahasa">
              <img class="icon-building" src="../asset/maps kampus/kamsud/Lab bahasa.png" alt="Laboratorium Bahasa" data-title="Lab Bahasa">    
            </div>
            <div class="buildings building2" data-tooltip="FISIP">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FISIPP.png" alt="FISIP" data-title="Fakultas Ilmu Sosial dan Ilmu Politik">
            </div>
            <div class="buildings building3" data-tooltip="Kopma">
              <img class="icon-building" src="../asset/maps kampus/kamsud/Kopma.png" alt="Kopma" data-title="Kopma">
            </div>
            <div class="buildings building5" data-tooltip="FISIP">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FISIP.png" alt="Fisip" data-title="Fakultas Ilmu Sosial dan Ilmu Politik">
            </div>
            <div class="buildings building4" data-tooltip="GDLN">
              <img class="icon-building" src="../asset/maps kampus/kamsud/GDLN.png" alt="GDLN" data-title="GDLN">
            </div>
            <div class="buildings building6" data-tooltip="Merajan">
              <img class="icon-building" src="../asset/maps kampus/kamsud/MERAJAN.png" alt="Merajan" data-title="Merajan">
            </div>
            <div class="buildings building7" data-tooltip="Gedung Pascasarjana">
              <img class="icon-building" src="../asset/maps kampus/kamsud/GEDUNG PASCASARJANA.png" alt="Gedung Pascasarjana" data-title="Gedung Pascasarjana">
            </div>
            <div class="buildings building8" data-tooltip="Parkit Tingkat">
              <img class="icon-building" src="../asset/maps kampus/kamsud/Parkir Tingkat.png" alt="Parkir Tingkat" data-title="Parkir Tingkat">
            </div>
          </div>
          <!-- End Sektor B -->
          <!-- Start Sektor C -->
          <div id="sektor-c">
            <div class="buildings building1" data-tooltip="Fakultas Kedokteran">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FK.png" alt="Fakultas Kedokteran" data-title="Fakultas Kedokteran">
            </div>
            <div class="buildings building2" data-tooltip="Fakultas Kedokteran Hewan">
              <img class="icon-building" src="../asset/maps kampus/kamsud/FKH.png" alt="Fakultas Kedokteran Hewan" data-title="Fakultas Kedokteran Hewan">
            </div>
          </div>
          <!-- End Sektor C -->
          <!-- Start Sektor D -->
          <div id="sektor-d">
            <div class="buildings building1" data-tooltip="FEB">
              <img class="icon-building" src="../asset/maps kampus/kamsud/feb.png" alt="FEB" data-title="Fakultas Ekonomi dan Bisnis">
            </div>
          </div>
          <!-- End Sektor D -->
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="wtf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius:30px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body container-modal" id="exampleModalLongBody" style="padding: 4vw;">
          </div>
        </div>
      </div>
    </div>
@endsection