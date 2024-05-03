<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Halaman Utama
    function index()
    {
        $pageTitle = 'home';
        return view('home', ['pageTitle' => $pageTitle]);
    }
}
