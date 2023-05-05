@extends('Layouts.main')
@section('container')
<div class="row text-center text-white p-5 rounded" style="background-color: rgba(61, 61, 61, 0.575)" >
    <div class="col-5 border-end pe-5">
        <i class="bi bi-person-circle" style="color:white;font-size:10rem;"></i>
    </div>
    <div class="d-flex flex-column col-7 justify-content-center text-start ps-5 fs-5">
        
        <p>Nama : {{ $result->nama_penemu }}</p>
        <p>Nomor HP : {{ $result->noHp }}</p>
        <p>Email :{{ $result->email }}</p>
        <a class="bttn mt-1" href="{{ $result->whatsApp()  }}">Kirim Pesan</a>
        <a class="bttn mt-3" href="/" style="background-color: rgb(13, 182, 182)">Kirim Email</a>
    </div>
    
</div>
@endsection