@extends('Layouts.main')

@section('container')
    <div class="content p-5 rounded bg-light d-flex align-self-center shadow">
        <div class="col foto text-center">
            <img src="img/hp-1.jpeg" alt="">
        </div>
        <div class="col deskripsi d-flex flex-col justify-content-center mt-0 fs-4 border-start ps-3">
            <span>Barang : Realme 3 Pro</span>
            <span>Kategori : Handphone</span>
            <span>Lokasi ditemukan : Meulaboh</span>
            <span>Waktu ditemukan : 22 Juni 2023</span>
            <br>
            <p>Apakah ini punya anda ?</p>
            <a href="/verifikasi" class="bttn text-center mb-3">
                    <button class=" bttn">
                      Ya  
                    </button>
                </a>
            
            <a href="/result/notfound" class="bttn bg-danger text-center">
                <button class="bttn bg-danger">
                    Bukan
                </button>
                </a>
        </div>

    </div>
@endsection