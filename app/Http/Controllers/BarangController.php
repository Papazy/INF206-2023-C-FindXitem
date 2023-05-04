<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

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

    public function store(Request $request){
        Barang::create([
            "nama" => $request['nama'],
            "kategori" => $request['kategori'],
            "warna_dasar" => $request['warna_dasar'],
            "warna_sekunder" => $request['warna_sekunder'],
            "brand" => $request['brand'],
            "lokasi" => $request['lokasi'],
            "waktu" => $request['waktu'],
        ]);
        return redirect('/');
    }
}