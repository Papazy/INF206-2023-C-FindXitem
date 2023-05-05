@extends('Layouts.main')

@section('container')
<div class="content content-not-found">
    <img class="img-not-found" src="/img/no-result-found.png" alt="No-result-found img">
    <div class="desc">
        <p style="font-size: 2rem;font-weight: 700;">Maaf barang yang anda cari belum ditemukan</p>
        <p>Coba masukkan kata kunci lain tentang barang anda</p>
        <p>Anda dapat menunggu notifikasi hingga barang anda ditemukan</p>
        <br>
        <button><a class="bttn" href="/search">Cari kembali</a></button>
    </div>
</div>
@endsection