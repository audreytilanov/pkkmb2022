<?php


use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\PkkmbCotroller;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PaguyubanController;
use App\Http\Controllers\ForumAgamaController;
use App\Http\Controllers\PendaftaranController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('page/beranda');
});

Route::get('/', [PkkmbCotroller::class, 'index'])->name('index');
Route::get('/ormawa', [PkkmbCotroller::class, 'lembaga'])->name('ormawa');

//Ormawa
// Route::get('ormawa/', 'App\Http\Controllers\OrmawaController@index');
// Route::get('ormawa/fakultas{id}', 'App\Http\Controllers\OrmawaController@show');

// Fakultas
// Route::get('fakultas', 'App\Http\Controllers\FakultasController@index')->name('fakultas.index');
// Route::get('fakultas/{id}', 'App\Http\Controllers\FakultasController@show');

//Forum Agama dan Paguyuban
// Route::get('ormawa/pnfa', 'App\Http\Controllers\PaguyubanController@index');
// Route::get('ormawa/pnfa', 'App\Http\Controllers\ForumAgamaController@index' );

Route::get('/petaunud/', function(){
    $halaman = "maps";
    return view('page/peta',compact('halaman'));
})->name('petaunud');
Route::get('/petaunud/peta-kamsud', function(){
    return view('page/peta-kamsud');
});

Route::get('/petaunud/peta-sanglah', function(){
    return view('page/peta-sanglah');
});

Route::get('/petaunud/peta-bukit', function(){
     return view('page/peta-bukit');
});

Route::get('/galeri', function(){
    $halaman = "tentang";
    return view('page/galeri', compact('halaman'));
})->name('galeri');

Route::get('/panitia', 'App\Http\Controllers\PanitiaController@index');

Route::get('/podcast', function(){
    return view('page.podcast');
})->name('podcast.input');

Route::post('/podcast', [PodcastController::class, 'store']);

Route::get('/guidebook', function(){
    return view('page/bukupanduan');
});



Route::get('/pendaftaran', function(){
    return view('page.pendaftaran');
})->name('pendaftaran.input');

Route::post('/pendaftaran', [PendaftaranController::class, 'store']);






// UKM
// ukm
Route::get('/ukm', [UkmController::class, 'index']);

Route::get('/ukm/{detail:slug}', [UkmController::class, 'show']);

Route::get('/capacitybuilding', function(){
    return view('page.cp');
});

Route::get('/ruangbercakap2', function(){
    return view('page.rb');
});

Route::get('/misi', function(){
    return view('page.newmisi');
});



// Route::get('/ormawa', function(){
//     return view('page/ormawa');
// });

// Route::get('/detail-fakultas', function(){
//     return view('page/detail-fakultas');
// });



