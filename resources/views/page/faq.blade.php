
<?php
$page="Ormawa";
?>

@extends('layouts.template')
@section('content')
      <style>
        #desc-fakultas{
          background-image: url('../asset/umum/bg-putih.jpg')!important;
          color: #000;
        }
        #desc-fakultas hr{
          /* color: #000!important; */
          border-top: 5px solid #000!important;
        }
        .pi{
          display: grid;
          justify-content: center;
          align-content: center;
        }

        .pendaftaran{
          background-image: url('../asset/umum/ukm_pendaftaran.jpg');
          width:400px;
          height:150px;
          border-radius: 100px;
          background-size:cover;
          transition: 0.2s ease;
          cursor: pointer;
          margin-top: 50px;
        }

        .pendaftaran:hover{
          border:5px solid white;
          z-index: 2;
        }

        .info{
          background-image: url('../asset/umum/ukm_info.jpg');
          width:400px;
          height:150px;
          border-radius: 100px;
          background-size:cover;
          transition: 0.2s ease;
          cursor: pointer;
          margin-top: 30px;
        }

        .info:hover{
          border:5px solid white;
          z-index: 2;
        }

        @media only screen and (min-width: 0px) and (max-width:500px){ 
            .info,
            .pendaftaran{
              width:300px;
              height:120px;
          }
        }
        #desc-pnfa{
          background-image: url('{{ URL::asset('asset/umum/bg-penjelasan.jpg') }}');
          color:white;
          background-attachment:fixed;
        }
        #desc-pnfa hr{
          /* color: white; */
          border-top: 5px solid #fff!important;
        }
      </style>
      <!-- Start Page Ormawa -->
      <!-- Start Section Fakultas -->
      <section id="coverfaq">
        <div id="wrapperfaq">
            <h1 style="padding-bottom:50px;" class="title mb-0 aos-init aos-animate" data-aos="fade-right"><span class="font-weight-normal"></span><span>Frequently Asked Questions</span></h1>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left; cursor:pointer;">1. Apa itu PKKMB Universitas Udayana?</h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;PKKMB adalah singkatan dari “Pengenalan Kehidupan Kampus Mahasiswa Baru”. Tujuan diselenggarakannya pengenalan kehidupan kampus adalah sebagai upaya Universitas agar para mahasiswa baru lebih mudah beradaptasi dengan proses pembelajaran dan kehidupan kemahasiswaan di Universitas Udayana.
                    </p>
                </div>
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">2. Apakah PKKMB Universitas Udayana wajib diikuti?</h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;PKKMB Universitas Udayana merupakan syarat wajib untuk mengikuti Yudisium. Jadi, bagi mahasiswa universitas udayana wajib untuk mengikuti PKKMB.
                    </p>
                </div>
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">3. Bagaimana bila tidak mengikuti PKKMB tahun ini?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Bila tidak mengikuti PKKMB tahun ini, bisa mengikuti PKKMB di tahun depan karena PKKMB merupakan kegiatan yang wajib diikuti mahasiswa Universitas Udayana/
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">4. Apa itu Gugus PKKMB?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Gugus adalah kelompok orientasi yang terdiri dari 100 mahasiswa yang diawasi oleh dua atau tiga orang panitia pendamping gugus.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">5. Apa itu Pendamping Gugus – Pangus?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Pangus merupakan akronim dari “Pedamping Gugus” yang memiliki fungsi menjadi pendamping mahasiswa di dalam gugus selama mengikuti kegiatan PKKMB.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">6. Bagaimana cara mendapatkan nomor Gugus?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Nomor gugus bisa didapat saat selesai melakukan pendaftaran ulang dan verifikasi online yang nantinya akan mendapatkan NIM dan juga nomor gugus.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">7. Bagaimana cara masuk grup gugus PKKMB?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Setelah mendapat nomor Gugus, maba dapat memeriksa postingan PKKMB di IG @ksatriamudaudayana terkait pembagian pangus, yang kemudian maba bisa mengirimkan nomor gugus berdasarkan pembagian pangus pada postingan tersebut untuk masuk grup gugus.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">8. PKKMB Universitas Udayana dilaksanakan online atau offline?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Pada tahun ini PKKMB Universitas Udayana dilaksanakan secara offline, namun bagi mahasiswa yang berhalangan hadir karena alasan terjangkit covid, masalah finansial, dan keperluan mendesak lainnya akan difasilitasi secara online dengan melampirkan surat ijin dan mengisi gform yang sudah disediakan.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">9. Dimana PKKMB Universitas Udayana akan dilaksanakan?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Hari-H PKKMB akan dilaksanakan di Gedung Widya Sabha, Kampus Jimbaran.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">10. Kapan kegiatan PKKMB Universitas Udayana dilaksanakan?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Hari-H PKKMB akan dilaksanakan selama dua hari pada tanggal 8-9 Agustus 2022.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">11. Apa saja rangkaian kegiatan PKKMB Universitas Udayana?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Rangkaian kegiatan PKKMB diantaranya adalah Temu Pangus, Mentoring, Capacity Building dan Hari-H PKKMB.
                    </p>
                </div>  
            </div>
            <div class="faq aos-init aos-animate" data-aos="zoom-in-up" data-aos-delay="400">
                <div class="question">
                    <h2 class="title" style="text-align:left;cursor:pointer;">12. Dimana bisa mendapat informasi terbaru terkait PKKMB?
                    </h2>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path
                        d="M3 3L21 21L39 3"
                        stroke="black"
                        stroke-width="7"
                        stroke-linecap="round"
                        />
                    </svg>
                </div>
                <div class="answer">
                    <p>&emsp;&emsp;&emsp;Segala informasi terbaru terkait PKKMB Universitas Udayana dapat dilihat pada linimasa resmi PKKMB Universitas Udayana 2022 di bawah ini:<br>
                        - Website PKKMB Universitas Udayana pkkmb.bemudayana.id<br>
                        - Instagram @ksatriamudaudayana
                        
                    </p>
                </div>  
            </div>
        </div>
    </div>
      </section>
@endsection