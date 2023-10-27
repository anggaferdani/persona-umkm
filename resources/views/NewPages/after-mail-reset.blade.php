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
        <form action="{{url('/forgot-password')}}" method="post">
            @csrf
            <input type="hidden" value="{{$token}}" name="token">
            <input type="hidden" value="{{$email->email}}" name="email">
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="f" class="form-control email-input" id="txtemailLogin" placeholder="Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="cf" onchange="check()" class="form-control email-input" name="password" id="txtemailLogin" placeholder="Confirm Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="text-danger" id="result"></div>
            </div>
        </div>
        <div class="button text-center">
            <button type="submit" id="dis" class="btn btn-regist bg-blue text-center"><p>Lanjut</p></button>
        </div>
        </form>
    </div>
    </div>
</div>

<script>
function check() {
var x = document.getElementById("f");
var y = document.getElementById("cf");
var z = document.getElementById("dis");
var w = document.getElementById("result");
if (x.value === y.value) {
  w.innerHTML = "";
  z.disabled = false;
} else {
    w.innerHTML = "Not Match";
  z.disabled = true;
}
}
</script>
@endsection