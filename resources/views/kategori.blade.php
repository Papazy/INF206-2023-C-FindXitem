@extends('Layouts.main')

@section('container')

<style>
    .card1 {
        background: #f2f2f2; /* warna background */
        margin-bottom: 20px; /* jarak antar elemen */
        padding: 10px; /* jarak antara konten dengan batas elemen */
    }
</style>

<div class="row">

    <div class="col-12 col-md-4 card1">
        <div>Hewan</div>
    </div>

    <div class="col-12 col-md-4 card1">
        <div>Elektronik</div>
    </div>

    <div class="col-12 col-md-4 card1">
        <div> Aksesoris</div>
    </div>

</div>

@endsection
