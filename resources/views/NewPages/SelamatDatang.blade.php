@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Selamat Datang')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/SelamatDatang.css')}}">
<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="selamatDatangContent text-center">
    <p>Selamat Datang !</p>
    <p class="text-blue fw-bold">GALIH ALDIO PUTRA</p>
    <p class="mt-5">Ayo mulai dan Tentukan Persona Brandmu
        disini dengan mengisi kuisoner yang ada</p>

        <div class="btn-isi d-flex justify-content-center mt-5">
            <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/kuisioner" role="button">
                <p class="fw-bold">ISI KUISIONER</p>
                <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                <p></p>
            </a>
        </div>
</div>

@endsection