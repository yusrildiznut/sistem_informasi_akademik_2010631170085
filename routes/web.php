<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Welcome Home"
    ]);
});

Route::get('/dosen', function () {
    return view('dosen', [
        "title" => "Dosen",
        "name" => "Aji",
        "data1" => "data 1",
        "data2" => "data 2",
        "data3" => "data 3",
        "data4" => "data 4",
        "data5" => "data 5",
        "data6" => "data 6",
        "data7" => "data 7",
        "data8" => "data 8"


    ]);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa', [
        "title" => "Mahasiswa",
        "name" => "M. Yusril Reza Pratama",
        "data1" => "data 1",
        "data2" => "data 2",
        "data3" => "data 3",
        "data4" => "data 4",
        "data5" => "data 5",
        "data6" => "data 6",
        "data7" => "data 7",
        "data8" => "data 8"


    ]);
});

Route::get('/matakuliah', function () {
    return view('matakuliah', [
        "title" => "Matakuliah",
        "name" => "Framework Pemrograman Web ",
        "data1" => "data 1",
        "data2" => "data 2",
        "data3" => "data 3",
        "data4" => "data 4",
        "data5" => "data 5",
        "data6" => "data 6",
        "data7" => "data 7",
        "data8" => "data 8"


    ]);
});
