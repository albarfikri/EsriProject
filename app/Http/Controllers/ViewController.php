<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }   
    
    public function petugas()
    {
        return view('petugas');
    }

    public function drainase()
    {
        return view('petugas');
    }

    public function banjir()
    {
        return view('petugas');
    }

    public function tersumbat()
    {
        return view('tersumbat');
    }

    public function laporan()
    {
        return view('petugas');
    }
}