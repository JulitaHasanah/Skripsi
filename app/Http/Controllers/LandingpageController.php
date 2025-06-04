<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    public function index()
    {
        return view('landingpage'); //menampilkan halaman landingpage
    }

    public function home()
    {
        return view('home'); //menampilkan halaman landingpage
    }

    public function cp()
    {
        return view('cp'); //menampilkan halaman landingpage
    }
    public function informasi()
    {
        return view('informasi'); //menampilkan halaman landingpage
    }
}
