<?php
$page="Power Capacity Ups";
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
</style>
<section id="cover">
    <section id="judulmisi">
    <div class="container">
        <h1 class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"></span><span>POWER CAPACITY UPS</span></h1>
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

                    &emsp;&emsp;&emsp;Gimana nih menurut kalian kegiatan Capacity Building yang tadi? Kalian masih ingat tidak dengan materi apa saja yang sudah dibawa oleh pemateri cakep kita saat Capacity Building berlangsung? Sebagai review, Capacity Building sendiri adalah suatu proses atau wadah untuk menanamkan nilai yang bertujuan meningkatkan kapasitas diri mahasiswa baru melalui materi praktikal yang akan bermanfaat dalam menjalani kehidupan perkuliahan.<br>
                    
                    &emsp;&emsp;&emsp;Nah, untuk mengecek apakah kalian benar-benar ingat dengan materi yang disampaikan pada Capacity Building tadi, yuk jawab kuis-kuis dari Power Capacity Ups berikut. Untuk informasi selengkapnya, dapat diklik di bawah ini.
                </p>
        </div>
        <a href="#absenquiz">
            <div class="scroll-down"></div>
        </a>
    </div>
    </section>
    
    <section class="container">
    <form method="POST" action="{{ route('pcu.post') }}">
        @csrf

        
        {{-- @method('PUT') --}}
        <div id="absenquiz">
            <input data-aos="fade-up" type="text" placeholder="Nama Lengkap" name="nama" required><br>
            <input data-aos="fade-up"type="text" placeholder="Gugus" name="gugus" required><br>        
            <input data-aos="fade-up" type="text" placeholder="Nomor Urut" name="nourut" required><br>
            <select name="fakultas" data-aos="fade-up" required>
                <option value="" disabled selected>Fakultas</option>
                <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option>
                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                <option value="Fakultas Hukum">Fakultas Hukum</option>

                <option value="Fakultas Teknik">Fakultas Teknik</option>
                <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam">Fakultas Matematika dan Ilmu Pengetahuan Alam</option>

                <option value="Fakultas Kedokteran Hewan">Fakultas Kedokteran Hewan</option>
                <option value="Fakultas Teknologi Pertanian">Fakultas Teknologi Pertanian</option>
                <option value="Fakultas Pariwisata">Fakultas Pariwisata</option>
                <option value="Fakultas Ilmu Sosial dan Ilmu Politik">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                <option value="Fakultas Kelautan dan Perikanan">Fakultas Kelautan dan Perikanan</option>
            </select>
            <select name="angkatan" data-aos="fade-up" required>
                <option value="" disabled selected>Pilih Angkatan</option>
                <option value="22">22</option>
                <option value="21">21</option>
                <option value="20">20</option>
                <option value="19">19</option>
                <option value="18">18</option>
            </select>
            <br>
            <br>
            <div class="soal">
                <div class="mb-5"> 
                    <div class="row"> 
                        @foreach ($data as $datas)
                        <div id="quizsoal" class="col-12" style="text-align: left"> 
                            <h3>{{ $loop->iteration }}. {!! $datas->pertanyaan !!}</h3> 
                            <div> 
                                <input type="radio" value="1" name="box{{ $loop->iteration }}" id="one{{ $loop->iteration }}" class="one" required> 
                                <input type="radio" value="2" name="box{{ $loop->iteration }}" id="two{{ $loop->iteration }}" class="two" required> 
                                <input type="radio" value="3" name="box{{ $loop->iteration }}" id="three{{ $loop->iteration }}" class="three" required> 
                                <input type="radio" value="4" name="box{{ $loop->iteration }}" id="four{{ $loop->iteration }}" class="four" required> 
                                <input type="radio" value="5" name="box{{ $loop->iteration }}" id="five{{ $loop->iteration }}" class="five" required> 
                                <label for="one{{ $loop->iteration }}" class="box first"> 
                                    <div class="course"> 
                                        <span class="circle"></span> 
                                        <span class="subject"> {{ $datas->a }} </span> 
                                    </div> 
                                </label> 
                                <label for="two{{ $loop->iteration }}" class="box second"> 
                                    <div class="course"> 
                                        <span class="circle"></span> 
                                        <span class="subject"> {{ $datas->b }} </span> 
                                    </div> 
                                </label> 
                                <label for="three{{ $loop->iteration }}" class="box third"> 
                                    <div class="course"> 
                                        <span class="circle"></span> 
                                        <span class="subject"> {{ $datas->c }} </span> 
                                    </div> 
                                </label> 
                                <label for="four{{ $loop->iteration }}" class="box forth"> 
                                    <div class="course"> 
                                        <span class="circle"></span> 
                                        <span class="subject"> {{ $datas->d }} </span> 
                                    </div> 
                                </label> 
                                <label for="five{{ $loop->iteration }}" class="box fifth"> 
                                    <div class="course"> 
                                        <span class="circle"></span> 
                                        <span class="subject"> {{ $datas->e }} </span> 
                                    </div> 
                                </label> 
                            </div> 
                            
                        </div> 
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="form1" data-aos="zoom-in-up">
    </form>
    </section> 
</section>
@endsection