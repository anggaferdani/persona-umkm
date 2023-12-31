@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Registrasi Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent1">
    <div class="content1">
        <h3 class="fw-bold text-center">REGISTRASI UMKM</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
    <form id="myform" action="{{route('user.postregister')}}" method="post">
        @csrf
    <div class="form">
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="text" name="name" required class="form-control email-input" id="txtemailLogin" placeholder="Nama">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="email" name="email" required class="form-control email-input" id="txtemailLogin" placeholder="Email">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="number" name="no_telp" required class="form-control email-input" id="txtemailLogin" placeholder="Nomor Telepon">
                @error('no_telp')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="password" required class="form-control email-input" id="txtemailLogin" placeholder="Password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="password" id="password2" onchange="check()" name="password" required class="form-control email-input" id="txtemailLogin" placeholder="Konfirmasi Password">
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
<script>
  document.getElementById('myform').addEventListener('submit', function () {
    document.getElementById('dis').disabled = true;
  });
</script>
@endsection