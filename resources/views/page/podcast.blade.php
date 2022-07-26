<?php
$page="Podcast";
?>

@extends('layouts.template')
@section('content')
<style>
#judulmisi{
    margin: 0;
    /* padding: 0; */
    height: 70vh;
    background: url("../asset/umum/bg-putih2.jpg");

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

#misi1{
    width: 100%;
    height: auto;
    background: url("../asset/umum/bg-penjelasan.jpg");
    display: grid;
    align-content: center;
    /* margin: auto; */
    text-align: center;
}
.videomisi{
    width: 50%;
    height: auto;
    float: left;
    border:5px solid transparent;
    border-radius: 35px;
    transition: 0.2s ease;
}

.videomisi:hover{
    border:7px solid darkorange;
    border-radius: 37px;
}
#misi1 .thumbnail{

    border-radius: 50px;
    background: url("../asset/umum/podcast/podcast main.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #fff;
}

#misi .tombolmisi{
    float: right;
    width: 40%;


}

#misi1 .tombolmisi h1{
    /* margin-top: 50px; */
    color: white;
    font-size: 2.5rem;
    text-transform: uppercase;
    font-family: Poppins;
    font-weight: 800!important;
}

#misi1 .tombolmisi button{
    width: 30%;
    margin-top: 35px;
    color: white;
    text-transform: uppercase;
    font-family: Poppins;
    font-weight: 800!important;
    font-size: 45px;
    height: 100px;
    transition: 0.2s ease;
    border-radius: 50px;
    border: 3px solid darkorange;
    color: darkorange;
    outline: none;
    text-shadow: 2px 2px #ff0000;
}
/* #misi1 .tombolmisi button h1{
    

}
#misi1 .tombolmisi button h1:hover{
    color: white!important;
} */

#misi1 .tombolmisi i{
    transition: 0.3s ease;

}
#misi1 .tombolmisi i:hover{
    transform: translateY(10px);
}

#misi1 .tombolmisi button:hover{
    transform: translateY(3px);
    color: white;
    background-color: darkorange;
}

i:hover ~ .kerjakan{
    border: 10px solid darkorange!important;
    transition: 0.2s ease;
}

.rotate{
    /* margin-right: -40px; */
    font-size: 70px;
    color: darkorange;
    vertical-align:text-top;
    text-shadow: 5px 5px#e0e0e0;
    /* position: absolute; */
    z-index: 1;
}

.popupmisi a{
    float: left;
    position: relative;
    display: inline-block;
    width: 30%;
    background: #fff;
    font-size: default;
    border: 2px solid rgba(0,0,0,.8);
    font-weight: 500;
    color: #000;
    text-decoration: none;
    padding: 10px 30px;
    margin-top: 20px;
    text-align: center;
    margin-bottom: -40px;
}

.popupmisi input[type=submit]{
    float: right;
    position: relative;
    display: inline-block;
    width: 30%;
    background: #fff;
    border: 4px solid rgba(255, 255, 255, 0);
    font-weight: bold;
    color: #fff;
    background-color: #31863e;
    text-decoration: none;
    padding: 10px 30px;
    margin-top: 20px;
    text-align: center;
    margin-bottom: -40px;
}

.popupmisi input[type=submit]:hover{
    background-color: #025a0f;
    color: white!important;
    /* border: 4px solid rgb(255, 146, 146); */
    transition: 0.3s ease-in-out;
}
.question input {
    width: 300px;
    background: 
        linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
    background-color: #fcfcfc;
    border: 1px solid;
    outline: none;
    font-weight: bold;
    background-color: transparent;
    border: none;
    padding: 10px;
  }

  #absenquiz input {
    /* width: 300px; */
    background: 
        linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
    background-color: #fcfcfc;
    border: 1px solid;
    font-size: 35px;
    outline: none;
    font-weight: bold;
    background-color: transparent;
    border: none;
    padding: 10px;
  }

.faq{
    border-bottom: 2px solid #000;
    cursor: default;
    margin-bottom: 20px;
}
.question{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.question p{
    font-size: 25px;
    font-weight: 500;
    text-align: justify;
}

@media only screen and (min-width: 768px) and (max-width:991.98px){ 
    .videomisi{
        width: 50%;
        height: auto;
        float: left;
    }

    .question input {
        width: 240px!important;
        padding: 10px;
      }
    
    #misi .tombolmisi{
        float: right;
        width: 20%!important;
        margin: auto;
    }
    
    #misi1 .tombolmisi h1{
        /* margin-top: 50px; */
        font-size: 1.8rem!important;
    }
    
    #misi1 .tombolmisi button{
        width: 30%;
        margin-top: 15px;
        font-size: 25px;
        height: 80px;
    }

    .fa-8x{
        font-size: 4rem;
    }

    
}
@media only screen and (min-width: 576px) and (max-width:767.98px){ 
    .videomisi{
        width: 50%;
        height: auto;
        float: left;
    }
    
    #misi .tombolmisi{
        float: right;
        width: 20%!important;
        margin: auto;
    }
    
    #misi1 .tombolmisi h1{
        /* margin-top: 50px; */
        font-size: 1.8rem!important;
    }
    
    #misi1 .tombolmisi button{
        width: 30%;
        margin-top: 0;
        font-size: 20px;
        height: 80px;
    }
    .tombolmisi .fas,.beer{
        display: none;
    }
    .fa-8x{
        font-size: 4rem;
    }
    .detpodcast h1{
        font-size: 38px;
    }
    .popupmisi a{
        float: left;
        width: 100%!important;
        font-size: 15px;
        
    }
    .popupmisi input[type=submit]{
        float: right;
        width: 100%!important;
        padding: 10px 30px;
        margin-top: 20px;
        margin-bottom: 5px!important;
        text-align: center;
        margin-bottom: -40px;
    }
    .question input {
        width: 150px!important;
        padding: 10px;
      }
    
      #absenquiz input {
        /* width: 300px; */
        width: 100%!important;
        font-size: 25px!important;
        padding: 10px;
      }
    .question p{
        font-size: 20px!important;
    }
}

@media only screen and (min-width: 480px) and (max-width:575.98px){ 
    .videomisi{
        width: 100%;
        height: auto;
        float: left;
    }
    
    #misi .tombolmisi{
        float: right;
        width: 20%!important;
        margin: auto;
    }
    
    #misi1 .tombolmisi h1{
        /* margin-top: 50px; */
        font-size: 1.8rem!important;
    }
    
    #misi1 .tombolmisi button{
        width: 50%;
        margin-top: 0;
        font-size: 20px;
        height: 80px;
    }
    .tombolmisi .fas,.beer{
        display: none;
    }
    .fa-8x{
        font-size: 4rem;
    }
    .detpodcast h1{
        font-size: 38px;
    }
    .container{
        padding-bottom: 30px!important;
    }

    .popupmisi a{
        float: left;
        width: 100%!important;
        font-size: 15px;
        
    }
    .popupmisi input[type=submit]{
        float: right;
        width: 100%!important;
        padding: 10px 30px;
        margin-top: 20px;
        margin-bottom: 5px!important;
        text-align: center;
        margin-bottom: -40px;
    }
    .question input {
        width: 150px!important;
        padding: 10px;
      }
    
      #absenquiz input {
        /* width: 300px; */
        width: 100%!important;
        font-size: 25px!important;
        padding: 10px;
      }
    .question p{
        font-size: 20px!important;
    }

    .popupmisi .content {
        padding: 45px!important;
    }
    
}

@media only screen and (min-width: 0px) and (max-width:479.98px){ 
    .videomisi{
        width: 100%;
        height: auto;
        float: left;
    }

    #misi1 .thumbnail {
        background: none;
        background-color: none;
        padding-bottom: 15px;
    }
    
    #misi .tombolmisi{
        /* float: right; */
        float: none;
        width: 100%!important;
        margin: auto;
        
    }
    
    #misi1 .tombolmisi h1{
        margin-top: 150px;
        font-size: 1.5rem!important;
    }
    
    #misi1 .tombolmisi button{
        width: 50%;
        margin-top: 0;
        font-size: 20px;
        border-radius: 40px;
        height: 80px;
    }
    .tombolmisi .fas,.beer{
        display: none;
    }
    .fa-8x{
        font-size: 4rem;
    }
    .detpodcast h1{
        font-size: 38px;
    }
    .detpodcast h1{
        font-size: 35px;
    }

    .popupmisi a{
        float: left;
        width: 100%!important;
        font-size: 15px;
        
    }
    .popupmisi input[type=submit]{
        float: right;
        width: 100%!important;
        padding: 10px 30px;
        margin-top: 20px;
        margin-bottom: 5px!important;
        text-align: center;
        margin-bottom: -40px;
    }
    .question input {
        width: 150px!important;
        padding: 10px;
      }
    
      #absenquiz input {
        /* width: 300px; */
        width: 100%!important;
        font-size: 17px!important;
        padding: 10px;
      }
    .question p{
        font-size: 13px!important;
    }
    .popupmisi .content {
        padding: 45px!important;
    }
}

.popupmisi .overlay {
    position:fixed;
    
    top:0;
    left: 0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    z-index:2;
    display:none;
    border-radius: unset;
    
  }
   
  .popupmisi .content {
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) scale(0);
    background:#fff;
    width:80%;
    height:80%;
    z-index:3;
    text-align:left;
    padding:80px;
    box-sizing:border-box;
    font-family:"Open Sans",sans-serif;
    background: url("../asset/umum/bg-logo.png");
    background-size: cover;
    border-radius: 15px;
  }
   
  .popupmisi .close-btn {
    cursor:pointer;
    position:absolute;
    right:20px;
    top:20px;
    width:30px;
    height:30px;
    background:#222;
    color:#fff;
    font-size:25px;
    font-weight:600;
    line-height:30px;
    text-align:center;
    border-radius:50%;
    margin-top: 10px;
  }
   
  .popupmisi.active .overlay {
    display:block;
  }
   
  .popupmisi.active .content {
    transition:all 0.5s ease-in-out;
    transform:translate(-50%,-50%) scale(1);
    overflow: auto;
    background-repeat: no-repeat;
    background-size: cover!important;
  }

  .popupmisi img{
    width: 50%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}





.faq.active .answer{
    max-height: 2000px;
}

.popupmisi a:hover{
    background-color: #c1292e;
    border: 2px solid #c1292e;
    color: white!important;
    transition: 0.3s ease;
}

#absenquiz{
    display: grid;
    align-content: center;
    text-align: center;
}
</style>
    <section id="judulmisi">
        
        <div class="container">
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{!! \Session::get('success') !!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <div class="detpodcast">
                <h1><span class="h1misi">PODCAST</span><br>STUDENT DAY 2021</u><br>UNIVERSITAS UDAYANA</h1>
            </div>
        </div>
    </section>
    <section id="misi1">
        <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
        <div class="container">
            <h1 style="font-size: 3rem;font-weight:800;color:white;font-family:Poppins;text-align:left;">MISI <span class="rotate">#1</span></h1><br class="beer">
            <div class="videomisi">
                
                {{-- <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="asset/umum/podcast/podcast main.png" width="700" hei style="cursor:pointer" /></div><div style="display:none">
                    <iframe width="700" height="405" frameBorder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                    </div> --}}
                <a class="venobox" data-autoplay="true" data-vbtype="video" overlayClose="false" href="https://www.youtube.com/embed/PlKUeSbzG3U">
                <div class="thumbnail">
                    <img src="asset/umum/podcast/podcast1.png" width="400px" height="auto" alt="" style="border-radius: 30px; box-shadow: 4px 2px 2px 2px rgba(0,0,0,0.4);cursor:pointer;">
                </div>
                </a>
            </div>
        
            
            <div class="tombolmisi">
                <h1>Klik Tombol Untuk Mengerjakan</h1>
                <div>
                    <i class="fas fa-chevron-down fa-8x" style="color: white"></i><br class="beer">
                    <button class="kerjakan" onclick="modaldesclogo()">Kerjakan</button>
                </div>                
            </div>
            <div class="popupmisi" id="popup-1">
                <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="nmodaldesclogo()">×</div>
                        <h1 class="title">MISI #1</h1>
                        <img src="asset/logo/LOGO KAYON Stroke.png" alt="">
                        <br>
                        <form method="POST" action="{{ route('podcast.input') }}">
                            @csrf
                            <div id="absenquiz">
                                <input type="text" placeholder="Nama Lengkap" name="nama" required><br>
                                <input type="text" placeholder="Nomor Gugus" name="nogugus" required><br>
                                {{-- <input type="text" placeholder="Kelompok Gugus" name="klpgugus" required><br> --}}
                            </div>
                            <div class="faq">
                                <div class="question">
                                    <p><span>1.</span>&emsp;Ketika kita menanggapi suatu permasalahan dalam berkomunikasi kepada orang lain yang
                                        <span>
                                            <input style="width: 40%" class=".form-control-lg" type="text" name="jwb1" required>
                                        </span>
                                    maka kita perlu memahami dan menerapkan etika bermedia sosial.<br><br>
                                    <span>2.</span>&emsp;Ini kaitannya dengan etika ya, etika dalam bermedia sosial, termasuk dengan
                                    <span>
                                        <input style="width: 30%" class=".form-control-lg" type="text" name="jwb2" required>
                                    </span>
                                    , etika dalam membuat tulisan.<br><br>
                                    <span>3.</span>&emsp;Walaupun kita di Bali, terus teman kita di mana itu masih kita bisa 
                                    <span>
                                        <input style="width: 16%" class=".form-control-lg" type="text" name="jwb3" required>
                                    </span>
                                     dan produktif.
                                    </p>
                                </div>
                            </div>
                            <input type="submit" name="form1" placeholder="Submit">
                        </form>
                        <a onclick="nmodaldesclogo()" style="font-weight:bold;cursor: pointer;">Kembali ke Home</a>
                    </div>
                </div>
            </div>  
    </section>
    <section id="misi1">
        <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
        <div class="container">
            <h1 style="font-size: 3rem;font-weight:800;color:white;font-family:Poppins;text-align:left;">MISI <span class="rotate">#2</span></h1><br class="beer">
            <div class="videomisi">
                
                {{-- <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="asset/umum/podcast/podcast main.png" width="700" hei style="cursor:pointer" /></div><div style="display:none">
                    <iframe width="700" height="405" frameBorder="0" src="https://www.youtube.com/embed/PlKUeSbzG3U">
                    </iframe>
                    </div> --}}
                <a class="venobox" data-autoplay="true" data-vbtype="video" overlayClose="false" href="https://www.youtube.com/embed/tFGj6B3hvDI">
                <div class="thumbnail">
                    <img src="asset/umum/podcast/podcast2.png" width="400px" height="auto" alt="" style="border-radius: 30px; box-shadow: 4px 2px 2px 2px rgba(0,0,0,0.4);cursor:pointer;">
                </div>
                </a>
            </div>
        
            
            <div class="tombolmisi">
                <h1>Klik Tombol Untuk Mengerjakan</h1>
                <div>
                    <i class="fas fa-chevron-down fa-8x" style="color: white"></i><br class="beer">
                    <button class="kerjakan" onclick="modaldesclogo2()">Kerjakan</button>
                </div>                
            </div>
            <div class="popupmisi" id="popup-3">
                <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="nmodaldesclogo2()">×</div>
                        <h1 class="title">MISI #2</h1>
                        <img src="asset/logo/LOGO KAYON Stroke.png" alt="">
                        <br>
                        <form method="POST" action="{{ route('podcast.input') }}">
                            @csrf

                            {{-- @method('PUT') --}}
                            <div id="absenquiz">
                                <input type="text" placeholder="Nama Lengkap" name="nama" required><br>
                                <input type="text" placeholder="Nomor Gugus" name="nogugus" required><br>
                                {{-- <input type="text" placeholder="Kelompok Gugus" name="klpgugus" required><br> --}}
                            </div>
                            <div class="faq">
                                <div class="question">
                                    <p><span>1.</span>&emsp;“Self regulation atau self discipline itu hal pribadi yang jadi 
                                    <span>
                                        <input style="width: 30%" class=".form-control-lg" type="text" name="jwb1" required>
                                    </span> 
                                    jadi jangan membandingkan diri sendiri dengan orang lain, jangan paksakan dirimu sampai kamu menyakiti dirimu sendiri, hurt yourself, 
                                    <span>
                                        <input style="width: 30%" class=".form-control-lg" type="text" name="jwb2" required>
                                    </span> 
                                    karena bukan isinya tapi tentang journey nya”.
                                    <br><br>
                                    <span>2.</span>&emsp;Kalau kamu memiliki ambisi, yang berbahaya justru saat kamu <span>
                                        <input style="width: 20%" class=".form-control-lg" type="text" name="jwb3" required>
                                    </span> 
                                    mimpi orang lain. 
                                    <br><br>
                                    <span>3.</span>&emsp;Remindernya adalah reward nih mungkin gak 
                                    <span>
                                        <input style="width: 25%" class=".form-control-lg" type="text" name="jwb4" required>
                                    </span>
                                    , mungkin dia ga instan, jadi dia lama datangnya kalo kita ngomongin nilai.
                                    </p>
                                </div>
                            </div>
                            <input type="submit" name="form2" placeholder="Submit">
                        </form>
                        <a onclick="nmodaldesclogo2()" style="font-weight:bold;cursor: pointer;">Kembali ke Home</a>
                    </div>
                </div>
            </div>  
    </section>
    <section id="misi1">
        <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
        <div class="container">
            <h1 style="font-size: 3rem;font-weight:800;color:white;font-family:Poppins;text-align:left;">MISI <span class="rotate">#3</span></h1><br class="beer">
            <div class="videomisi">
                
                {{-- <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="asset/umum/podcast/podcast main.png" width="700" hei style="cursor:pointer" /></div><div style="display:none">
                    <iframe width="700" height="405" frameBorder="0" src="https://www.youtube.com/embed/PlKUeSbzG3U">
                    </iframe>
                    </div> --}}
                <a class="venobox" data-autoplay="true" data-vbtype="video" overlayClose="false" href="https://www.youtube.com/embed/EYbikvMb7iE">
                <div class="thumbnail">
                    <img src="asset/umum/podcast/podcast3.png" width="400px" height="auto" alt="" style="border-radius: 30px; box-shadow: 4px 2px 2px 2px rgba(0,0,0,0.4);cursor:pointer;">
                </div>
                </a>
            </div>
        
            
            <div class="tombolmisi">
                <h1>Klik Tombol Untuk Mengerjakan</h1>
                <div>
                    <i class="fas fa-chevron-down fa-8x" style="color: white"></i><br class="beer">
                    <button class="kerjakan" onclick="modaldesclogo4()">Kerjakan</button>
                </div>                
            </div>
            <div class="popupmisi" id="popup-4">
                <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="nmodaldesclogo4()">×</div>
                        <h1 class="title">MISI #3</h1>
                        <img src="asset/logo/LOGO KAYON Stroke.png" alt="">
                        <br>
                        <form method="POST" action="{{ route('podcast.input') }}">
                            @csrf

                            {{-- @method('PUT') --}}
                            <div id="absenquiz">
                                <input type="text" placeholder="Nama Lengkap" name="nama" required><br>
                                <input type="text" placeholder="Nomor Gugus" name="nogugus" required><br>
                                {{-- <input type="text" placeholder="Kelompok Gugus" name="klpgugus" required><br> --}}
                            </div>
                            <div class="faq">
                                <div class="question">
                                    <p><span>1.</span>&emsp;Ketika kita sudah memiliki rasa 
                                        <span>
                                            <input style="width: 45%" class=".form-control-lg" type="text" name="jwb1" required>
                                        </span> 
                                        maka kita dapat memaknai sebuah tanggung jawab.
                                    
                                    <br><br>
                                    <span>2.</span>&emsp;Ketika kita tidak menjalankan sebuah tanggung jawab dengan benar maka 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb2" required>
                                    </span> 
                                    akan turun.

                                    <br><br>
                                    <span>3.</span>&emsp;Sebenarnya untuk tanggung jawab sendiri emang ga bisa kita buktikan dengan 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb3" required>
                                    </span> 
                                    melalui tindakan.
                                    <br><br>
                                    <strong>Note : Jawaban Harus Sesuai Dengan Podcast Ke-3 (Tidak Boleh Ada Typo)</strong>
                                    </p>
                                </div>
                            </div>
                            <input type="submit" name="form3">
                        </form>
                        <a onclick="nmodaldesclogo4()" style="font-weight:bold;cursor: pointer;">Kembali ke Home</a>
                    </div>
                </div>
            </div>  
    </section>
    <section id="misi1">
        <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
        <div class="container">
            <h1 style="font-size: 3rem;font-weight:800;color:white;font-family:Poppins;text-align:left;">MISI <span class="rotate">#4</span></h1><br class="beer">
            <div class="videomisi">
                
                {{-- <div onclick="this.style.display='none'; this.nextSibling.style.display='block';"><img src="asset/umum/podcast/podcast main.png" width="700" hei style="cursor:pointer" /></div><div style="display:none">
                    <iframe width="700" height="405" frameBorder="0" src="https://www.youtube.com/embed/PlKUeSbzG3U">
                    </iframe>
                    </div> --}}
                <a class="venobox" data-autoplay="true" data-vbtype="video" overlayClose="false" href="https://www.youtube.com/embed/N4CmrXFHOb0">
                <div class="thumbnail">
                    <img src="asset/umum/podcast/podcast4.png" width="400px" height="auto" alt="" style="border-radius: 30px; box-shadow: 4px 2px 2px 2px rgba(0,0,0,0.4);cursor:pointer;">
                </div>
                </a>
            </div>
        
            
            <div class="tombolmisi">
                <h1>Klik Tombol Untuk Mengerjakan</h1>
                <div>
                    <i class="fas fa-chevron-down fa-8x" style="color: white"></i><br class="beer">
                    <button class="kerjakan" onclick="modaldesclogo5()">Kerjakan</button>
                </div>                
            </div>
            <div class="popupmisi" id="popup-5">
                <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="nmodaldesclogo5()">×</div>
                        <h1 class="title">MISI #4</h1>
                        <img src="asset/logo/LOGO KAYON Stroke.png" alt="">
                        <br>
                        <form method="POST" action="{{ route('podcast.input') }}">
                            @csrf

                            {{-- @method('PUT') --}}
                            <div id="absenquiz">
                                <input type="text" placeholder="Nama Lengkap" name="nama" required><br>
                                <input type="text" placeholder="Nomor Gugus" name="nogugus" required><br>
                                {{-- <input type="text" placeholder="Kelompok Gugus" name="klpgugus" required><br> --}}
                            </div>
                            <div class="faq">
                                <div class="question">
                                    <p><span>1.</span>&emsp;Karena kita sebagai <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb1" required>
                                    </span> menjadi panutan 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb2" required>
                                    </span>. 
                                    Ketika kita melakukan hal baik masyarakat akan melakukan hal yang baik. 
                                    <br><br>


                                    <span>2.</span>&emsp;Peran mahasiswa sebagai media 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb3" required>
                                    </span> ialah mahasiswa berada di tengah2 antara 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb4" required>
                                    </span>. 
                                    Mahasiswa diharapkan mampu memberikan penyadaran baik kepada masyarakat maupun pemerintah.
                                    <br><br>


                                    <span>3.</span>&emsp;Banyak cara mengimplementasikan peran politik kita mahasiswa di 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb5" required>
                                    </span>, 
                                    salah satu contohnya yang muncul di berita adalah mahasiswa mengadakan audiensi dengan pejabat pemerintah.
                                    <br><br>

                                    <span>4.</span>&emsp;Ada satu poin yang menjadi tantang bagi kita ke depan sebagai Lembaga mahasiswa yaitu bagaimana sifat 
                                    <span>
                                        <input style="width: 45%" class=".form-control-lg" type="text" name="jwb6" required>
                                    </span>. 
                                    <br><br>
                                    <strong>Note : Jawaban Harus Sesuai Dengan Podcast Ke-4 (Tidak Boleh Ada Typo)</strong>
                                    </p>
                                </div>
                            </div>
                            <input type="submit" name="form4">
                        </form>
                        <a onclick="nmodaldesclogo5()" style="font-weight:bold;cursor: pointer;">Kembali ke Home</a>
                    </div>
                </div>
            </div>  
    </section>
@endsection