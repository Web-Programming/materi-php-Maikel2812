<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\ProgressIndicator;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('beranda', 
    [
            'name' => 'Michel',
            'email' => 'dmaikel10@gmail.com',
            'alamat' => 'Palembang'
        ]
    );
});

Route::get('/berita/{id}/{judul?}', function($id, $judul = null){
    return view('berita', ['id' => $id, 'judul' => $judul]);
});

//membuat route ke halam prodi index melalui controller ProdiController
//Route::get('/prodi/index', [ProdiController::class,'index']);

Route::resource('prodi', ProdiController::class);