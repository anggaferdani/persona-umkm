@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Registrasi Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent">
    <div class="content">
        <h3 class="fw-bold text-center">REGISTRASI</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
    <div class="form">
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" class="form-control email-input" id="txtemailLogin" placeholder="Nama">
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" class="form-control email-input" id="txtemailLogin" placeholder="Email">
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" class="form-control email-input" id="txtemailLogin" placeholder="Password">
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" class="form-control email-input" id="txtemailLogin" placeholder="Konfirmasi Password">
            </div>
        </div>
        <div class="button text-center">
            <a class="btn btn-regist bg-blue text-center" href="/otp" role="button"><p>Registrasi</p></a>
        </div>
    </div>
    </div>
</div>

@endsection