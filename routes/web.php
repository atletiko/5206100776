<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
// import java.io ;


// Sytem.out.println() ;
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloword'] );

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('dosen', [Link::class,'index'] );
Route::get('/pegawai/{nama}', [PegawaiController::class,'index'] );

Route::get('/formulir', [PegawaiController::class,'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class,'proses'] );

// route blog
Route::get('/blog', [BlogController::class,'home'] );
Route::get('/blog/tentang', [BlogController::class,'tentang'] );
Route::get('/blog/kontak', [BlogController::class,'kontak'] );
