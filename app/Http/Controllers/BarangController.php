<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function search(){
        return view('Search.hal-pencarian');
    }

    public function report(){
        return view('Report.hal-pelaporan',[
            'title' => 'report Page'
        ]);
    }

    public function store(Request $request){

        
        Barang::create([
            "nama" => $request['nama'],
            "kategori" => $request['kategori'],
            "warna_dasar" => $request['warna_dasar'],
            "warna_sekunder" => $request['warna_sekunder'],
            "image" => $request['image'],
            "brand" => $request['brand'],
            "lokasi" => $request['lokasi'],
            "waktu" => $request['waktu'],
        ]);
        return redirect('/report/hasil');
    }

    public function reportResult(){
        return view('Report.hasil',[
            'title' => 'result',
        ]);
    }
    public function searchResult(Request $request){
       
        $result = Barang::where('nama', 'like', '%' . request('nama') . '%')->get();
        
        
        

        return view('Search.hasil',[
            'title' => 'result',
            'result' => $result
        ]);
        
    }
}