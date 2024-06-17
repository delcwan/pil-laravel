<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('tamam', function () {
    return view('tamam');
});

Route::get('habib', function () {
    return view('habib');
});

Route::get('film', function () {
    return view('film');
});

Route::get('comingsoon', function () {
    return view('comingsoon');

});

Route::get('produk', function () {
    $kodeproduk = ['BRG001', 'BRG002'];
    $namaproduk = ['Buku', 'Pena'];
    $jenisproduk = ['Alat Tulis', 'Alat Tulis'];
    $harga = [20000, 15000];
    $jumlah = count($kodeproduk);
    return view('produk', compact('kodeproduk', 'namaproduk', 'jenisproduk', 'harga', 'jumlah'));
});

Route::get('/tambahproduk', function () {
    $jenisProduk = ['Jenis Produk', 'Alat Tulis', 'Elektronik', 'Sembako'];
    $jumlahproduk = count($jenisProduk);
    return view('tambahproduk', compact('jenisProduk', 'jumlahproduk'));
});