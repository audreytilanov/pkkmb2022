<?php
$page="Guidebook";
?>

@extends('layouts.template')
@section('content')
<style>
    #judulmisi{
    margin: 0;
    /* padding: 0; */
    height: 70vh;
    background: url("../asset/umum/bg-penjelasan.jpg");
    /* background-attachment: fixed; */
    text-align:center;
}

.detpodcast h1{
    margin-top: 10%;
    font-size: 45px;
    width: 100%;
    color: #fff!important;
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

@media only screen and (min-width: 0px) and (max-width:500.98px){ 
    .detpodcast h1{
        margin-top: 20%;
        font-size: 35px;
    }
    .detpodcast .h1misi{
        font-size: 40px;
    }
}
</style>
<section id="judulmisi">
    <div class="container">
        <div class="detpodcast">
            <h1 data-aos="zoom-in"><span class="h1misi">GUIDEBOOK</span><br>STUDENT DAY 2021</u><br>UNIVERSITAS UDAYANA</h1>
        </div>
    </div>
</section>
<iframe id="myFrame" allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/4c2821cc56.html" style="border:none;width: 100%; height: 100%; min-height: 500px;margin:0;padding:0;margin-bottom:-10px;"></iframe>
@endsection

