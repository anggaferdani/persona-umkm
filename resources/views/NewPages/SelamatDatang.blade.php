@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Selamat Datang')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/SelamatDatang.css')}}">
<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}">
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="selamatDatangContent text-center">
    <p>Selamat Datang !</p>
    <p class="text-blue fw-bold">{{Auth::user()->name}}</p>
    <p class="mt-5">Ayo mulai dan Tentukan Kepribadian anda
        disini dengan mengisi kuisoner yang ada</p>
        @if(Auth::user()->role == 3)
        <div class="btn-isi d-flex justify-content-center mt-5">
            <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/umkm/kuisioner" role="button">
                <p class="fw-bold">Kerjakan Personality Tes</p>
                <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                <p></p>
            </a>
        </div>
        @elseif(Auth::user()->role == 4)
        <div class="btn-isi d-flex justify-content-center mt-5">
            <a class="btn bg-blue d-flex align-items-center gap-2 justify-content-center w-50" href="/marketer/kuisioner" role="button">
                <p class="fw-bold">Kerjakan Personality Tes</p>
                <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                <p></p>
            </a>
        </div>
        @endif
</div>

@endsection