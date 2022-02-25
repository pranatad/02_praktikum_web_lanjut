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
echo 'Selamat Datang';
});


Route::get('/about', function (){
    return '<center>NIM : 204172004<br>
    Nama : Pranata Dito Fitriyansyah<br>
    No. Absen : 17</center>';
});

Route::get('/articles/{id}', function ($id) {
    return 'Ini merupakan halaman artikel dengan ID ' .$id;
});    