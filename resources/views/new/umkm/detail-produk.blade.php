@extends('NewPagesTemplate.NavbarLengkap')
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
          @include('new.umkm.sidebar')
        </div>
        <div class="col-md-9">
          @if(Session::get('success'))
            <div class="alert alert-important alert-primary" role="alert">
              {{ Session::get('success') }}
            </div>
          @endif

          @if(Session::get('error'))
            <div class="alert alert-important alert-danger" role="alert">
              {{ Session::get('error') }}
            </div>
          @endif
          
          <div class="mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus text-white"></i> Tambah</button>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Produk</th>
                  <th>Jenis Produk</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detailProduks as $detailProduk)
                <tr>
                  <td class="small">{{ $loop->iteration }}</td>
                  <td class="small">{{ $detailProduk->nama_produk }}</td>
                  <td class="small">{{ $detailProduk->jenisProduk->jenis_produk ?? '-' }}</td>
                  <td>
                    <form action="{{ route('umkm.detail-produk.destroy', $detailProduk->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-warning btn-icon" data-bs-toggle="modal" data-bs-target="#editModal{{ $detailProduk->id }}"><i class="fa-solid fa-pen text-white"></i></button>
                      <button type="button" class="btn btn-danger btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('umkm.detail-produk.store') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          <div class="mb-3">
            <label class="form-label">Foto Produk <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="foto_produk">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_produk">
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi Produk <span class="text-danger">*</span></label>
            <textarea class="form-control mb-1" rows="3" name="deskripsi_produk"></textarea>
            <div class="small text-danger">Masukan deskripsi lengkap tentang produk untuk hasil generate yang lebih baik.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Produk <span class="text-danger">*</span></label>
            <select class="form-select" name="jenis_produk_id">
              <option selected>Pilih Jenis Produk</option>
              @foreach($jenisProduks as $jenisProduk)
                <option value="{{ $jenisProduk->id }}">{{ $jenisProduk->jenis_produk }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach($detailProduks as $detailProduk)
<div class="modal fade" id="editModal{{ $detailProduk->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('umkm.detail-produk.update', $detailProduk->id) }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label">Foto Produk <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="foto_produk" value="{{ $detailProduk->foto_produk }}">
            <div><a href="/detail-produk/foto-produk/{{ $detailProduk->foto_produk }}" target="_blank">{{ $detailProduk->foto_produk }}</a></div>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="nama_produk" value="{{ $detailProduk->nama_produk }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi Produk <span class="text-danger">*</span></label>
            <textarea class="form-control mb-1" rows="3" name="deskripsi_produk">{{ $detailProduk->deskripsi_produk }}</textarea>
            <div class="small text-danger">Masukan deskripsi lengkap tentang produk untuk hasil generate yang lebih baik.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis Produk <span class="text-danger">*</span></label>
            <select class="form-select" name="jenis_produk_id">
              <option selected>Pilih Jenis Produk</option>
              @foreach($jenisProduks as $jenisProduk)
                <option value="{{ $jenisProduk->id }}" @if($detailProduk->jenis_produk_id == $jenisProduk->id) @selected(true) @endif>{{ $jenisProduk->jenis_produk }}</option>                
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection

