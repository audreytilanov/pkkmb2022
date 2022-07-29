// Loading Overlay
// $(window).on('load', function() {
//     $(".overlay-load").fadeOut(1000);
//     $("main").fadeIn(2000);
// });

// AOS
AOS.init();

const faqs=document.querySelectorAll(".faq");
faqs.forEach((faq) =>{
  faq.addEventListener("click", ()=>{
    faq.classList.toggle("active");
  });
});

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
        $('header').addClass('black');
  }

  else {
        $('header').removeClass('black');
  }
})


// Hamburger Menu
var tombol = document.querySelector('#menu');
var menu = document.querySelector('#menu-content');

tombol.addEventListener('click', () =>{
    menu.classList.toggle('show');
    tombol.classList.toggle('show');
});

// Venebox
$(document).ready(function(){
  $('.venobox').venobox();});

$(".maps-paguyuban").click(function(){
  $("#list-paguyuban").modal("show");
});

$(".show_info_paguyuban").click(function(){
  $("#list-paguyuban").modal("show");
});

$(".paguyuban-popup").click(function(){
  $("#list-paguyuban").modal("hide");
  $("#detailPaguyuban").modal("show");
  // Content modal yg ingin diinisialisasi
  var titleModal ='';
  titleModal= $(this).data('title-paguyuban');
  var bodyModal ='';
  bodyModal=$(this).data('body-paguyuban')
  $("#paguyubanTitle").html(titleModal);
  $("#paguyubanBody").html(bodyModal);
  $("#detailPaguyuban").click(function(){
    $("#detailPaguyuban").modal("hide");
  })
});
    

// Lini Masa
$('#slider').owlCarousel({
    loop:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

// Swiper Forum Agama
var swiper = new Swiper('.swiper-container',{
  effect:'coverflow',
  grabCursor:true,
  centeredSlides:true,
  slidesPerView:'auto',
  coverflowEffect:{
    rotate:50,
    stretch:0,
    depth:100,
    modifier:1,
    slideShadows:true,
  },
  pagination:{
    el:'.swiper-pagination',
  },
});


// Gallery Youtube
$(".item-podcast").click(function(){
    let youtube_id= $(this).children("img").attr("data-id");
    console.log(youtube_id);
    $(this).children(".youtube-icon")
      .addClass("active").parent()
      .siblings()
      .children(".youtube-icon")
      .removeClass("active")
    let newUrl = youtube_id;
    $("#video_id").attr("src", newUrl);
});


//POPUP FORUM AGAMA
// $(".swiper-slide").click(function(){
//   $("#detailFA").modal("show");
// });


// POPUP PETA
$(".icon-building").click(function(){
  $("#wtf").modal("show");
  // Content modal yg ingin diinisialisasi
  var titleModal ='';
  titleModal= $(this).data('title');
  var bodyModal ='';
  bodyModal=$(this).data('body')
  $("#exampleModalLongTitle").html(titleModal);
  $("#exampleModalLongBody").html(bodyModal);
});

$(".card-koor").click(function(){
  $("#detailPanitia").modal("show");
  // Content modal yg ingin diinisialisasi
  var titleModal ='';
  titleModal= $(this).data('title-panitia');
  var bodyModal ='';
  bodyModal=$(this).data('body-panitia')
  $("#panitiaTitle").html(titleModal);
  $("#panitiaBody").html(bodyModal);
});





// Music
let now_playing = document.querySelector(".now-playing");

let track_art = document.querySelector(".track-art");

let track_name = document.querySelector(".track-name");

let track_artist = document.querySelector(".track-artist");



let playpause_btn = document.querySelector(".playpause-track");

let next_btn = document.querySelector(".next-track");

let prev_btn = document.querySelector(".prev-track");

let loop_btn = document.querySelector(".loop-track");



let seek_slider = document.querySelector(".seek_slider");

let volume_slider = document.querySelector(".volume_slider");

let curr_time = document.querySelector(".current-time");

let total_duration = document.querySelector(".total-duration");



let track_index = 1;

let isPlaying = false;

let isLoop = false;

let updateTimer;



// Create new audio element

let curr_track = document.createElement('audio');



// Define the tracks that have to be played

let track_list = [{

    name: "Bhakti Udayana",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/bakti.mp3"

  },

  {

    name: "Mars Udayana",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/unud.mp3"

  },

  {

    name: "Hymne Udayana",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/hymne.mp3",

  },

  {

    name: "Mars Mahasiswa",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/mhs.mp3",

  },

  {

    name: "Buruh Tani",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/buruh.mp3",

  },

  {

    name: "Jaya Udayana",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/jayaudayana.mp3",

  },
  {

    name: "Darah Juang",

    artist: "Universitas Udayana",

    image: "../asset/2022/logo.png",

    path: "../asset/2022/lagu/darah.mp3",

  }

];



function loadTrack(track_index) {

  clearInterval(updateTimer);

  resetValues();

  curr_track.src = track_list[track_index].path;

  curr_track.load();



  // track_art.style.backgroundImage = "url(" + track_list[track_index].image + ")";
  document.getElementById("myImg").src = track_list[track_index].image;

  track_name.textContent = track_list[track_index].name;

  track_artist.textContent = track_list[track_index].artist;

  now_playing.textContent = "PLAYING " + (track_index + 1) + " OF " + track_list.length;



  updateTimer = setInterval(seekUpdate, 1000);

  curr_track.addEventListener("ended", nextTrack);



}



function resetValues() {

  curr_time.textContent = "00:00";

  total_duration.textContent = "00:00";

  seek_slider.value = 0;

}



// Load the first track in the tracklist

loadTrack(track_index);



function playpauseTrack() {

  if (!isPlaying) playTrack();

  else pauseTrack();

}



function playTrack() {

  curr_track.play();

  isPlaying = true;

  playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-5x"></i>';

}



function pauseTrack() {

  curr_track.pause();

  isPlaying = false;

  playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-5x"></i>';;

}



function playToTrack(index) {

  if (index < 0)

    track_index = 0;

  else if (index > track_list.length)

    track_index = track_list.length;

  else track_index = index;

  loadTrack(track_index);

  playTrack();

}



function nextTrack() {

  if (track_index < track_list.length - 1)

    track_index += 1;

  else track_index = 0;

  loadTrack(track_index);

  playTrack();

}



function prevTrack() {

  if (track_index > 0)

    track_index -= 1;

  else track_index = track_list.length;

  loadTrack(track_index);

  playTrack();

}



function loopTrack() {

  isLoop = !isLoop;

  curr_track.loop = isLoop;



  if (isLoop) {

    loop_btn.style.opacity = "1";

  } else {

    loop_btn.style.opacity = "0.5";

  }

}



function seekTo() {
  // seekto = seek_slider.value;
  seekto = curr_track.duration * (seek_slider.value / 100);

  curr_track.currentTime = seekto;
  // curr_track.seekTo(seekto);
  // playTrack();

}


function setVolume() {

  curr_track.volume = volume_slider.value / 100;

}



function seekUpdate() {

  let seekPosition = 0;



  if (!isNaN(curr_track.duration)) {

    seekPosition = curr_track.currentTime * (100 / curr_track.duration);



    seek_slider.value = seekPosition;



    let currentMinutes = Math.floor(curr_track.currentTime / 60);

    let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);

    let durationMinutes = Math.floor(curr_track.duration / 60);

    let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);



    if (currentSeconds < 10) {

      currentSeconds = "0" + currentSeconds;

    }

    if (durationSeconds < 10) {

      durationSeconds = "0" + durationSeconds;

    }

    if (currentMinutes < 10) {

      currentMinutes = "0" + currentMinutes;

    }

    if (durationMinutes < 10) {

      durationMinutes = "0" + durationMinutes;

    }



    curr_time.textContent = currentMinutes + ":" + currentSeconds;

    total_duration.textContent = durationMinutes + ":" + durationSeconds;

  }

}

// Pop up fakultas
// FPAR
function modaldescfpar(){
  document.getElementById("modaldescfpar").classList.toggle("active");
}

function nmodaldescfpar(){
  document.getElementById("modaldescfpar").classList.remove("active");
}

// FIB

function modaldescfib(){
  document.getElementById("modaldescfib").classList.toggle("active");
}

function nmodaldescfib(){
  document.getElementById("modaldescfib").classList.remove("active");
}

// FK
function modaldescfk(){
  document.getElementById("modaldescfk").classList.toggle("active");
}

function nmodaldescfk(){
  document.getElementById("modaldescfk").classList.remove("active");
}

// FH
function modaldescfh(){
  document.getElementById("modaldescfh").classList.toggle("active");
}

function nmodaldescfh(){
  document.getElementById("modaldescfh").classList.remove("active");
}

// FT
function modaldescft(){
  document.getElementById("modaldescft").classList.toggle("active");
}

function nmodaldescft(){
  document.getElementById("modaldescft").classList.remove("active");
}

// FP
function modaldescfp(){
  document.getElementById("modaldescfp").classList.toggle("active");
}

function nmodaldescfp(){
  document.getElementById("modaldescfp").classList.remove("active");
}

// FEB
function modaldescfeb(){
  document.getElementById("modaldescfeb").classList.toggle("active");
}

function nmodaldescfeb(){
  document.getElementById("modaldescfeb").classList.remove("active");
}

// FAPET
function modaldescfapet(){
  document.getElementById("modaldescfapet").classList.toggle("active");
}

function nmodaldescfapet(){
  document.getElementById("modaldescfapet").classList.remove("active");
}

// FMIPA
function modaldescfmipa(){
  document.getElementById("modaldescfmipa").classList.toggle("active");
}

function nmodaldescfmipa(){
  document.getElementById("modaldescfmipa").classList.remove("active");
}

// FKH
function modaldescfkh(){
  document.getElementById("modaldescfkh").classList.toggle("active");
}

function nmodaldescfkh(){
  document.getElementById("modaldescfkh").classList.remove("active");
}

// FTP
function modaldescftp(){
  document.getElementById("modaldescftp").classList.toggle("active");
}

function nmodaldescftp(){
  document.getElementById("modaldescftp").classList.remove("active");
}

// FISIP
function modaldescfisip(){
  document.getElementById("modaldescfisip").classList.toggle("active");
}

function nmodaldescfisip(){
  document.getElementById("modaldescfisip").classList.remove("active");
}

// FKP
function modaldescfkp(){
  document.getElementById("modaldescfkp").classList.toggle("active");
}

function nmodaldescfkp(){
  document.getElementById("modaldescfkp").classList.remove("active");
}
// Pop up

function modaldesclogo(){
  document.getElementById("popup-1").classList.toggle("active");
}

function nmodaldesclogo(){
  document.getElementById("popup-1").classList.remove("active");
}

function modalcs(){
  document.getElementById("popup-2").classList.toggle("active");
}

function nmodalcs(){
  document.getElementById("popup-2").classList.remove("active");
}

function modaldesclogo2(){
  document.getElementById("popup-3").classList.toggle("active");
}

function nmodaldesclogo2(){
  document.getElementById("popup-3").classList.remove("active");
}

function modaldesclogo4(){
  document.getElementById("popup-4").classList.toggle("active");
}

function nmodaldesclogo4(){
  document.getElementById("popup-4").classList.remove("active");
}

function modaldesclogo5(){
  document.getElementById("popup-5").classList.toggle("active");
}

function nmodaldesclogo5(){
  document.getElementById("popup-5").classList.remove("active");
}



function modalDescFakultas(){
  document.getElementById("list-fakultas").classList.toggle("active");
}

function nmodalDescFakultas(){
  document.getElementById("list-fakultas").classList.remove("active");
}

function modalDescPaguyuban(){
  document.getElementById("list-paguyuban").classList.toggle("active");
}






