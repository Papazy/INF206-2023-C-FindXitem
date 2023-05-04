<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showLanding(){
        return view('landing-page',[
            'title' => 'Cari barangmu disini'
        ]);
    }

    public function search(){
        return view('Search.hal-pencarian',[
            'title' => 'Search Page'
        ]);
    }
    
    public function kategory(){
        return view('kategori',[
            'title' => 'Kategori'
        ]);
    }
    

    public function result(){
        return view('result',[
            'title' => 'Hasil'
        ]);
    }

    public function verif(){
        return view('Search.verifikasi',[
            'title' => 'Verifikasi'
        ]);
    }

    public function notfound(){
        return view('result_no',[
            'title' => 'Result'
        ]);
    }
}
