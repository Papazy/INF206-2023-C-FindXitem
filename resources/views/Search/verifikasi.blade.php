@extends('Layouts.main')
@section('container')
<div class="row text-center text-white p-5 rounded" style="background-color: rgba(61, 61, 61, 0.575)">
    <div class="col border-end pe-5">
        <i class="bi bi-person-circle" style="color:white;font-size:10rem;"></i>
    </div>
    <div class="d-flex flex-column col justify-content-center text-start ps-5 fs-5">
        <p>Nama :</p>
        <p>Nomor HP :</p>
        <p>Email :</p>
        <a class="bttn mt-2" href="/">Kirim Pesan</a>
        <a class="bttn mt-2" href="/" style="background-color: rgb(13, 182, 182)">Kirim Email</a>
    </div>
    
</div>
@endsection