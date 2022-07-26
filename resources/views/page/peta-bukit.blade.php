<?php
$page="Peta - Peta Bukit";
?>

@extends('layouts.template')
@section('content')
    <section id="detail-peta" class="peta-bukit" style="background-color: #126b61;">
      <div class="container">
        <h1 class="title text-center" style="color:#fff;">Peta Kampus Bukit</h1>
        <p class="text-center" style="color:#fff;">Klik gambar building dalam peta untuk mengetahui penjelasan lebih lanjut</p>
        <hr data-aos="fade-right" data-aos-delay="200" style="border-top: 5px solid #fff;" class="mt-5 aos-init aos-animate">
        <div id="background" class="aos-init aos-animate" data-aos="zoom-in-up">
          <img src="{{asset('../asset/maps kampus/BUKIT-02.png')}}"  style="margin-left:-7%;max-height:130vh;" alt="denah-kampus-bukit" class="center-block img-responsive">
          <!-- Start Sektor C -->
          <div id="sektor-c">
            <div class="buildings building5" data-tooltip="Fakultas Pariwisata">
              <img class="icon-building" src="../asset/maps kampus/bukit/FPAR.gif" alt="FPAR" data-title="Fakultas Pariwisata">
            </div>
            <!-- <div class="buildings building6" data-tooltip="FH">
              <img class="icon-building" src="asset/maps kampus/bukit/FH.png" alt="FH">
            </div> -->
            <div class="buildings building1" data-tooltip="FKP">
              <img class="icon-building" src="../asset/maps kampus/bukit/FKP.png" alt="FKP" data-title="FKP">
            </div>
            <div class="buildings building2" data-tooltip="Fakultas Teknologi Pertanian">
              <img class="icon-building" src="../asset/maps kampus/bukit/FTP.gif" alt="FTP" data-title="Fakultas Teknologi Pertanian">
            </div>
            <div class="buildings building3" data-tooltip="FEB">
              <img class="icon-building" src="../asset/maps kampus/bukit/FEB.gif" alt="FEB" data-title="Fakultas Ekonomi dan Bisnis">
            </div>
            <div class="buildings building4" data-tooltip="FMIPA">
              <img class="icon-building" src="../asset/maps kampus/bukit/FMIPA.png" alt="FMIPA" data-title="Fakultas MIPA">
            </div>
          </div>
          <!-- End Sektor C -->
          <!-- Start Sektor A -->
          <div id="sektor-a">
            <div class="buildings building1" data-tooltip="RSPTN" >
              <img class="icon-building" src="../asset/maps kampus/bukit/RSPTN.png" alt="RSPTN"  data-title="RSPTN" data-body='<img class="mx-auto d-block" src="../asset/umum/15.jpg" alt="apa ayok" style="width: 90%; margin-bottom:15px">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis minus provident in quisquam dolores non! Commodi, officiis, temporibus culpa illo officia ipsa, voluptas alias vel quas cupiditate exercitationem velit placeat?
              <br><br>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores animi sapiente rerum soluta laboriosam provident iste aspernatur hic. Sit dolore, pariatur animi similique cum iste ullam blanditiis asperiores quaerat ducimus!
            </p>'>
            </div>
            <div class="buildings building2" data-tooltip="RS Jimbaran" >
              <img class="icon-building" src="../asset/maps kampus/bukit/RS Jimbaran.png" alt="RS Jimbaran" data-title="RS Jimbaran">
            </div>
            <div class="buildings building3" data-tooltip="Candi Bentar Udayana" >
              <img class="icon-building" src="../asset/maps kampus/bukit/Candi Bentar Udayana.png" alt="Gapura" data-title="Candi Bentar Udayana">
            </div>
            <div class="buildings building4" data-tooltip="Fakultas Peternakan" >
              <img class="icon-building" src="../asset/maps kampus/bukit/Fapet.png" alt="Fapet" data-title="Fakultas Peternakan">
            </div>
            <div class="buildings building5" data-tooltip="UICC" >
              <img class="icon-building" src="../asset/maps kampus/bukit/UICC.png" alt="UICC" data-title="UICC">
            </div>
            <div class="buildings building6" data-tooltip="Fakultas Pertanian" >
              <img class="icon-building" src="../asset/maps kampus/bukit/FP.png" alt="FP" data-title="Fakultas Pertanian">
            </div>
            <div class="buildings building8" data-tooltip="Pura Maha Widya Saraswati" >
              <img class="icon-building" src="../asset/maps kampus/bukit/Pura Maha Widya.png" alt="Pura Widya Saraswati" data-title="Pura Maha Widya Saraswati">
            </div>
            <div class="buildings building7" data-tooltip="Fakultas Teknik" >
              <img class="icon-building" src="../asset/maps kampus/bukit/FT.png" alt="Fakultas Teknik" data-title="Fakultas Teknik">
            </div>
          </div>
          <!-- End Sektor A -->
          <!-- Start Sektor B -->
          <div id="sektor-b">
            <div class="buildings building1" data-tooltip="WS">
              <img class="icon-building" src="../asset/maps kampus/bukit/WS.png" alt="WS" data-title="WS">
            </div>  
            <div class="buildings building2" data-tooltip="Rektorat">
              <img class="icon-building" src="../asset/maps kampus/bukit/Rektorat.png" alt="Rektorat" data-title="Rektorat">
            </div>  
            <div class="buildings building3" data-tooltip="Teknik Sipil">
              <img class="icon-building" src="../asset/maps kampus/bukit/teknik sipil.png" alt="Teknik Sipil" data-title="Teknik Sipil">
            </div>  
            <div class="buildings building4" data-tooltip="LPPM">
              <img class="icon-building" src="../asset/maps kampus/bukit/LPPM.png" alt="LPPM" data-title="LPPM">
            </div> 
            <div class="buildings building5" data-tooltip="USDI">
              <img class="icon-building" src="../asset/maps kampus/bukit/USDI.png" alt="USDI" data-title="USDI">
            </div> 
            <div class="buildings building6" data-tooltip="Perpustakaan">
              <img class="icon-building" src="../asset/maps kampus/bukit/Perpustakaan.png" alt="Perpustakaan" data-title="Perpustakaan">
            </div> 
          </div>
          <!-- End Sektor B --> 
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