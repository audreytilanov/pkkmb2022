<?php

$page="Panitia";

?>



@extends('layouts.template')

@section('content')
<style>
     #judulmisi{
    margin: 0;
    /* padding: 0; */
    background-attachment: fixed!important;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    text-align: center;
    background: url("../asset/2022/bg/galeri.png");

}

.detpodcast h1{
    font-size: 45px;
    width: 100%;
    /* color: #fff!important; */
    font-weight:650;
    font-family: Poppins;
}

.detpodcast .h1misi{
    font-size: 60px;
    width: 100%;
    /* color: #fff!important; */
    font-weight:650;
    font-family: Poppins;
}
              	
</style>
<section id="judulmisi" style="justify-content:center; display:flex; align-items:center;">
        
 <div class="container" >

        <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right" data-aos-delay="400"><span>PANITIA PKKMB UNIVERSITAS UDAYANA 2022</span></h1>
          <br>
          <br>
        <a class="down-panitia" href="#sc-panitia"  style="font-weight:bold;cursor: pointer; padding: 10px 30px; border: 2px solid rgba(0,0,0.8); display:inline-block;color:#000!important; background-color:#fff;box-shadow: 1px 2px 2px 2px rgba(0,0,0,0.4); transform:scale(1);transition: all .5s ease;">
	Lets Get Started
	<style>
	.down-panitia:hover{
    		transform:scale(1.2);
	}

	</style>
	</a>
  </div>
</section>




    <!-- SC Team -->

    <section id="sc-panitia">

      <div class="container mt-100 mt-60">

        <div class="row justify-content-center">

            <div class="col-12">

                <div class="section-title text-center mb-4 pb-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">  

                  <h2 class="mb-2 font-weight-bold">STEERING COMMITTEE</h2>

                  <p class="text-muted para-desc mx-auto mb-0">Penasihat dan Pengarah dalam PKKMB 2022 Universitas Udayana</p>

                </div>

            </div><!--end col-->

        </div><!--end row-->

        <div class="row">

          @foreach ($data as $list_panitia)

          @if ($list_panitia->divisi == "sc")

          <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team text-center rounded position-relative overflow-hidden">

              <div class="position-relative overflow-hidden m-2">    

                <img width="250px" src="../asset/panitia/<?php echo $list_panitia->photo ?>" class="img-fluid" alt="">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">

                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold"><?php echo $list_panitia->nama ?></h6>

              </div>

            </div>

          </div><!--end col-->

          @endif

          @endforeach

        </div>

      </div>

    </section>





    <!-- INTI Team -->

    <section id="sc-panitia">

      <div class="container mt-100 mt-60">

        <div class="row justify-content-center">

            <div class="col-12">

                <div class="section-title text-center mb-4 pb-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">  

                  <h2 class="mb-2 font-weight-bold">INTI</h2>

                  <p class="text-muted para-desc mx-auto mb-0">Pengurus dan Pengelola Utama dari PKKMB 2022 Universitas Udayana</p>

                </div>

            </div><!--end col-->

        </div><!--end row-->

        <div class="row">

          <div class="col-lg-6 col-md-6 col-12 mx-auto mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team text-center rounded position-relative overflow-hidden">

              <div class="position-relative overflow-hidden m-2">    

                <img width="250px" src="../asset/panitia/inti/Ketua.png" class="img-fluid" alt="">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">


                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold">Valleryo Victorious (Ketua)</h6>

              </div>

            </div>

          </div><!--end col-->

        </div>

        <!-- end row -->

        <div class="row">

          @foreach ($data as $list_panitia)

          @if ($list_panitia->divisi == "inti" && $list_panitia->jabatan != "Ketua")

          <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team text-center rounded position-relative overflow-hidden">

              <div class="position-relative overflow-hidden m-2">    

                <img src="../asset/panitia/<?php echo $list_panitia->photo ?>" class="img-fluid" alt="<?php echo $list_panitia->slug ?>">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">

                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold"><?php echo $list_panitia->nama ?></h6>

              </div>

            </div>

          </div><!--end col-->

          @endif

          @endforeach

        </div>

      </div>

    <!-- End INTI Team -->

    </section>





    <!-- Koordinator Team -->

    <section id="sc-panitia">

      <div class="container mt-100 mt-60">

        <div class="row justify-content-center">

            <div class="col-12">

                <div class="section-title text-center mb-4 pb-2 aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">  

                  <h2 class="mb-2 font-weight-bold">Koordinator</h2>

                  <p class="text-muted para-desc mx-auto mb-0">Pengelola Sektor Tertentu dalam Operasional PKKMB 2022 Universitas Udayana</p>

                </div>

            </div><!--end col-->

        </div><!--end row-->

        <div class="row">

          @foreach ($data as $list_panitia)

          @if ($list_panitia->jabatan == "koor")

          <div class="col-lg-4 col-md-4 col-12 mx-auto  mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team card-koor text-center rounded position-relative overflow-hidden" style="cursor:pointer">

              <div class="position-relative overflow-hidden m-2">    

                <img width="250px" src="../asset/panitia/<?php echo $list_panitia->photo ?>" class="img-fluid"  alt="">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">

                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold"><?php echo $list_panitia->nama ?></h6>

              </div>

            </div>

          </div><!--end col-->

          @endif

          @endforeach

        </div>

      </div>

    <!-- End Koordinator Team -->

    </section>





    <!-- Developer Team -->

    <section id="sc-panitia" style="margin-bottom:10%;">

      <div class="container mt-100 mt-60">

        <div class="row justify-content-center">

            <div class="col-12">

                <div class="section-title text-center mb-4 pb-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">  

                  <h2 class="mb-2 font-weight-bold">Web Developer</h2>

                  <p class="text-muted para-desc mx-auto mb-0">Pembuatan dan Pemeliharaan Website PKKMB 2022 Universitas Udayana</p>

                </div>

            </div><!--end col-->

        </div><!--end row-->

        <div class="row">

          <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team text-center rounded position-relative overflow-hidden">

              <div class="position-relative overflow-hidden m-2">    

                <img width="250px" src="../asset/panitia/web dev/Audrey.png" class="img-fluid" alt="">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">

                    

                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold">Audrey Tilanov</h6>

              </div>

            </div>

          </div><!--end col-->



          <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">

            <div class="team text-center rounded position-relative overflow-hidden">

              <div class="position-relative overflow-hidden m-2">    

                <img width="250px" src="../asset/panitia/web dev/Taksa.png" style="filter:brightness(0.8)" class="img-fluid" alt="">

                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">

                  <li class="list-inline-item">

                    

                  </li>  

                </ul><!--end icon-->

              </div>

              <div class="content-panitia p-4 bg-light-dark">

                <h6 class="mb-0 font-weight-bold">Taksa Wibawa</h6>

            </div>

          </div>

        </div><!--end col-->

      </div>

    <!-- End Developer Team -->

    </section>





    <!-- Modal Detail Paguyuban -->

    <div class="modal fade" id="detailPanitia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">

        <div class="modal-content" style="border-radius:30px; background-image: url('../asset/umum/modal-ormawa-2.jpeg'); background-position:center!important;color:white; background-repeat:no-repeat; background-size:cover">

          <div class="modal-header">

            <h5 class="modal-title title mx-auto" id="panitiaTitle"></h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>

          <div class="modal-body container-modal" id="panitiaBody" style="padding:4vw;">

          </div>

        </div>

      </div>

    </div>







@endsection