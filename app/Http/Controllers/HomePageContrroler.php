<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageContrroler extends Controller
{
    function daftarKursus(){
        return view('kursus.daftarKursus');
    }
}
