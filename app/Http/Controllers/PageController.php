<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Halo nama saya Ahmad Ramadhan Baiakbar, NIM saya 2341720085';
    }
    public function articles($id)
    {
        return 'Halaman artikel dengan ID '.$id;
    }
}
