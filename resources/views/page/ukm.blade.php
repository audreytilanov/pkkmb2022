@extends('layouts.template')
<?php
$page = "Info UKM";

?>
@section('content')
<style>
    .hovi {
        color:white;
        padding: 30px;
        padding-bottom: 30px;
        text-align: center;
        background-color: #c1292e;
        font-weight: 800;
        margin-top: 20px!important;
        border-radius: 50px;
        margin: auto;
        transition: 0.3s ease;
        text-align: center;
        border:3px solid darkorange;
    }

    .hovi:hover {
        background-color: darkorange;
        color: white!important;
    }

    .hov a:hover{
        color:red;
    }
</style>
<button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
<section id="cover">
    <div style="background-image: url({{url('asset/umum/bg-penjelasan.jpg')}});font-family:poppins;text-transform:uppercase;">
        <div class="container">
            <h1 style="padding-top:180px;padding-bottom:50px;" class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal">UKM di </span><span>Universitas Udayana</span></h1>
            <div class="row hov">
                @foreach ($ukm as $detail)
                    <div class="col-sm-6 col-md-4 col-lg-3 aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400" style="position:relative; margin:20px;padding:20px;display: flex;align-items:center;justify-content:center; text-align: center;color:black;border-radius:20px;box-shadow: 3px 2px 8px 2px rgba(0,0,0,.5);background: rgba( 255, 255, 255, 0.42 );
                    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
                    backdrop-filter: blur( 8px );
                    -webkit-backdrop-filter: blur( 6.5px );
                    border-radius: 10px;
                    border: 1px solid rgba( 255, 255, 255, 0.18 );">
                        {{-- <div class="thumbnail"> --}}
                            
                            <a href="/ukm/{{ $detail->slug }}" style="color: rgb(43, 41, 41)">
                            <div class="row card-header">
                            <img style="width:100%;" src="{{ URL::asset('asset/ukm/new/'.$detail->foto.'') }}" alt="...">
                                
                            
                            </div>
                            <div class="row card-content" style="display:flex;justify-content:center; text-align:center;align-items:flex-ends;">
                            {{-- <div class="caption"> --}}
                                <h3 style="margin-top: 20px;font-weight:800;text-decoration:none;">{{ $detail->nama }}</h3>
                            </div>
                            </a>
                            
                                {{-- <a style="bottom: 0!important;" href="/ukm/{{ $detail->slug }}">Button</a> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                
                @endforeach
                <div class="col-md-12" style="display: grid;
                justify-content: center;
                align-content: center;">
                    <a class="hovi" href="/ormawa">Kembali Ke Ormawa</a>
                </div>
                
                    

            </div>
            <br><br>
            <br><br>
            <br><br>

        </div>

    </div>
</section>
@endsection