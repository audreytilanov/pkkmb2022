<?php

$page="Misi";

?>



@extends('layouts.template')

@section('content')

<style>

    #newmisi{

    width: 100%;

    margin: auto;

    height: 100vh;

    background-image: url("../asset/umum/bg-putih.jpg")!important;



    /* background-color: #000; */

    padding: 0!important;

}



#newmisi .container{

}

.katakiri .h1misi{

    font-family: Poppins;

    font-size: 60px;

}



.katakiri h1{

    margin-top: 10%!important;

    font-weight: 650;

    font-family: Poppins;

    font-size: 45px;

    color: rgb(43, 41, 41);

}



.katakiri p{

    margin-top: 10px!important;

    font-weight: 800;

    text-align: justify;

    width: 95%;

}



#newmisi .katakiri{

    width: 50%;

    min-height: 100vh;

    max-height: 150vh;

    margin: 0;

    float: left;

    /* background-color: #fff; */

}



#newmisi .pagekanan{

    width: 50%;

    height: 100vh;

    margin: auto;

    float: right;

    /* background-color: darkorange; */

}



.pagekanan .podcasts{

    width: 90%;

    background: url("../asset/umum/btn-podcast.jpg");

    cursor: y;

    margin: auto;

    font-family: Poppins;

    overflow: hidden;

    cursor: pointer;

    margin-top: 10%!important;

    background-size: cover;

    border-radius: 100px;

    display: grid;

    align-content: center;

    text-align: center;

    box-shadow: 3px 7px;

    color: white;

    transition: 0.4s ease;

    height: 28%;

    z-index: -1!important;

    /* outline: none; */

    /* background-color: #fff; */

}



.pagekanan .podcasts:hover {

    background: #fff;

    color: black;

}



.podcasts h1{

    font-size: 4rem;

    width: 100%;

    font-weight:800;

}





.pagekanan .rb{

    width: 90%;

    background: url("../asset/umum/btn-rb.jpg");

    cursor: y;

    margin: auto;

    font-family: Poppins;

    overflow: hidden;

    margin-top: 10px!important;

    cursor: pointer;

    background-size: cover;

    border-radius: 100px;

    display: grid;

    align-content: center;

    text-align: center;

    box-shadow: 3px 7px;

    color: white;

    transition: 0.4s ease;

    height: 28%;

    z-index: -1!important;

    /* outline: none; */

    /* background-color: #fff; */

}



.pagekanan .rb:hover {

    background: #fff;

    color: black;

}



.rb h1{

    font-size: 2.5rem;

    width: 100%;

    font-weight:800;

}



.pagekanan .cb{

    width: 90%;

    background: url("../asset/umum/btn-cb.jpg");

    cursor: y;

    margin: auto;

    font-family: Poppins;

    overflow: hidden;

    margin-top: 10px!important;

    cursor: pointer;

    background-size: cover;

    border-radius: 100px;

    display: grid;

    align-content: center;

    text-align: center;

    box-shadow: 3px 7px!important;

    color: white!important;

    transition: 0.4s ease;

    height: 28%;

    z-index: -1!important;

    /* outline: none; */

    /* background-color: #fff; */

}



.pagekanan .cb:hover {

    background: #fff;

    color: black!important;

}



.cb h1{

    font-size: 2.5rem;

    width: 100%;

    /* color: #fff!important; */

    font-weight:800;

}



@media only screen and (min-width: 768px) and (max-width:991.98px){    

#newmisi{

    height: auto;

}

.katakiri h1{

    font-size: 35px;

}



.katakiri .h1misi{

    font-size: 50px;

}



.katakiri p{

    margin-top: 10px!important;

    font-weight: 800;

    text-align: justify;

    width: 95%;

}



.podcasts h1,.cb h1, .rb h1{

    font-size: 1.6rem;

}

}

@media only screen and (min-width: 576px) and (max-width:767.98px){ 

    #newmisi{

        height: auto;

    }

    #newmisi .katakiri{

        width: 100%!important;

        min-height: auto;

        max-height: auto;

    }

    .katakiri h1{

        font-size: 25px;

    }

    

    .katakiri .h1misi{

        font-size: 40px;

    }

    

    .katakiri p{

        margin-top: 0px!important;

        font-weight: 800;

        text-align: justify;

        width: 95%;

    }



    .katakiri .podcasts{

        margin-top: 0px;

    }



    #newmisi .pagekanan{

        width: 100%!important;

    }



    #pagekanan .podcasts, .rb, .cb{

        /* width: 100%!important; */

    }

}



@media only screen and (min-width: 480px) and (max-width:575.98px){ 

    #newmisi{

        height: auto;

    }

    #newmisi .katakiri{

        width: 100%!important;

        min-height: auto;

        max-height: auto;

    }

    .katakiri h1{

        font-size: 25px;

    }

    

    .katakiri .h1misi{

        font-size: 40px;

    }

    

    .katakiri p{

        margin-top: 0px!important;

        font-weight: 800;

        text-align: justify;

        width: 95%;

    }



    .katakiri .podcasts{

        margin-top: 0px;

    }



    #newmisi .pagekanan{

        width: 100%!important;

    }

}



@media only screen and (min-width: 0px) and (max-width:479.98px){ 

    #newmisi{

        height: auto;

    }

    #newmisi .katakiri{

        width: 100%!important;

        min-height: auto;

        max-height: auto;

    }

    .katakiri h1{

        font-size: 25px;

    }

    

    .katakiri .h1misi{

        font-size: 40px;

    }

    

    .katakiri p{

        margin-top: 0px!important;

        font-weight: 800;

        text-align: justify;

        width: 95%;

    }



    .katakiri .podcasts{

        margin-top: 0px;

    }



    #newmisi .pagekanan{

        width: 100%!important;

    }

    .podcasts h1,.cb h1, .rb h1{

        font-size: 2rem;

    }

    

}

</style>

<section id="newmisi">

    <div class="container">

        <div class="katakiri pt-4">

            <h1><span class="h1misi">MISI</span><br>STUDENT DAY 2021</u><br>UNIVERSITAS UDAYANA</h1>

            <br>

            <p>&emsp;&emsp;&emsp;&emsp;Selamat datang di MISI Student Day 2021 Universitas Udayana. Tantangan ini dibuat tidak dengan tujuan untuk membuat peserta terbebani dengan tugas-tugas selama mengikuti Student Day 2021 Universitas Udayana.

            <br><br>

            &emsp;&emsp;&emsp;&emsp;Misi ini terdiri dari 3 topik besar, yaitu Podcast, Capacity Building, dan Ruang Bercakap 2. Tentunya misi ini sebagai sebuah cara untuk memastikan peserta paham dengan nilai yang diberikan oleh Student Dat 2021 Universitas Udayana.

            <br><br>

            <strong>Tunggu apa lagi? Yuk, kerjain!</strong>

            </p>

            {{-- <iframe src="asset/umum/2005551003_Audrey Tilanov Pramasa.pdf" width="100%" height="500px"> --}}

        </div>

        <div class="pagekanan pt-4">

            <div class="podcasts" onclick="window.location='http://studentday.bemudayana.id/podcast';">

                <div class="tombol">

                    <h1>PODCAST</h1>

                </div>
                
            </div>

            <div class="rb" onclick="window.location='http://studentday.bemudayana.id/ruangbercakap2';">

              

                    <div class="tombol">

                        <h1>RUANG BERCAKAP 2</h1>

                    </div>

            </div>

            <div class="cb" onclick="window.location='http://studentday.bemudayana.id/capacitybuilding';">

                    <div class="tombol">

                        <h1>CAPACITY BUILDING</h1>

                    </div>

            </div>

            

    </iframe>

        </div>

    </div>

</section>



@endsection