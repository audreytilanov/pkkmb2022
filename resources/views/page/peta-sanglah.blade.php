<?php
$page="Peta - Peta Sanglah";
?>

@extends('layouts.template')
@section('content')
    <section id="detail-peta" class="peta-sanglah" style="background-color: #126b61;">
      <div class="container">
        <h1 class="title text-center" style="color:#fff;">Peta Kampus Sanglah</h1>
        <p class="text-center" style="color:#fff;">Klik gambar building dalam peta untuk mengetahui penjelasan lebih lanjut</p>
        <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="mt-5 aos-init aos-animate">
        <div id="background" class="aos-init aos-animate" data-aos="zoom-in-up" >
          <img src="../asset/maps kampus/SANGLAH-04.png"alt="denah-kampus-sanglah" class="center-block img-responsive" >
          <!-- Start Sektor A -->
          <div id="sektor-a">
            <div class="buildings building1" data-tooltip="RSUD Sanglah" >
              <img class="icon-building" src="../asset/maps kampus/sanglah/RSUD.png" alt="RSUD Sanglah" data-title="RSUD Sanglah">
            </div>
          </div>
          <!-- End Sektor A -->
          <!-- Start Sektor B -->
          <div id="sektor-b">
            <div class="buildings building1" data-tooltip="Fakultas Hukum">
              <img class="icon-building" src="../asset/maps kampus/sanglah/FH.png" alt="Fakultas Hukum" data-title="Fakultas Hukum">
            </div>  
            <div class="buildings building2" data-tooltip="Fakultas Ilmu Budaya">
              <img class="icon-building" src="../asset/maps kampus/sanglah/FIB.png" alt="Fakultas Ilmu Budaya" data-title="Fakultas Ilmu Budaya">
            </div>  
            <div class="buildings building3" data-tooltip="Asrama">
              <img class="icon-building" src="../asset/maps kampus/sanglah/Asrama.png" alt="Asrama" data-title="Asrama">
            </div>  
          </div>
          <!-- End Sektor B -->
          <!-- Start Sektor C -->
          <div id="sektor-c">
            <div class="buildings building1" data-tooltip="Pasar Sanglah">
              <img class="icon-building" src="../asset/maps kampus/sanglah/pasar sanglah.png" alt="Pasar Sanglah" data-title="Pasar Sanglah">
            </div>
          </div>
          <!-- End Sektor C -->
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