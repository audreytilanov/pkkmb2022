<?php
$page="Detektif Muda Udayana";
?>

@extends('layouts.template')
@section('content')
<style>
  #judulmisi{
    margin: 0;
    /* padding: 0; */
    height: 100vh;
    /* background: url("../asset/2022/bg/jpg"); */
    background-attachment: fixed;
    text-align:center;
}

#judulmisi h1{
    margin-top: 20px!important;
    padding-bottom: 30px;

}

.detpodcast{
    background: rgba( 255, 255, 255, 0.5 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    margin: auto;
    padding: 20px 50px 32px 50px;
}

.detpodcast h1{
    margin-top: 10%;
    font-size: 20px;
    width: 100%;
    color: black!important;
    font-weight:650;
    font-family: Poppins;
}

.detpodcast p{
    text-align: justify;font-weight:500;font-size:19px;color:black;
}

.detpodcast .h1misi{
    font-size: 40px;
    margin-bottom:10px;
    width: 100%;
    /* color: #fff!important; */
    font-weight:650;
    font-family: Poppins;
}
    #absenquiz input{
    width: 100%;
    background: rgba( 255, 255, 255, 0.1 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    text-shadow: 2px 1px #000000a1;
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    margin: auto;
    color: white;
    /* background-color: #fcfcfc; */
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    border: none;
    padding: 10px;
  }

  #absenquiz select{
    width: 100%;
    background: rgba( 255, 255, 255, 0.1 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 8px );
    -webkit-backdrop-filter: blur( 6.5px );
    text-shadow: 2px 1px #000000a1;
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
    margin: auto;
    color: rgb(185, 185, 185);
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    border: none;
    padding: 10px;
    margin-bottom: 25px;
  }

  #absenquiz select option{
    color: black
  }

  #absenquiz input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgb(185, 185, 185);
        opacity: 1; /* Firefox */
}

,#absenquiz select::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgba(139, 139, 139, 0.781);
        opacity: 1; /* Firefox */
}

  #absenquiz{
    display: grid;
    align-content: center;
    text-align: center;
}
input[type=submit]:hover{
    background-color: #133374;
    color: white!important;
    border: 4px solid rgba(255, 255, 255, 0.747);
    transition: 0.3s ease-in-out;
}
input[type=submit]{
    float: right;
    position: relative;
    display: inline-block;
    width: 30%;
    background: #fff;
    border: 4px solid rgba(255, 255, 255, 0);
    font-weight: bold;
    color: #fff;
    background-color: #1f54be;
    text-decoration: none;
    padding: 10px 30px;
    margin-top: 20px;
    text-align: center;
    margin-bottom: -40px;
}

@media only screen and (min-width: 576px) and (max-width:767.98px){ 
  select{
    font-size: 25px;
    width: 100%!important;
  }
  #absenquiz input{
    width: 100%;
    font-size: 25px;
  }

  #absenquiz select{
    font-size: 25px;
  }

  .detpodcast p{
    text-align: justify;font-weight:500;font-size:17px;color:black;
}

  .detpodcast h1{

    font-size: 17px;

    }

    .detpodcast .h1misi{
        font-size: 33px;
    }
    #absenquiz{
        margin-top: 100px!important;
    }

    .scroll-down{
        display: none;
    }
  
}
@media only screen and (min-width: 400px) and (max-width:575.98px){ 
    #absenquiz{
        margin-top: 40px!important;
    }
    #absenquiz input{
        font-size: 25px;
     }
  #absenquiz select{
    font-size: 25px;
  }

  .detpodcast p{
    text-align: justify;font-weight:500;font-size:14px;color:black;
}

.detpodcast{
    padding: 20px 20px 32px 20px;
}
}

@media only screen and (min-width: 0px) and (max-width:400px){ 
    select{
        font-size: 20px;
        width: 100%!important;
    }

    #absenquiz input{
        width: 100%;
        font-size: 20px;
    }
    #absenquiz select{
        font-size: 20px;
    }
    input[type=submit] {
        width: 40%;
    }
    .detpodcast h1{

    font-size: 17px;

    }

    .detpodcast{
    padding: 20px 20px 32px 20px;
}

    .detpodcast p{
    text-align: justify;font-weight:500;font-size:13px;color:black;
}

    .detpodcast .h1misi{
    font-size: 35px;
    }
    #absenquiz{
        margin-top: 90px!important;
    }

    .scroll-down{
        display: none;
    }

    #quizsoal h3{
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 30px;
    }

    #quizsoal .subject{
        font-size: 15px;
        font-weight: 500;
    }
    #quizsoal{
    margin-bottom: 40px!important;
    padding: 40px 40px 40px 40px;
}
    
}

@media only screen and (max-width:992.98px){ 
    #absenquiz{
        margin-top: 50px;
    }

    .scroll-down{
        display: none;
    }
    
}

.but-dow{
  display: grid;align-content:center;text-align:center;width:250px;margin:auto;
}

.hover{
  color:white;background-color:darkorange;padding:15px 0 15px 0;border-radius:50px;font-weight:800;
  transition: 0.3s ease-in-out;
  border: 5px solid darkorange;
  font-size: 20px;
}

.hover:hover{
  background-color: #fff!important;
  color: darkorange;
  border: 5px solid darkorange;
}
</style>
<section id="cover">
    <section id="judulmisi">
    <div class="container">
        <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"></span><span>DETEKTIF MUDA UDAYANA</span></h1>
        <div class="detpodcast">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{!! \Session::get('success') !!}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <p>
                    <b>Halo, Ksatria Muda Udayana!</b><br>

                    &emsp;&emsp;&emsp;Tau gak sih, kalau kita masih banyak menghadapi masalah sosial di Indonesia, seperti pembuangan limbah, polusi, rusaknya ekosistem laut, pemanasan global, hingga pencemaran tanah. Mahasiswa sebagai agent of change diharapkan bisa menjadi sosok yang membawa perubahan lingkungan sekitar ke arah yang lebih baik. 
                    <br>
                    
                    &emsp;&emsp;&emsp;Nah, agar kalian bisa menjadi lebih tanggap serta dapat berpikir kritis terhadap permasalahan yang terjadi di lingkungan sosial, yuk kreasikan ide kalian dalam bentuk infografis semenarik mungkin tentang masalah sosial di Indonesia. <b>Untuk informasi selengkapnya, kalian dapat klik tombol di bawah ini.</b>
                </p>
        </div>
        <a href="#detektifmuda">
            <div class="scroll-down"></div>
        </a>
    </div>
    </section>
    <section class="container" id="detektifmuda">
        <iframe src="https://drive.google.com/file/d/11o-VLldVR28GfMuY57w3dVOYbOUjVDcZ/preview" width="100%" height="480" allow="autoplay"></iframe>
        <div class="but-dow">
            <a class="hover" href="asset/eksplorasi/detektifmuda.pdf" download="RuangBercakap">UNDUH</a>
        </div>

    </section>
</section>
@endsection