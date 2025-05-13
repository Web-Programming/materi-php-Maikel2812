<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda', 
    [
        'name' => 'Angel',
        'email' => 'angelstvny10@gmail.com',
        'alamat' => 'Palembang']);
});

Route::get('/berita/', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});