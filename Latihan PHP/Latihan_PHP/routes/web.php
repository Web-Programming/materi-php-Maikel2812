<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('beranda',['name'=>'Michel','email'=>'dmaikel10@gmail.com','alamat'=>'jalan kutilang V']);
});
Route::get('/berita/', function ($id) {
    return view('berita',['id'=>$id,'judul'=>$judul]);
});
Route::get(uri:'/prodi/index',action: [ProdiController::class,'index']);