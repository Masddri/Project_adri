<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Produks;
use App\Models\Penggunas;
use App\Models\Telepons;



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
    return view('welcome');
});

Route::get('/about', function () {
    $nama = "Rafli";
    $jk = "Cowo Kul";
    $alamat = "Rancamanyar";
    $pendidikan = "Smk";
    $pekerjaan = "Tukang Ojek";
    return view('biodata', compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

Route::get('/home', function () {
    return view('biodata2');
});

Route::get('/kontak', function () {
    return view('biodata3');
});

//parameter
Route::get('/about2/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama,$jk,$alamat,$pendidikan,$pekerjaan) {

    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});

Route::get('/data_post', function () {
    //Menampilkan semua data
    $posts = Post::find(3);

    return $posts;

    // return view('tampil_post', compact('posts'));
});

Route::get('/data_produks', function () {
    //Menampilkan semua data
    $produks = produks::all();

    return view('tampil_produk', compact('produks'));
});

Route::get('/data_penggunas', function () {
    //Menampilkan semua data
    $penggunas = penggunas::all();

    return view('tampil_pengguna', compact('penggunas'));

    // return view('tampil_post', compact('posts'));
});

Route::get('/data_telepons', function () {
    //Menampilkan semua data
    $telepons = telepons::all();

    return view('tampil_telepon', compact('telepons'));

    // return view('tampil_post', compact('posts'));
});







