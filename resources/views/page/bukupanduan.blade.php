<?php
$page="Guidebook";
?>

@extends('layouts.template')
@section('content')
<style>
    #judulmisi{
    background-size: cover;
    width: 100%;    
    background-position: center;
    margin: 0;
    background-repeat: no-repeat;
    /* padding: 0; */
    height: 70vh;
    background: url("../asset/2022/bg/gb3.jpg");
    background-attachment: fixed;
    text-align:center;
}

.detpodcast h1{
    margin-top: 10%;
    font-size: 45px;
    width: 100%;
    color: #fff!important;
    font-weight:650;
    text-shadow: 4px 2px #00000067;
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
            <h1 data-aos="zoom-in"><span class="h1misi">KOMPAS KSATRIA</span><br></u><br></h1>
        </div>
    </div>
</section>
<iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" style="border: 1px solid lightgray; width: 100%; height: 650px;" src="https://heyzine.com/flip-book/94cd427803.html"></iframe>
@endsection

