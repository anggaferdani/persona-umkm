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
    <img src="{{ asset('images/banner-ai.png') }}">
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-3">
          @include('new.umkm.sidebar')
        </div>
        <div class="col-md-9">
            <div class="fs-3 text-center text-primary">1. Template</div>
            <div class="col-md-6 m-auto text-center mb-5">Pilih template yang diinginkan dari berbagai opsi yang tersedia.</div>

            <div class="row g-3 mb-5">
              @foreach ($imageTemplates as $imageTemplate)
                <div class="col-md-3 col-4">
                  <a href="{{ route('umkm.ai.generate-image.temporary', $imageTemplate->id) }}"><img src="/image-template/contoh/{{ $imageTemplate->contoh }}" alt="" class="img-fluid w-100"></a>
                </div>
              @endforeach
            </div>
            <div class="d-flex justify-content-center">
              <div class="">{{ $imageTemplates->appends(request()->query())->links('pagination::bootstrap-4') }}</div>
            </div>

            {{-- @foreach ($imageTemplates as $imageTemplate)
                <div class="col-md-3 col-4">
                  <div class="" style="position: relative; aspect-ratio: 1;">
                    <img src="/image-template/contoh/{{ $imageTemplate->contoh }}" alt="" class="img-fluid w-100" style="position: absolute;">
                  </div>
                </div>
              @endforeach --}}

              {{-- @if(Session::get('success'))
                <div class="alert alert-important alert-success" role="alert">
                  {{ Session::get('success') }}
                </div>
              @endif

              <form action="{{ route('umkm.ai.generate-image.temporary') }}" method="POSt" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul">
                </div>
                <div class="mb-3">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" name="deskripsi">
                </div>
                <button class="btn btn-primary mb-5">Submit</button>
              </form> --}}

              {{-- @if(Session::get('success'))
                <div class="alert alert-important alert-success" role="alert">
                  {{ Session::get('success') }}
                </div>
              @endif
              @if($todayEvent)
              <form action="{{ route('umkm.ai.generate-image.store') }}" method="post">
                @csrf
                @if($user->detailProduk)
                  <input type="hidden" class="form-control" name="detail_produk_id" value="{{ $user->detailProduk->id }}">
                @endif
                <input type="hidden" class="form-control" name="text_request" value="buat yang bertemakan {{ $todayEvent['keterangan'] }}">
                <div class="alert alert-important alert-success" role="alert">
                  <div class="d-flex justify-content-center mb-2"><img src="{{ asset('images/bouncy-calendar-with-marked-day-and-pencil.gif') }}" alt="" class="" width="100"></div>
                  <div class="text-center mb-3">Bertepatan dengan <span class="fw-bold">{{ $todayEvent['keterangan'] }}</span> pada tanggal <span class="fw-bold">{{ $todayEvent['tanggal'] }}</span> apakah anda ingin membuat text bertemakan <span class="fw-bold">{{ $todayEvent['keterangan'] }}</span>?</div>
                  <button id="submitButton" type="submit" class="btn btn-primary m-auto px-3 d-flex align-items-center gap-2" @if(!$user->detailProduk || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </form>
              @endif
              @if(!$user->detailProduk)
                <div class="alert alert-important alert-danger" role="alert">Lengkapi detail produk anda <a href="{{ route('umkm.detail-produk') }}">disini.</a></div>
              @endif
            <form action="{{ route('umkm.ai.generate-image.store') }}" method="post">
              @csrf
              @if($user->detailProduk)
                <input type="hidden" class="form-control" name="detail_produk_id" value="{{ $user->detailProduk->id }}">
              @endif
              <div class="d-md-flex d-block border border-primary rounded p-3 mb-3">
                <textarea class="form-control border-0 p-0 mb-3 mb-md-0" name="text_request" rows="1" placeholder="Apa yang kamu ingin buat?" oninput="adjustHeight(this)">{{ old('text_request', session('text_request', '')) }}</textarea>
                <div>
                  <button id="submitButton" type="submit" class="btn btn-primary px-3 w-100 d-flex align-items-center gap-2" @if(!$user->detailProduk || Auth::user()->credits == 0) disabled @endif>Generate <i class="fa-solid fa-coins"></i> 10</button>
                </div>
              </div>
            </form>
            @if(session('responses') && count(session('responses')) > 0)
            <div class="row g-3">
              @foreach(session('responses') as $response)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100">
                      <div class="card-body">
                        <div id="text-to-copy">{{ $response->text_response }}</div>
                      </div>
                      <div class="card-footer bg-white border-0">
                        <div class="text-end"><span class="btn btn-sm btn-primary" onclick="copyText('{{ addslashes($response->text_response) }}')"><i class="fa-regular fa-copy"></i></span></div>
                      </div>
                    </div>
                </div>
              @endforeach
            </div>
            @endif --}}
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
  function adjustHeight(element) {
      element.style.height = 'auto';
      element.style.height = element.scrollHeight + 'px';
  }

  function copyText(text) {
    navigator.clipboard.writeText(text).then(() => {
      alert('copied.');
    });
  }

  function disableButton() {
      document.getElementById('submitButton').disabled = true;
  }
</script>
@endpush
