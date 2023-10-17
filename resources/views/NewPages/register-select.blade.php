@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Registrasi Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent">
    <div class="content">
        <h3 class="fw-bold text-center text-dark">PILIH ROLE ANDA</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
        <div class="d-flex justify-content-center gap-2 my-2">
            <a href="/marketer/register" style="border-radius: 50px;" class="btn btn-primary btn-md px-5">Marketer</a>
            <a href="/umkm/register" style="border-radius: 50px;" class="btn btn-primary btn-md px-5">UMKM</a>
        </div>
        <a class="d-block text-center" href="/">Sudah Punya Akun?</a>
    </div>
</div>

@endsection