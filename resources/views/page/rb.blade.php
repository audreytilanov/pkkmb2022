<?php
$page="Ruang Bercakap 2";
?>

@extends('layouts.template')
@section('content')
<style>
   #capacitybuilding{
    width: 100%;
    margin: auto;
    height: auto;
    background-image: url("../asset/umum/bg-putih.jpg")!important;
}


.cb .h1misi{
    font-family: Poppins;
    font-size: 60px;
}

.cb h1{
    /* margin-top: %!important; */
    font-weight: 650;
    font-family: Poppins;
    font-size: 45px;
    color: rgb(43, 41, 41);
}

.cb p{
    margin-top: 10px!important;
    font-weight: 800;
    text-align: justify;
    width: 95%;
}
.but-dow{
  display: grid;align-content:center;text-align:center;width:100%;margin:auto;
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

<section id="capacitybuilding"> 
    <div class="container">
        <div class="cb">
            <h1><span class="h1misi">RUANG BERCAKAP 2</span><br>STUDENT DAY 2021</u><br>UNIVERSITAS UDAYANA</h1>
        </div>

          <iframe src="https://drive.google.com/file/d/1L4051N58L-pNj7ZMzeivGctBKjuiVyuG/preview" width="100%" height="480" allow="autoplay"></iframe>
          <div class="but-dow">
            <a class="hover" href="asset/misi/ruang-bercakap.pdf" download="RuangBercakap">UNDUH</a>
          </div>
          

    </div>
</section>

@endsection