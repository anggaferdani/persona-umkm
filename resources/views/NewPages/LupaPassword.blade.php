@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Reset Password Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent1">
    <div class="content1">
        <h3 class="fw-bold text-center">RESET PASSWORD</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
    <div class="form">
        <form action="{{url('/post-password')}}" method="post">
            @csrf
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="email" class="form-control email-input" name="email" id="txtemailLogin" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="button text-center">
            <button type="submit" class="btn btn-regist bg-blue text-center"><p>Lanjut</p></button>
        </div>
        </form>
    </div>
    </div>
</div>

@endsection