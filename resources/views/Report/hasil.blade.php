@extends('Layouts.main')
@section('container')
<div class="text-center text-white p-5 rounded" style="background-color: rgba(61, 61, 61, 0.575)">
    <img src="{{ asset('img/success.png') }}" alt="" style="max-width: 300px">
    <p class="fs-2">Barang Temuan Anda Berhasil Diupload</p>
    <p class="fs-4">Terima kasih telah mempercayakan kami, anda adalah <span style="color:rgb(0, 231, 0)">Pahlawan</span></p>
    <a class="bttn " style="color:white; background-color:rgb(24, 6, 100)" href="{{ url('/') }}">Kembali</a>
    
    
</div>
@endsection