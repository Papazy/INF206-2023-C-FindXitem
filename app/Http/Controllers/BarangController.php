<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function search(){
        return view('hal-pencarian');
    }

    public function report(){
        return view('hal-pelaporan',[
            'title' => 'report Page'
        ]);
    }

    public function kategori(){
        return view('kategori',[
            'title' => 'kategori barang'
        ]);
    }
}