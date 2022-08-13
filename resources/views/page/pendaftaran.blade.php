<?php
$page="Pendaftaran";
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
    /* color: black!important; */
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
    text-shadow: 2px 1px #6d6d6da1;
    border-radius: 10px;
    border: 1px solid rgba(192, 192, 192, 0.18);
    margin: auto;
    color: rgb(0, 0, 0);
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
    color: rgb(150, 150, 150);
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

  .text-danger{
    text-shadow: 2px 1px rgb(255, 255, 255)!important;

  }
  #absenquiz input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgb(128, 127, 127);
        opacity: 1; /* Firefox */
}

#absenquiz select::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: rgb(0, 0, 0);
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
</style>
<section id="cover">
  <section id="judulmisi">
    <div class="container">
      <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"></span><span>PENDAFTARAN TELAH DITUTUP</span></h1>

          @if (\Session::has('success'))
          <div class="detpodcast">

              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{!! \Session::get('success') !!}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
        </div>

          @endif
    </div>
  </section>
</section>
@endsection