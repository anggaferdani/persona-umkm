@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Registrasi Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent">
    <div class="content">
        <h3 class="fw-bold text-center">REGISTRASI UMKM</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
    <form action="{{route('user.postregister')}}" method="post">
        @csrf
    <div class="form">
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" name="name" class="form-control email-input" id="txtemailLogin" placeholder="Nama Umkm Anda">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="email" name="email" class="form-control email-input" id="txtemailLogin" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="password" class="form-control email-input" id="txtemailLogin" placeholder="Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="password2" onchange="check()" name="password" class="form-control email-input" id="txtemailLogin" placeholder="Konfirmasi Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                <div id="result" class="result text-danger"></div>
            </div>
        </div>
        <div class="button text-center">
            <button id="dis" class="btn btn-regist bg-blue text-center" type="submit"><p>Registrasi</p></button>
        </div>
    </div>
    </form>
    </div>
</div>
<script>
function check() {
var x = document.getElementById("password");
var y = document.getElementById("password2");
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