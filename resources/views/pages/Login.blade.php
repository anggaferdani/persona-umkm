@extends('Pages.Templates')
@section('judul_tab','Login Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/Pages/Login.css')}}">

    <div class="loginPage">
        <h3 class="text-center text-blue fw-bold mb-5">UMKM</h3>
        <h3 class="text-center fw-bold">Selamat Datang <br> Kembali</h3>
        <div class="form-group my-3">
            <div class="email-input-container">
                <input type="email" class="form-control email-input" id="txtemailLogin" placeholder="email">
                {{-- <i class="toggle-password fa fa-eye"></i> --}}
            </div>
        </div>
        <div class="form-group my-3">
            <div class="password-input-container">
                <input type="password" class="form-control password-input" id="txtPasswordLogin" placeholder="Password">
                <i class="toggle-password fa fa-eye fa-sm"></i>
            </div>
            <a class="forgot my-2" href=""><p>Lupa Password?</p></a>
        </div>
        <a class="btn btn-blue w-100" href="/content" role="button"><p>Masuk</p></a>
        <p class="text-center my-2">Belum Punya Akun? <a class="mendaftar" href="/register">Mendaftar</a></p>
    </div>

@endsection
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(".toggle-password").click(function () {
                var passwordInput = $($(this).siblings(".password-input"));
                var icon = $(this);
                if (passwordInput.attr("type") == "password") {
                    passwordInput.attr("type", "text");
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    passwordInput.attr("type", "password");
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });
        })
    </script>