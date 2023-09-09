@extends('Pages.Templates')
@section('judul_tab','Register Kemendikbud')

@section('content')
<link rel="stylesheet" href=" {{ asset('../css/Pages/Register.css')}}">

    <div class="pageRegister">
        <h3 class="text-blue mb-5 text-center fw-bold">UMKM</h3>
        <h3 class="text-center fw-bold mb-3">Membuat Akun Baru</h3>
        <p class="text-center">Perhatikan bahwa verifikasi telepon mungkin diperlukan
            untuk mendaftar. Nomor Anda hanya akan digunakan untuk
            memverifikasi identitas Anda untuk tujuan keamanan.</p>

            <div class="form-group my-3">
                <div class="email-input-container">
                    <input type="email" class="form-control email-input" id="txtemailLogin" placeholder="email">
                </div>
            </div>
            <a class="btn btn-blue w-100" href="/register2" role="button"><p>Lanjut</p></a>
            <p class="text-center my-2">Sudah Memiliki Akun? <a class="mendaftar" href="/login">Masuk</a></p>
    </div>

@endsection