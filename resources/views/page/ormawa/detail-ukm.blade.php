@extends('layouts.template')

@section('content')

<?php
$page = "Info UKM"

?>
<style>
    .hov a{
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
    .hov a:hover{
        background-color: darkorange;
        color: white
    }
</style>
<div id="cover">
<div class="container">
    <div class="row hov detail-ukm" style="">
        <h1 style="text-align: center;margin-top:100px!important;" class="col-md-12">{{ $ukm->nama }}</h1>
        @if ($ukm->id == 24)
        <img style="width:30%;height:auto;margin:auto;margin-top:53px;display: grid;
        justify-content: center;
        align-content: center;" src="{{ URL::asset('asset/ukm/new/'.$ukm->foto.'') }}" alt="...">
        @else
        <img style="width:30%;height:auto;margin:auto;margin-top:53px;display: grid;
        justify-content: center;
        align-content: center;border-radius:50%;" src="{{ URL::asset('asset/ukm/new'.$ukm->foto.'') }}" alt="...">
        @endif
    <p class="col-md-12" style="text-align: justify;margin-top:50px;">&emsp;&emsp;&emsp;&emsp;{!! $ukm->deskripsi !!}</p><br>
    <h1 style="text-align: center;" class="col-md-12">Prestasi</h1>

    <p class="col-md-12" style="text-align: center"><strong>{!! $ukm->prestasi !!}</strong></p>
    <p class="col-md-12" style="text-align: center">{!! $ukm->kontak !!}</p>
    <a href="/ukm">Kembali Ke Info UKM</a>
    </div>
    <br><br><br>
</div>
</div>

@endsection