@extends('NewPagesTemplate.NavbarJustLogo')
@section('judul_tab','Registrasi Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/NewPages/Registrasi.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<img class="objectLeft" id="object" src="{{asset('../../images/objectLeft.png')}}" >
    <img class="objectRight" id="object" src="{{asset('../../images/objectRight.png')}}">
<div class="registrasiContent" >
    <div class="content">
        <h3 class="fw-bold text-center">REGISTRASI MARKETER</h3>
        <p class="text-blue text-center">PERSONA BRAND</p>
    <form action="{{route('marketer.postregister')}}" method="post" enctype="multipart/form-data">
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
                <label for="" class="ms-3 fw-bold">Upload CV<span class="text-danger">* max 2mb</span> <span>contoh cv: <a href="{{url('/dw-contoh/contoh_cv.pdf')}}"><i class="bi bi-file-earmark-arrow-down"></i></a></span></label>
                <input type="file" name="cv" required class="form-control email-input" id="txtemailLogin" placeholder="Email">
                @error('cv')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <label for="" class="ms-3 fw-bold">Upload Portofolio<span class="text-danger">* max 2mb</span> <span class="fw-normal">portofolio adalah kumpulan dokumen seseorang untuk mendokumentasikan perkembangan suatu proses dalam mencapai tujuan yang sudah ditetapkan. Contoh Portofolio: <a href="{{url('/dw-contoh/contoh_porto.pdf')}}"><i class="bi bi-file-earmark-arrow-down"></i></a></span></label>
                <input type="file" name="portofolio" required class="form-control email-input" id="txtemailLogin" placeholder="Email">
                @error('portofolio')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="form-group my-3">
            <div class="form-input-container">
                <input type="url" name="link_portofolio_1" required class="form-control email-input" id="txtemailLogin" placeholder="Link Portofolio 1">
                @error('link_portofolio_1')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="row">
        <div class="form-group my-1 col">
            <div class="form-input-container">
                <input type="url" name="link_portofolio_2" class="form-control email-input" id="txtemailLogin" placeholder="Link Portofolio 2 *opsional">
            </div>
        </div>
        <div class="form-group my-1 col">
            <div class="form-input-container">
                <input type="url" name="link_portofolio_3" class="form-control email-input" id="txtemailLogin" placeholder="Link Portofolio 3 *opsional">
            </div>
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
let x = document.getElementById("password");
let y = document.getElementById("password2");
let z = document.getElementById("dis");
let w = document.getElementById("result");
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