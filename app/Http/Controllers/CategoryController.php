<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function kategori(){
        return view('kategori',[
            'title' => 'kategori barang'
        ]);
    }
}
