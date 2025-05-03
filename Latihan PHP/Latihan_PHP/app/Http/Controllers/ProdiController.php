<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    function index(): View{
        return view(view:"prodi.index");
    }
}
