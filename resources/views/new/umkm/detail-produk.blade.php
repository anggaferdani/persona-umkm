@extends('NewPagesTemplate.NavbarLengkap')
@section('judul_tab','Beranda')
@push('styles')
<style>
  ::-webkit-resizer{
    display: none;
  }
  .no-hover:focus,
  .form-control:focus {
    box-shadow: none;
    outline: none;
  }
  </style>
@endpush
@section('contentNavbarLengkap')
<link rel="stylesheet" href=" {{ asset('css/NewPages/Beranda.css')}}">

<div class="header" style="padding-top: 2.75rem;">
    <img src="{{ asset('images/beranda_umkm.png') }}">
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active disabled" style="background: #2388FF;">Jelajahi Tipe Anda</a>
                <a href="" class="list-group-item list-group-item-action">Hasil</a>
                <a href="" class="list-group-item list-group-item-action">Level Digitalisasi UMKM</a>
                <a href="" class="list-group-item list-group-item-action">Strategi Digital</a>
                <a href="{{ route('umkm.detail-produk') }}" class="list-group-item list-group-item-action {{ Route::is('umkm.detail-produk') ? 'text-primary' : '' }}">Detail Produk</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row g-3">
              <div class="fs-3 text-center text-primary">Detail Produk</div>
              @if(Session::get('success'))
                <div class="alert alert-important alert-success" role="alert">
                  {{ Session::get('success') }}
                </div>
              @endif
              @if($user->detailProduk)
              <form action="{{ route('umkm.detail-produk.update', $user->detailProduk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Foto Produk</label>
                  <input type="file" class="form-control" name="foto_produk" value="{{ $user->detailProduk->foto_produk }}">
                  <div><a href="/detail-produk/foto-produk/{{ $user->detailProduk->foto_produk }}">{{ $user->detailProduk->foto_produk }}</a></div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk" value="{{ $user->detailProduk->nama_produk }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">Deskripsi Produk</label>
                  <textarea class="form-control" rows="3" name="deskripsi_produk">{{ $user->detailProduk->deskripsi_produk }}</textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Produk</label>
                  <select class="form-select" name="jenis_produk">
                    <option selected>Pilih Jenis Produk</option>
                    <option value="makanan" @if($user->detailProduk->jenis_produk) @selected(true) @endif>Makanan</option>
                    <option value="minuman" @if($user->detailProduk->jenis_produk) @selected(true) @endif>Minuman</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              @else
              <form action="{{ route('umkm.detail-produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Foto Produk</label>
                  <input type="file" class="form-control" name="foto_produk">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="nama_produk">
                </div>
                <div class="mb-3">
                  <label class="form-label">Deskripsi Produk</label>
                  <textarea class="form-control" rows="3" name="deskripsi_produk"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Jenis Produk</label>
                  <select class="form-select" name="jenis_produk">
                    <option selected>Pilih Jenis Produk</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              @endif
            </div>
        </div>
    </div>
</div>
@endsection

